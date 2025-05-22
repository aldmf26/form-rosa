<?php

namespace App\Http\Livewire;

use App\Models\Pendaftaran;
use Livewire\Component;

class WelcomeForm extends Component
{
    public $form = [];
    public function store()
    {
        $this->validate([
            'form.no_hp' => ['required', 'string', 'max:15', 'unique:pendaftarans,no_hp'],
            'form.nama_lengkap' => ['required', 'string', 'max:50'],
            'form.instagram_facebook' => ['nullable', 'string', 'max:50'],
            'form.alamat' => ['required', 'string', 'max:255'],
            'form.tempat_lahir' => ['required', 'string', 'max:50'],
            'form.tanggal_lahir' => ['required', 'date'],
            'form.jenis_kelamin' => ['required', 'string', 'in:laki-laki,perempuan'],
            'form.nama_panggilan' => ['nullable', 'string', 'max:50'],
            'form.sekolah_di' => ['required', 'string', 'max:50'],
            'form.agama' => ['required', 'string', 'in:islam,kristen,hindu,budha,lainnya'],
            'form.nama_orangtua' => ['required', 'string', 'max:50'],
            'form.no_hp_orangtua' => ['required', 'string', 'max:15', 'unique:pendaftarans,no_hp_orangtua'],
        ], [
            'form.no_hp.required' => 'No HP harus diisi',
            'form.no_hp.string' => 'No HP harus berupa string',
            'form.no_hp.unique' => 'No HP sudah digunakan',
            'form.no_hp.max' => 'No HP maksimal 15 karakter',
            'form.nama_lengkap.required' => 'Nama Lengkap harus diisi',
            'form.nama_lengkap.string' => 'Nama Lengkap harus berupa string',
            'form.nama_lengkap.max' => 'Nama Lengkap maksimal 50 karakter',
            'form.instagram_facebook.string' => 'Instagram/Facebook harus berupa string',
            'form.instagram_facebook.max' => 'Instagram/Facebook maksimal 50 karakter',
            'form.alamat.required' => 'Alamat harus diisi',
            'form.alamat.string' => 'Alamat harus berupa string',
            'form.alamat.max' => 'Alamat maksimal 255 karakter',
            'form.tempat_lahir.required' => 'Tempat Lahir harus diisi',
            'form.tempat_lahir.string' => 'Tempat Lahir harus berupa string',
            'form.tempat_lahir.max' => 'Tempat Lahir maksimal 50 karakter',
            'form.tanggal_lahir.required' => 'Tanggal Lahir harus diisi',
            'form.tanggal_lahir.date' => 'Tanggal Lahir harus berupa tanggal',
            'form.jenis_kelamin.required' => 'Jenis Kelamin harus diisi',
            'form.jenis_kelamin.string' => 'Jenis Kelamin harus berupa string',
            'form.jenis_kelamin.in' => 'Jenis Kelamin harus laki-laki atau perempuan',
            'form.nama_panggilan.string' => 'Nama Panggilan harus berupa string',
            'form.nama_panggilan.max' => 'Nama Panggilan maksimal 50 karakter',
            'form.sekolah_di.required' => 'Sekolah Di harus diisi',
            'form.sekolah_di.string' => 'Sekolah Di harus berupa string',
            'form.sekolah_di.max' => 'Sekolah Di maksimal 50 karakter',
            'form.agama.required' => 'Agama harus diisi',
            'form.agama.string' => 'Agama harus berupa string',
            'form.agama.in' => 'Agama harus islam, kristen, hindu, budha, atau lainnya',
            'form.nama_orangtua.required' => 'Nama Orangtua harus diisi',
            'form.nama_orangtua.string' => 'Nama Orangtua harus berupa string',
            'form.nama_orangtua.max' => 'Nama Orangtua maksimal 50 karakter',
            'form.no_hp_orangtua.required' => 'No HP Orangtua harus diisi',
            'form.no_hp_orangtua.string' => 'No HP Orangtua harus berupa string',
            'form.no_hp_orangtua.max' => 'No HP Orangtua maksimal 15 karakter',
            'form.no_hp_orangtua.unique' => 'No HP sudah digunakan',

        ]);

        Pendaftaran::create($this->form);

        session()->flash('sukses', "Data Pendaftaran {$this->form['nama_lengkap']} berhasil disimpan.");
        $this->redirect('detail/' . $this->form['no_hp']);
    }
    
    public function render()
    {
        return view('livewire.welcome-form');
    }
}
