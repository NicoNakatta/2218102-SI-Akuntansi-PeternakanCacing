<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Satuan;

class SatuanController extends Controller
{
    public function satuan(){
        $satuan = Satuan::all();
        return view('satuan.satuan', ['satuan'=> $satuan]);
    }

    public function create(request $request){
        // dd($request->all());
        Satuan::create([
            'kode_satuan' => $request->kode,
            'nama_satuan' => $request->nama
        ]);
        return redirect('satuan');
    }

    public function edit($kode_satuan){
        $satuan = Satuan::where('kode_satuan',$kode_satuan)->first();
        return view('satuan.edit_satuan', compact('satuan'));
    }

    public function update(request $request, $kode_satuan){
        $satuan = Satuan::where('kode_satuan',$kode_satuan)->first();
        $satuan->kode_satuan = $request->input('kode');
        $satuan->nama_satuan = $request->input('nama');
        $satuan->save();
        return redirect('satuan');
    }

    public function delete(request $request, $kode_satuan){
        $satuan = Satuan::where('kode_satuan',$kode_satuan)->first();
        $satuan->delete();
        return redirect('satuan');
    }
}
