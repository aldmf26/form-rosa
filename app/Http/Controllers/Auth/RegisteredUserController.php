<?php

namespace App\Http\Controllers\Auth;

use App\Actions\Fortify\CreateNewUser;
use Illuminate\Http\Request;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Illuminate\Routing\Controller;

class RegisteredUserController extends Controller
{
    public function store(Request $request, CreatesNewUsers $creator)
    {
        // Validasi dan buat user
        $creator->create($request->all());

        // Redirect ke halaman login dengan pesan sukses
        return redirect()->route('login')->with('sukses', 'Buat bisnis berhasil dibuat. Silahkan minta superadmin untuk mengaktifkan akun Anda.');
    }
}
