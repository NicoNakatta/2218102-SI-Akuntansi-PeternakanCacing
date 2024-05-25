<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Biaya;

class BiayaController extends Controller
{
    public function biaya(){
        $biaya = Biaya::all();
        return view('biaya.biaya', ['biaya'=> $biaya]);
    }

public function create(request $request){
        // dd($request->all());
        $count = Biaya::count()+1;
        Biaya::create([
            'kode_biaya' => $count,
            'total_gaji_pegawai' => $request->gaji,
            'harga_bibit' => $request->bibit,
            'harga_obat' => $request->obat,
            'harga_tanah' => $request->tanah,
            'harga_pakan' => $request->pakan
        ]);
        return redirect('biaya');
    }

    public function edit($kode_biaya){
        $biaya = Biaya::where('kode_biaya',$kode_biaya)->first();
        return view('biaya.edit_biaya', compact('biaya'));
    }

    public function update(request $request, $kode_biaya){
        $biaya = Biaya::where('kode_biaya',$kode_biaya)->first();
        $biaya->kode_biaya = $request->input('kode');
        $biaya->total_gaji_pegawai = $request->input('gaji');
        $biaya->harga_bibit = $request->input('bibit');
        $biaya->harga_obat = $request->input('obat');
        $biaya->harga_tanah = $request->input('tanah');
        $biaya->harga_pakan = $request->input('pakan');
        $biaya->save();
        return redirect('biaya');
    }

    public function delete(request $request, $kode_biaya){
        $biaya = Biaya::where('kode_biaya',$kode_biaya)->first();
        $biaya->delete();
        return redirect('biaya');
    }
}
