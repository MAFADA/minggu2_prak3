<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProgramStudiController extends Controller
{
    public function mi(){
        return 'Halaman Manajemen Informatika';
    }

    public function ti(){
        return 'Halaman Teknik Informatika';
    }
}
