<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SaranaController extends Controller
{
    public function kantor(){
        return 'Halaman Perkantoran';
    }

    public function lab(){
        return 'Halaman Laboratorium';
    }

    public function kelas(){
        return 'Halaman Kelas';
    }

    public function lain(){
        return 'Halaman Lainnya';
    }
}
