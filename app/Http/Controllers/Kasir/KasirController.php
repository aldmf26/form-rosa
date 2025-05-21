<?php

namespace App\Http\Controllers\Kasir;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class KasirController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Kasir'
        ];
        return view('kasir.index', $data);
    }
}
