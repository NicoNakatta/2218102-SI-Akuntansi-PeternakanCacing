<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaksi_pembelian;
use App\Models\Barang;
use App\Models\Karyawan;
use App\Models\Supplier;

class TransaksiPembelianController extends Controller
{

public function pembelian(){
        $pembelian = Transaksi_pembelian::all();
        $barang = Barang::all();
        $karyawan = Karyawan::all();
        $supplier = Supplier::all();
        return view('pembelian.pembelian', ['pembelian'=> $pembelian ,'barang'=> $barang,
        'karyawan'=> $karyawan,'supplier'=> $supplier]);
    }

public function create(request $request){
        // dd($request->all());
	$count = Transaksi_pembelian::count()+1;
             Transaksi_pembelian::create([
            'kode_po' => $count,
            'id_karyawan' => $request->karyawan,
            'kode_barang' => $request->barang,
            'kode_supplier' => $request->supplier,
            'quantity' => $request->quantity,
            'total_harga' => $request->total,
            'tgl_pembelian' => $request->date
        ]);
        return redirect('pembelian');
    }

    public function edit($kode_pembelian){
        $barang = Barang::all();
        $supplier = Supplier::all();
        $karyawan = Karyawan::all();
        $pembelian = Transaksi_pembelian::where('kode_po',$kode_pembelian)->first();
        return view('pembelian.edit_pembelian', compact('pembelian','barang','supplier','karyawan'));
    }

    public function update(request $request, $kode_pembelian){
        $pembelian = Transaksi_pembelian::where('kode_po',$kode_pembelian)->first();
        $pembelian->kode_po = $request->input('kode');
        $pembelian->id_karyawan = $request->input('karyawan');
        $pembelian->kode_barang = $request->input('barang');
        $pembelian->kode_supplier = $request->input('supplier');
        $pembelian->quantity = $request->input('quantity');
        $pembelian->total_harga = $request->input('total');
        $pembelian->tgl_pembelian = $request->input('date');
        $pembelian->save();
        return redirect('pembelian');
    }

    public function delete(request $request, $kode_pembelian){
        $pembelian = Transaksi_pembelian::where('kode_po',$kode_pembelian)->first();
        $pembelian->delete();
        return redirect('pembelian');
    }
}

