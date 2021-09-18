<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SaranaController extends Controller
{
    public function perkantoran(){
        return "Berikut adalah sarana prasarana perkantoran";
    }

    public function laboratorium(){
        return "Berikut adalah sarana prasarana laboratorium";
    }

    public function kelas(){
        return "Berikut adalah sarana prasarana kelas";
    }

    public function lainnya(){
        return "Berikut adalah sarana prasarana lainnya";
    }
}
