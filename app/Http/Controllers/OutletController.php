<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Outlet;

class OutletController extends Controller
{
    public function outlet(){
        $outlet = Outlet::all();
        return view('outlet.outlet', ['outlet'=> $outlet]);
    }

public function create(request $request){
        // dd($request->all());
	    $count = Outlet::count()+1;
        Outlet::create([
            'kode_outlet' => $count,
            'nama_outlet' => $request->nama,
            'alamat' => $request->alamat,
            'kota' => $request->kota,
            'no_telp' => $request->no_telp,
            'email' => $request->email
        ]);
        return redirect('outlet');
    }

    public function edit($kode_outlet){
        $outlet = Outlet::where('kode_outlet',$kode_outlet)->first();
        return view('outlet.edit_outlet', compact('outlet'));
    }

    public function update(request $request, $kode_outlet){
        $outlet = Outlet::where('kode_outlet',$kode_outlet)->first();
        $outlet->kode_outlet = $request->input('kode');
        $outlet->nama_outlet = $request->input('nama');
        $outlet->alamat = $request->input('alamat');
        $outlet->kota = $request->input('kota');
        $outlet->no_telp = $request->input('no_telp');
        $outlet->email = $request->input('email');
        $outlet->save();
        return redirect('outlet');
    }

    public function delete(request $request, $kode_outlet){
        $outlet = Outlet::where('kode_outlet',$kode_outlet)->first();
        $outlet->delete();
        return redirect('outlet');
    }
}
