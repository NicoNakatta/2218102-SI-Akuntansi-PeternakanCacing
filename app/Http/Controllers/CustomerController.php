<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{

public function customer(){
        $customer = Customer::all();
        return view('customer.customer', ['customer'=> $customer]);
    }

public function create(request $request){
        // dd($request->all());
	    $count = customer::count()+1;
        Customer::create([
            'kode_customer' => $count,
            'nama_customer' => $request->nama,
            'alamat' => $request->alamat,
            'kota' => $request->kota,
            'no_telp' => $request->no_telp,
            'email' => $request->email,
            'contact_person' => $request->contact_person
        ]);
        return redirect('customer');
    }

    public function edit($kode_customer){
        $customer = Customer::where('kode_customer',$kode_customer)->first();
        return view('customer.edit_customer', compact('customer'));
    }

    public function update(request $request, $kode_customer){
        $customer = Customer::where('kode_customer',$kode_customer)->first();
        $customer->kode_customer = $request->input('kode');
        $customer->nama_customer = $request->input('nama');
        $customer->alamat = $request->input('alamat');
        $customer->kota = $request->input('kota');
        $customer->no_telp = $request->input('no_telp');
        $customer->email = $request->input('email');
        $customer->contact_person = $request->input('contact_person');
        $customer->save();
        return redirect('customer');
    }

    public function delete(request $request, $kode_customer){
        $customer = Customer::where('kode_customer',$kode_customer)->first();
        $customer->delete();
        return redirect('customer');
    }
}
