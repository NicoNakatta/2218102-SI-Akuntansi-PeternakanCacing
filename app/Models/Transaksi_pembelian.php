<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi_pembelian extends Model
{
    use HasFactory;
    protected $table = "transaksi_pembelian";
    protected $fillable = ["kode_po","id_karyawan","kode_barang"
    ,"kode_supplier","quantity","total_harga","tgl_pembelian"];
    public $timestamps = false;
    protected $primaryKey = "kode_po";

    public function barang(){
        return $this->belongsTo(Barang::class,'kode_barang');
    }
    public function karyawan(){
        return $this->belongsTo(Karyawan::class,'id_karyawan');
    }
    public function supplier(){
        return $this->belongsTo(Supplier::class,'kode_supplier');
    }
    public function detail(){
        return $this->hasMany(Detail_penjualan::class);    
    }
}
