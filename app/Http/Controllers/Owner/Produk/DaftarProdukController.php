<?php

namespace App\Http\Controllers\Owner\Produk;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DaftarProdukController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Daftar Produk',
        ];
        return view('owner.produk.item.index',$data);
    }
}
