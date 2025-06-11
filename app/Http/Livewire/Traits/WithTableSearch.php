<?php

namespace App\Http\Livewire\Traits;

use App\Exports\PendaftaranExport;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;
use Maatwebsite\Excel\Excel;
use Livewire\Attributes\Url;

trait WithTableSearch
{
    public $search = '';
    public $perPage = 10;
    public $statusFilter = null;

    // Tambahkan properti untuk filter tanggal
    #[Url]
    public $bulan,
        $tahun,
        $dari,
        $sampai;
    #[Url]
    public $filterType = 'bulan';
    public function mountWithTableSearch()
    {
        // Inisialisasi default
        $this->bulan = $this->bulan ?? date('m'); // Gunakan nilai dari URL jika ada
        $this->tahun = $this->tahun ?? date('Y');
        $this->dari = $this->dari ?? null; // Jangan set default ke awal bulan
        $this->sampai = $this->sampai ?? null; // Jangan set default ke akhir bulan
        $this->filterType = $this->filterType ?? 'bulan'; // Default ke filter bulan
    }

    public function updatedPerPage($value)
    {
        $this->perPage = $value;
        $this->resetPage();
    }

    public function updatedBulan()
    {
        $this->filterType = 'bulan';
        $this->dari = null;
        $this->sampai = null;
        $this->resetPage();
    }

    public function updatedTahun()
    {
        $this->filterType = 'bulan';
        $this->dari = null;
        $this->sampai = null;
        $this->resetPage();
    }

    public function updatedDari()
    {
        $this->filterType = 'custom';
        $this->bulan = null;
        $this->tahun = null;
        $this->resetPage();
    }

    public function updatedSampai()
    {
        $this->filterType = 'custom';
        $this->bulan = null;
        $this->tahun = null;
        $this->resetPage();
    }

    public function resetFilter()
    {
        $this->bulan = date('m');
        $this->tahun = date('Y');
        $this->dari = null;
        $this->sampai = null;
        $this->filterType = 'bulan';
        $this->search = '';
        $this->statusFilter = null;
        $this->resetPage();
    }

    public function applyTableFilters(Builder $query, array $searchableColumns = ['nama_lengkap']): Builder
    {
        if ($this->search) {
            $query->where(function ($q) use ($searchableColumns) {
                foreach ($searchableColumns as $column) {
                    $q->orWhere($column, 'like', '%' . $this->search . '%');
                }
            });
        }

        if ($this->statusFilter === 'aktif') {
            $query->where('is_active', true);
        } elseif ($this->statusFilter === 'tidak') {
            $query->where('is_active', false);
        }

        // Filter berdasarkan tipe
        if ($this->filterType === 'bulan' && $this->bulan && $this->tahun) {
            $query->whereMonth('tanggal_daftar', $this->bulan)
                  ->whereYear('tanggal_daftar', $this->tahun);
        } elseif ($this->filterType === 'custom') {
            if ($this->dari && $this->sampai) {
                $query->whereBetween('tanggal_daftar', [$this->dari, $this->sampai]);
            } elseif ($this->dari) {
                $query->where('tanggal_daftar', '>=', $this->dari);
            } elseif ($this->sampai) {
                $query->where('tanggal_daftar', '<=', $this->sampai);
            }
        }

        return $query;
    }
}
