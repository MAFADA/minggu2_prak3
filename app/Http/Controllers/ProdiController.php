<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdiController extends Controller
{
    public function mi(){
        return 'Halaman Program Studi Manajemen Informatika';
    }

    public function ti(){
        return 'Halaman Program Studi Teknik Informatika';
    }
}
