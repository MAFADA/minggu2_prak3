<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SaranaController extends Controller
{
    public function kantor(){
        return 'Halaman Tentang Perkantoran';
    }

    public function lab(){
        return 'Halaman Tentang Laboratorium';
    }

    public function kelas(){
        return 'Halaman Tentang Kelas';
    }

    public function lain(){
        return 'Halaman Lainnya';
    }
}
