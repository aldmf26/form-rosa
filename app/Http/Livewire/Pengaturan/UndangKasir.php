<?php

namespace App\Http\Livewire\Pengaturan;

use App\Http\Livewire\Traits\WithTableSearch;
use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class UndangKasir extends Component
{
    use WithPagination, WithTableSearch;
    public $name,
        $email,
        $password,
        $ambilEdit = [],
        $ubah = [],
        $idSelected;

    protected $rules = [
        'name' => 'required|string|max:255',
        'email' => 'required|string|email|max:255|unique:users',
    ];



    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function selectKasir($id)
    {
        $kasir = User::findOrFail($id);
        $this->idSelected = $id;
        $this->name = $kasir->name;
        $this->email = $kasir->email;

        $this->dispatch('openEditModal');
    }


    public function save()
    {

        if ($this->idSelected) {
            $kasir = User::find($this->idSelected)->update([
                'name' => $this->name,
                'email' => $this->email,
                'password' => bcrypt($this->password),
            ]);
            session()->flash('sukses', "Kasir : $this->name berhasil diubah.");
            $this->reset();
            return;
        } else {
        $this->validate();

            $business = auth()->user()->business;
            $jumlahKasir = User::where('business_id', $business->id)->where('role', 'kasir')->count();
            // if ($jumlahKasir >= 1 && !$business->hasActiveAddon('multi kasir')) {
            //     abort(403, 'Upgrade ke add-on multi kasir untuk menambah lebih dari 1 kasir.');
            // }

            $kasir = User::create([
                'name' => $this->name,
                'email' => $this->email,
                'password' => bcrypt($this->password),
                'role' => 'kasir',
                'is_active' => 1,
                'business_id' => auth()->user()->business_id
            ]);

            $kasir->assignRole('kasir');
            session()->flash('sukses', "Kasir : $this->name berhasil ditambahkan.");
            $this->reset();
        }
    }

    public function toggleAktif($id)
    {
        $kasir = User::find($id);
        $kasir->is_active = !$kasir->is_active;
        $kasir->save();
        session()->flash('sukses', "Status Aktif kasir : $kasir->name berhasil diubah.");
    }

    public function delete()
    {
        $kasir = User::find($this->idSelected);
        $kasir->delete();
        session()->flash('sukses', "Kasir : $kasir->name berhasil dihapus.");
        $this->dispatch('closeModal');
    }

    public function render()
    {
        $query = User::where('role', 'kasir')
                ->where('business_id', auth()->user()->business_id)
                ->latest();

        $kasir = $this->applyTableFilters($query, ['name', 'email'])->paginate($this->perPage);

        $data = [
            'kasir' => $kasir
        ];
        return view('livewire.pengaturan.undang-kasir', $data);
    }
}
