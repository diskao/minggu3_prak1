<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home() {
        return view ('home', ['name' => 'Selamat Datang di Halaman Website Jurusan Teknologi Informasi Politeknik Negeri Malang']);
    }
}
