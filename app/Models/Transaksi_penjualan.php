<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi_penjualan extends Model
{
    use HasFactory;
    protected $table = "transaksi_penjualan";
    protected $fillable = ["id_transaksi","kode_outlet","kode_barang"
    ,"kode_customer","id_karyawan","quantity","total_penjualan","tgl_penjualan"];
    public $timestamps = false;
    protected $primaryKey = "id_transaksi";

    public function barang(){
        return $this->belongsTo(Barang::class,'kode_barang');
    }
    public function karyawan(){
        return $this->belongsTo(Karyawan::class,'id_karyawan');
    }
    public function customer(){
        return $this->belongsTo(Customer::class,'kode_customer');
    }
    public function outlet(){
        return $this->belongsTo(Outlet::class,'kode_outlet');
    }
}
