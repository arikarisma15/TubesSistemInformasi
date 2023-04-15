<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class wisata extends Controller
{
 
    public function coba(){
        return view('template');
    }


    public function halo(){
        return view('dashboard');
    }

    public function budrek(){
        return view('sidebar');
    }
    public function TampilanLogin(){
        return view('login');
    }
}
