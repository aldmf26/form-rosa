<?php

namespace App\Http\Livewire\Produk\Item;

use App\Models\Kategori;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\Attributes\Validate;

class Index extends Component
{
    use WithFileUploads;

    #[Validate(['photo' => 'image|max:1024'])]
    public $photo;
    public $namaKategori, $urutanKategori;
    public $form = [];
    public function submit()
    {
        // $business->addMediaFromRequest('logo')
        //     ->usingName($input['namaBisnis'])
        //     ->toMediaCollection('logo');
    }

    public function simpanKategori()
    {
        $this->validate([
            'namaKategori' => 'required|string|max:255',
            'urutanKategori' => 'required|integer'
        ]);

        Kategori::create([
            'nama' => $this->namaKategori,
            'urutan' => $this->urutanKategori,
            'business_id' => auth()->user()->business_id,
            'is_active' => true
        ]);

        session()->flash('sukses', "Kategori : $this->namaKategori berhasil ditambahkan.");
        $this->reset(['namaKategori', 'urutanKategori']);
        $this->dispatch('closeModal');
    }

    public function render()
    {
        $kategoris = Kategori::where('business_id', auth()->user()->business_id)->orderBy('nama')->get();
        $data = [
            'kategoris' => $kategoris
        ];
        return view('livewire.produk.item.index', $data);
    }
}
