<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detail_pembelian extends Model
{
    use HasFactory;
    protected $table = "detail_transaksi_pembelian";
    protected $fillable = ["kode_detail_beli","kode_po",
    "id_karyawan","kode_barang"];
    public $timestamps = false;
    protected $primaryKey = "kode_po";

    public function barang(){
        return $this->belongsTo(Barang::class,'kode_barang');
    }
    public function karyawan(){
        return $this->belongsTo(Karyawan::class,'id_karyawan');
    }
    public function po(){
        return $this->belongsTo(Transaksi_pembelian::class,'kode_po');
    }
}
