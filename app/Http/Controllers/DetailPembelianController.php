<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaksi_pembelian;
use App\Models\Barang;
use App\Models\Karyawan;
use App\Models\Detail_pembelian;

class DetailPembelianController extends Controller
{
    public function detail_beli(){
        $pembelian = Detail_pembelian::all();
        $po = Transaksi_pembelian::all();
        $barang = Barang::all();
        $karyawan = Karyawan::all();
        return view('detail_beli', ['pembelian'=> $pembelian ,'barang'=> $barang,
        'karyawan'=> $karyawan,'po'=> $po]);
    }

public function create(request $request){
    
        // dd($request->all());
        $po = Transaksi_pembelian::where('kode_po', $request->kode)->first();
        if ($po) {
            $kodePo = $po->kode_po;
            $karyawanId = $po->id_karyawan;
            $barangKode = $po->barang;
    
            $count = Detail_pembelian::count() + 1;
    
            Detail_pembelian::create([
                'kode_detail_beli' => $count,
                'kode_po' => $kodePo,
                'id_karyawan' => $karyawanId,
                'kode_barang' => $barangKode
            ]);
    
            return redirect('detail_beli')->with('success', 'Detail pembelian berhasil dibuat.');
        } else {
            return redirect('detail_beli')->with('error', 'Transaksi pembelian tidak ditemukan.');
        }
}
}