<?php

namespace App\Actions\Fortify;

use App\Models\Business;
use App\Models\Outlet;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array  $input
     * @return \App\Models\User
     */
    public function create(array $input)
    {
        // Validasi input
        $messages = [
            'namaBisnis.required' => 'Nama bisnis harus diisi',
            'namaBisnis.string' => 'Nama bisnis harus berupa teks',
            'namaBisnis.max' => 'Nama bisnis maksimal berisi 255 karakter',
            'name.required' => 'Nama harus diisi',
            'name.string' => 'Nama harus berupa teks',
            'name.max' => 'Nama maksimal berisi 255 karakter',
            'logo.required' => 'Logo harus diisi',
            'logo.image' => 'Logo harus berupa gambar',
            'logo.mimes' => 'Logo harus berupa file dengan tipe jpeg, png, jpg, gif, atau svg',
            'jenis.required' => 'Jenis bisnis harus diisi',
            'jenis.string' => 'Jenis bisnis harus berupa teks',
            'jenis.max' => 'Jenis bisnis maksimal berisi 255 karakter',
            'sosmed.string' => 'Sosmed harus berupa teks',
            'sosmed.max' => 'Sosmed maksimal berisi 255 karakter',
            'nama_outlet.required' => 'Nama outlet harus diisi',
            'nama_outlet.string' => 'Nama outlet harus berupa teks',
            'nama_outlet.max' => 'Nama outlet maksimal berisi 255 karakter',
            'alamat.required' => 'Alamat harus diisi',
            'alamat.string' => 'Alamat harus berupa teks',
            'alamat.max' => 'Alamat maksimal berisi 255 karakter',
            'no_hp.required' => 'Nomor HP harus diisi',
            'no_hp.string' => 'Nomor HP harus berupa teks',
            'no_hp.max' => 'Nomor HP maksimal berisi 255 karakter',
            'email.required' => 'Email harus diisi',
            'email.string' => 'Email harus berupa teks',
            'email.email' => 'Email tidak valid',
            'email.max' => 'Email maksimal berisi 255 karakter',
            'email.unique' => 'Email sudah digunakan',
            'password.required' => 'Password harus diisi',
            'password_confirmation.required' => 'Konfirmasi password harus diisi',
            'password_confirmation.same' => 'Konfirmasi password harus sama dengan password',
        ];

        $validator = Validator::make($input, [
            'namaBisnis' => ['required', 'string', 'max:255'],
            'name' => ['required', 'string', 'max:255'],
            'logo' => ['required', 'image', 'mimes:jpeg,png,jpg,gif,svg'],
            'jenis' => ['required', 'string', 'max:255'],
            'sosmed' => ['nullable', 'string', 'max:255'],
            'nama_outlet' => ['required', 'string', 'max:255'],
            'alamat' => ['required', 'string', 'max:255'],
            'no_hp' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => $this->passwordRules(),
            'password_confirmation' => ['required', 'string', 'same:password'],
        ], $messages);


        // Create business (toko)
        $business = Business::create([
            'name' => $input['namaBisnis'],
            'type' => $input['jenis'],
            'address' => $input['alamat'],
            'phone' => $input['no_hp'],
            'logo_url' => null,
            'sosmed' => $input['sosmed'],
            'subscription_id' => 1,
            'subscription_start' => now(),
            'subscription_end' => now()->addDays(5),
        ]);

        $business->addMediaFromRequest('logo')
            ->usingName($input['namaBisnis'])
            ->toMediaCollection('logo');

        // Buat pengguna (owner) terlebih dahulu
        $user = User::create([
            'name' => $input['name'],
            'email' => $input['email'],
            'role' => 'owner',
            'business_id' => $business->id,
            'password' => Hash::make($input['password']),
            'is_active' => false
        ]);
        // Tambahkan role ke pengguna
        $user->assignRole('owner');

        return $user;
    }
}
