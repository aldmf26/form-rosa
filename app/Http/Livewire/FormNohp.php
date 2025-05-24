<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\DB;
use Livewire\Component;

class FormNohp extends Component
{
    public $nohp;
    public function mount()
    {
        $this->nohp = DB::table('nohp_admin')->first()->nohp;
    }
    public function save()
    {
        DB::table('nohp_admin')->truncate();
        
        DB::table('nohp_admin')->insert([
            'nohp' => $this->nohp
        ]);

        session()->flash('sukses', "No hp admin diubah.");
    }
    public function render()
    {
        return view('livewire.form-nohp');
    }
}
