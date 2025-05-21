<?php

namespace App\Http\Livewire\Kasir;

use Livewire\Component;

class Kasir extends Component
{
    public $namaPelanggan = 'Nama Pelanggan';
    public $inputToggle = false;
    public $selectedKategori = 'All Menu';
    public $categorys = [];

    public function mount()
    {
        $this->categorys = [
            [
                'nama' => 'All Menu',
                'ttl' => 112,
                'icon' => 'fa-dumpster',
                'color' => 'purple',
                'active' => $this->selectedKategori == 'all'
            ],
            [
                'nama' => 'Makanan',
                'ttl' => 32,
                'icon' => 'fa-hamburger',
                'color' => 'success',
                'active' => $this->selectedKategori == 'makanan'
            ],
            [
                'nama' => 'Minuman',
                'ttl' => 20,
                'icon' => 'fa-coffee',
                'color' => 'warning',
                'active' => $this->selectedKategori == 'minuman'
            ],
            [
                'nama' => 'Dessert',
                'ttl' => 60,
                'icon' => 'fa-ice-cream',
                'color' => 'primary',
                'active' => $this->selectedKategori == 'dessert'
            ],
            [
                'nama' => 'Dessert',
                'ttl' => 60,
                'icon' => 'fa-ice-cream',
                'color' => 'primary',
                'active' => $this->selectedKategori == 'dessert'
            ],
            [
                'nama' => 'Dessert',
                'ttl' => 60,
                'icon' => 'fa-ice-cream',
                'color' => 'primary',
                'active' => $this->selectedKategori == 'dessert'
            ],
        ];
    }

    public function toggleInputNamaPelanggan()
    {
        $this->inputToggle = !$this->inputToggle;
    }

    public function selectKategori($nama)
    {
        $this->selectedKategori = $nama;
    }

    public function render()
    {
        return view('livewire.kasir.kasir');
    }
}
