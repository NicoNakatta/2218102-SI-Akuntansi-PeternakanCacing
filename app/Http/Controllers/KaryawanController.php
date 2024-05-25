<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Karyawan;

class KaryawanController extends Controller
{
    
    public function karyawan(){
            $karyawan = Karyawan::all();
            return view('karyawan.karyawan', ['karyawan'=> $karyawan]);
        }
    
    public function create(request $request){
            // dd($request->all());
        $count = Karyawan::count()+1;
            Karyawan::create([
                'id_karyawan' => $count,
                'nama_karyawan' => $request->nama,
                'hak_akses' => $request->hak_akses
            ]);
            return redirect('karyawan');
        }
    
        public function edit($kode_karyawan){
            $karyawan = Karyawan::where('id_karyawan',$kode_karyawan)->first();
            return view('karyawan.edit_karyawan', compact('karyawan'));
        }
    
        public function update(request $request, $kode_karyawan){
            $karyawan = Karyawan::where('id_karyawan',$kode_karyawan)->first();
            $karyawan->id_karyawan = $request->input('kode');
            $karyawan->nama_karyawan = $request->input('nama');
            $karyawan->hak_akses = $request->input('hak_akses');
            $karyawan->save();
            return redirect('karyawan');
        }
    
        public function delete(request $request, $kode_karyawan){
            $karyawan = Karyawan::where('id_karyawan',$kode_karyawan)->first();
            $karyawan->delete();
            return redirect('karyawan');
        }
}
