<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaksi_penjualan;
use App\Models\Barang;
use App\Models\Karyawan;
use App\Models\Customer;
use App\Models\Outlet;

class TransaksiPenjualanController extends Controller
{

public function penjualan(){
        $penjualan = Transaksi_penjualan::all();
        $barang = Barang::all();
        $karyawan = Karyawan::all();
        $customer = customer::all();
        $outlet = Outlet::all();
        return view('penjualan.penjualan', ['penjualan'=> $penjualan ,'barang'=> $barang,
        'karyawan'=> $karyawan,'customer'=> $customer,'outlet'=> $outlet]);
    }

public function create(request $request){
        // dd($request->all());
	$count = Transaksi_penjualan::count()+1;
             Transaksi_penjualan::create([
            'id_transaksi' => $count,
            'id_karyawan' => $request->karyawan,
            'kode_barang' => $request->barang,
            'kode_customer' => $request->customer,
            'kode_outlet' => $request->outlet,
            'quantity' => $request->quantity,
            'total_penjualan' => $request->total,
            'tgl_penjualan' => $request->date
        ]);
        return redirect('penjualan');
    }

    public function edit($kode_penjualan){
        $barang = Barang::all();
        $customer = customer::all();
        $karyawan = Karyawan::all();
        $outlet = Outlet::all();
        $penjualan = Transaksi_penjualan::where('id_transaksi',$kode_penjualan)->first();
        return view('penjualan.edit_penjualan', compact('penjualan','barang','customer','karyawan','outlet'));
    }

    public function update(request $request, $kode_penjualan){
        $penjualan = Transaksi_penjualan::where('id_transaksi',$kode_penjualan)->first();
        $penjualan->id_transaksi = $request->input('kode');
        $penjualan->id_karyawan = $request->input('karyawan');
        $penjualan->kode_barang = $request->input('barang');
        $penjualan->kode_customer = $request->input('customer');
        $penjualan->kode_outlet = $request->input('outlet');
        $penjualan->quantity = $request->input('quantity');
        $penjualan->total_penjualan = $request->input('total');
        $penjualan->tgl_penjualan = $request->input('date');
        $penjualan->save();
        return redirect('penjualan');
    }

    public function delete(request $request, $kode_penjualan){
        $penjualan = Transaksi_penjualan::where('id_transaksi',$kode_penjualan)->first();
        $penjualan->delete();
        return redirect('penjualan');
    }
}

