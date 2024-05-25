<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BukuBesarController extends Controller
{
    public function buku_besar(){
        return view('buku_besar');
    }
}
