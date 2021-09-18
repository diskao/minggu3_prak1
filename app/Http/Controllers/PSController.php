<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PSController extends Controller
{
    public function MI(){
        return view ('prodi.MI', ['name' => 'Selamat Datang di Program Studi Manajemen Informatika']);
    }

    public function TI(){
        return view ('prodi.TI', ['name' => 'Selamat Datang di Program Studi Teknik Informatika']);
    }
}
