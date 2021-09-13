<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        return "Ini adalah Halaman Awal Website";
    }

    public function mi(){
        return 'Halaman Program Studi Manajemen Informatika';
    }

    public function ti(){
        return 'Halaman Program Studi Teknik Informatika';
    }

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
