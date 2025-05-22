<?php

namespace App\Http\Livewire;

use App\Exports\PendaftaranExport;
use App\Http\Livewire\Traits\WithTableSearch;
use App\Models\Pendaftaran;
use Livewire\Component;
use Livewire\WithPagination;
use Maatwebsite\Excel\Excel as MaatwebsiteExcel;

class TblPendaftaran extends Component
{
    use WithPagination, WithTableSearch;
    public $idSelected, $form = [];
   
    public function store()
    {
        $this->form['is_active'] = true;
        Pendaftaran::create($this->form);

        session()->flash('sukses', "Data Pendaftaran {$this->form['nama_lengkap']} berhasil disimpan.");

        $this->form = [];

        $this->dispatch('closeModal');
    }

    public function toggleAktif($id)
    {
        $pendaftar = Pendaftaran::findOrFail($id);
        $pendaftar->is_active = !$pendaftar->is_active;
        $pendaftar->save();

        session()->flash('sukses', "Status aktif Nama: {$pendaftar->nama_lengkap} berhasil diubah.");
    }

    public function delete()
    {
        $kasir = Pendaftaran::find($this->idSelected);
        $kasir->delete();
        session()->flash('sukses', "Nama : $kasir->name berhasil dihapus.");
        $this->dispatch('closeModal');
    }

    public function export()
    {
        // Ambil data yang sudah difilter
        $query = Pendaftaran::query()->orderBy('id', 'desc');
        $pendaftar = $this->applyTableFilters($query)->get();

        // Inisialisasi instance Excel
        $excel = app(MaatwebsiteExcel::class);

        // Ekspor data yang sudah difilter
        return $excel->download(new PendaftaranExport($pendaftar), 'pendaftaran_' . now()->format('Y-m-d_H-i-s') . '.xlsx');
    }

    public function render()
    {
        $query = Pendaftaran::query()->orderBy('id', 'desc');

        $pendaftar = $this->applyTableFilters($query)->paginate($this->perPage);

        $data = [
            'pendaftars' => $pendaftar
        ];
        return view('livewire.tbl-pendaftaran', $data);
    }
}
