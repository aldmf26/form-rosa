<?php

namespace App\Http\Livewire\Traits;

use App\Exports\PendaftaranExport;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;
use Maatwebsite\Excel\Excel;

trait WithTableSearch
{
    public $search = '';
    public $perPage = 10;
    public $statusFilter = null;

    // Tambahkan properti untuk filter tanggal
    public $bulan = '';
    public $tahun = '';
    public $dari = '';
    public $sampai = '';

    public function mountWithTableSearch()
    {
        $this->bulan = date('m'); // Set bulan default ke bulan saat ini
        $this->tahun = date('Y'); // Set tahun default ke tahun saat ini
        $this->dari = Carbon::now()->startOfMonth()->format('Y-m-d');
        $this->sampai = Carbon::now()->endOfMonth()->format('Y-m-d');
    }

    public function updatedPerPage($value)
    {
        $this->perPage = $value;
    }

    public function updatedBulan()
    {
        $this->resetPage();
    }

    public function updatedTahun()
    {
        $this->resetPage();
    }

    public function updatedDari()
    {
        $this->resetPage();
    }

    public function updatedSampai()
    {
        $this->resetPage();
    }
    
    /**
     * Reset filter search, status, dan tanggal
     */
    public function resetFilter()
    {
        $now = Carbon::now();
        $this->bulan = $now->format('m');
        $this->tahun = $now->year;
        $this->dari = '';
        $this->sampai = '';
        $this->resetPage();
    }

   

    /**
     * Terapkan filter standar: search, status, dan tanggal
     */
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

        // Filter berdasarkan Bulan dan Tahun
        if ($this->bulan && $this->tahun) {
            $query->whereMonth('tanggal_daftar', $this->bulan)
                  ->whereYear('tanggal_daftar', $this->tahun);
        }

        // Filter berdasarkan Rentang Tanggal Kustom
        if ($this->dari && $this->sampai) {
            $query->whereBetween('tanggal_daftar', [$this->dari, $this->sampai]);
        } elseif ($this->dari) {
            $query->where('tanggal_daftar', '>=', $this->dari);
        } elseif ($this->sampai) {
            $query->where('tanggal_daftar', '<=', $this->sampai);
        }

        return $query;
    }
}