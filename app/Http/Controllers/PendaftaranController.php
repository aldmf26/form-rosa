<?php

namespace App\Http\Controllers;

use App\Models\Pendaftaran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PendaftaranController extends Controller
{
    public function index()
    {
        $pendaftar = Pendaftaran::latest()->get();
        $data = [
            'title' => 'Daftar Pendaftar',
            'pendaftars' => $pendaftar
        ];
        return view('pendaftaran.index', $data);
    }


    public function detail($nomor)
    {
        $pendaftar = Pendaftaran::where('no_hp', $nomor)->first();
        return view('pendaftaran.detail', compact('pendaftar'));
    }
}
