<?php

namespace App\Http\Controllers\Owner\Pengaturan;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UndangKasirController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Undang Kasir'
        ];
        return view('owner.pengaturan.undang_kasir.index', $data);
    }
}
