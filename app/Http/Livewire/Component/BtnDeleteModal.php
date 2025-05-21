<?php

namespace App\Http\Livewire\Component;

use Livewire\Component;

class BtnDeleteModal extends Component
{
    public $id, $nama;

    public function delete($id)
    {
        
    }
    public function render()
    {
        return view('livewire.component.btn-delete-modal');
    }
}
