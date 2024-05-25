<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Supplier;

class SupplierController extends Controller
{
    public function supplier(){
        $supplier = Supplier::all();
        return view('supplier.supplier', ['supplier'=> $supplier]);
    }

public function create(request $request){
        // dd($request->all());
	    $count = Supplier::count()+1;
        Supplier::create([
            'kode_supplier' => $count,
            'nama_supplier' => $request->nama,
            'alamat' => $request->alamat,
            'kota' => $request->kota,
            'no_telp' => $request->no_telp,
            'email' => $request->email,
            'contact_person' => $request->contact_person
        ]);
        return redirect('supplier');
    }

    public function edit($kode_supplier){
        $supplier = Supplier::where('kode_supplier',$kode_supplier)->first();
        return view('supplier.edit_supplier', compact('supplier'));
    }

    public function update(request $request, $kode_supplier){
        $supplier = Supplier::where('kode_supplier',$kode_supplier)->first();
        $supplier->kode_supplier = $request->input('kode');
        $supplier->nama_supplier = $request->input('nama');
        $supplier->alamat = $request->input('alamat');
        $supplier->kota = $request->input('kota');
        $supplier->no_telp = $request->input('no_telp');
        $supplier->email = $request->input('email');
        $supplier->contact_person = $request->input('contact_person');
        $supplier->save();
        return redirect('supplier');
    }

    public function delete(request $request, $kode_supplier){
        $supplier = Supplier::where('kode_supplier',$kode_supplier)->first();
        $supplier->delete();
        return redirect('supplier');
    }
}
