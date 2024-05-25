<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengeluaran;

class PengeluaranController extends Controller
{


public function pengeluaran(){
        $pengeluaran = Pengeluaran::all();
        return view('pengeluaran.pengeluaran', ['pengeluaran'=> $pengeluaran]);
    }

public function create(request $request){
        // dd($request->all());
	$count = Pengeluaran::count()+1;
    Pengeluaran::create([
            'kode_pengeluaran' => $count,
            'biaya_listrik' => $request->listrik,
            'biaya_air' => $request->air,
            'biaya_sewa_tanah' => $request->tanah
        ]);
        return redirect('pengeluaran');
    }

    public function edit($kode_pengeluaran){
        $pengeluaran = Pengeluaran::where('kode_pengeluaran',$kode_pengeluaran)->first();
        return view('pengeluaran.edit_pengeluaran', compact('pengeluaran'));
    }

    public function update(request $request, $kode_pengeluaran){
        $pengeluaran = Pengeluaran::where('kode_pengeluaran',$kode_pengeluaran)->first();
        $pengeluaran->kode_pengeluaran = $request->input('kode');
        $pengeluaran->biaya_listrik = $request->input('listrik');
        $pengeluaran->biaya_air = $request->input('air');
        $pengeluaran->biaya_sewa_tanah = $request->input('tanah');
        $pengeluaran->save();
        return redirect('pengeluaran');
    }

    public function delete(request $request, $kode_pengeluaran){
        $pengeluaran = Pengeluaran::where('kode_pengeluaran',$kode_pengeluaran)->first();
        $pengeluaran->delete();
        return redirect('pengeluaran');
    }
}
