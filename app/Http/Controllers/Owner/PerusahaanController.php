<?php

namespace App\Http\Controllers\Owner;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class PerusahaanController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Perusahaan',
        ];
        return view('owner.perusahaan.index',$data);
    }
}
