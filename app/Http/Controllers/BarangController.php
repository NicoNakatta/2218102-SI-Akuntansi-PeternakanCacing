<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;
use App\Models\Satuan;
use App\Models\Transaksi_pembelian;
use Barryvdh\DomPDF\Facade\Pdf;

class BarangController extends Controller
{
    public function barang(){
        $satuan = Satuan::all();
        $barang = Barang::all();
        return view('barang.barang', ['barang'=> $barang, 'satuan'=>$satuan]);
    }

    public function create(request $request){
        // dd($request->all());
        Barang::create([
            'kode_barang' => $request->kode,
            'nm_barang' => $request->nama,
            'kode_satuan' => $request->satuan,
            'harga' => $request->harga
        ]);
        return redirect('barang');
    }

    public function edit($kode_barang){
        $satuan = Satuan::all();
        $barang = Barang::with('satuan')->where('kode_barang',$kode_barang)->first();
        return view('barang.edit_barang', compact('barang', 'satuan'));
    }

    public function update(request $request, $kode_barang){
        $barang = Barang::where('kode_barang',$kode_barang)->first();
        $barang->kode_barang = $request->input('kode');
        $barang->nm_barang = $request->input('nama');
        $barang->kode_satuan = $request->input('satuan');
        $barang->harga = $request->input('harga');
        $barang->save();
        return redirect('barang');
    }

    public function delete(request $request, $kode_barang){
        $barang = Barang::where('kode_barang',$kode_barang)->first();
        $barang->delete();
        return redirect('barang');
    }

    public function cetak(){
        $satuan = Satuan::all();
        $barang = Barang::all();
        $pdf = Pdf::loadView('barang.barangReport', compact('barang','satuan'));
        return $pdf->download('Report barang.pdf');
    }
}
