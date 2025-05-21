<?php

namespace App\Http\Livewire\Owner;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Perusahaan extends Component
{
    public $activeCompanyId;
    public $companies;
    public $selectedCompany;

    public function mount()
    {
        // Muat daftar perusahaan milik pengguna
        $this->companies = Auth::user()->perusahaan;
        // Set perusahaan pertama sebagai default (jika ada)
        $this->activeCompanyId = $this->companies->first()->id ?? null;
        $this->loadCompanyData();
    }

    public function updatedActiveCompanyId($value)
    {
        // Ketika activeCompanyId berubah, muat data perusahaan yang sesuai
        $this->activeCompanyId = $value;
        $this->loadCompanyData();
    }

    public function changeCompany($company)
    {
        $this->activeCompanyId = $company;
        $this->loadCompanyData();
    }

    public function loadCompanyData()
    {

        // Muat data perusahaan berdasarkan activeCompanyId
        $this->selectedCompany = $this->companies->firstWhere('id', $this->activeCompanyId);
    }
    
    public function render()
    {
        return view('livewire.owner.perusahaan');
    }
}
