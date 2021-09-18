<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SaranaController extends Controller
{
    public function perkantoran(){
        return view ('sarana.perkantoran', ['name' => 'Berikut adalah sarana prasarana perkantoran']);
    }

    public function laboratorium(){
        return view ('sarana.laboratorium', ['name' => 'Berikut adalah sarana prasarana laboratorium']);
    }

    public function kelas(){
        return view ('sarana.kelas', ['name' => 'Berikut adalah sarana prasarana kelas']);
    }

    public function lainnya(){
        return view ('sarana.lainnya', ['name' => 'Berikut adalah sarana prasarana lainnya']);
    }
}
