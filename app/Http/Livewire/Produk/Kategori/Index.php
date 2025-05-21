<?php

namespace App\Http\Livewire\Produk\Kategori;

use App\Http\Livewire\Traits\WithTableSearch;
use App\Models\Kategori;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination, WithTableSearch;

    public $nama, $urutan, $idSelected;

    public function selectKategori($id)
    {
        $kasir = Kategori::findOrFail($id);
        $this->idSelected = $id;
        $this->nama = $kasir->nama;
        $this->urutan = $kasir->urutan;

        $this->dispatch('openEditModal');
    }

    public function save()
    {
        if ($this->idSelected) {
            Kategori::find($this->idSelected)->update([
                'nama' => $this->nama,
                'urutan' => $this->urutan,
            ]);
            session()->flash('sukses', "Kategori : $this->nama berhasil diubah.");
            $this->reset();
            return;
        } else {
            $this->validate([
                'nama' => 'required',
                'urutan' => 'required',
            ]);
            Kategori::create([
                'nama' => $this->nama,
                'urutan' => $this->urutan,
                'business_id' => auth()->user()->business_id,
                'is_active' => true
            ]);
            session()->flash('sukses', "Kategori : $this->nama berhasil ditambahkan.");
            $this->reset();
        }
    }

    public function delete()
    {
        $kasir = Kategori::find($this->idSelected);
        $kasir->delete();
        session()->flash('sukses', "Kategori : $kasir->name berhasil dihapus.");
        $this->dispatch('closeModal');
    }

    public function toggleAktif($id)
    {
        $kategori = Kategori::find($id);
        $kategori->is_active = !$kategori->is_active;
        $kategori->save();
        session()->flash('sukses', "Status Aktif Kategori : $kategori->nama berhasil diubah.");
    }

    public function render()
    {
        $query = Kategori::where('business_id', auth()->user()->business_id)
            ->latest();
        $kategori = $this->applyTableFilters($query)->paginate($this->perPage);
        $data = [
            'kategori' => $kategori
        ];
        return view('livewire.produk.kategori.index', $data);
    }
}
