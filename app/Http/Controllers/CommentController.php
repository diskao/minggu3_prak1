<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function comment($nama, $pesan){
        return "Saya ".$nama." pesan dari saya adalah ".$pesan;
    }
}