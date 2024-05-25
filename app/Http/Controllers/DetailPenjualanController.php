<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DetailPenjualanController extends Controller
{
    public function detail_jual(){
        return view('detail_jual');
    }
}
