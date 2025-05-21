<?php

namespace App\Http\Controllers\Owner\Produk;

use App\Http\Controllers\Controller;
use App\Models\Kategori;
use Illuminate\Http\Request;

class DaftarKategoriController extends Controller
{
    public function index()
    {
        $kategori = Kategori::all();
        $data = [
            'title' => 'Daftar Kategori',
            'kategori' => $kategori
        ];
        return view('owner.produk.kategori.index',$data);
    }
}
