<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;
    protected $table = "barang";
    protected $fillable = ["kode_barang","nm_barang",
                            "kode_satuan", "harga"];
    public $timestamps = false;
    protected $primaryKey = "kode_barang";

    public function satuan(){
        return $this->belongsTo(Satuan::class,'kode_satuan');
    }
    public function pembelian(){
        return $this->hasMany(Transaksi_pembelian::class);    
    }
    public function penjualan(){
        return $this->hasMany(Transaksi_penjualan::class);    
    }
    public function detail(){
        return $this->hasMany(Detail_penjualan::class);    
    }

}
