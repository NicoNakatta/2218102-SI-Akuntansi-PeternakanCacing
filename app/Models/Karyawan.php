<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
    use HasFactory;
    protected $table = "karyawan";
    protected $fillable = ["id_karyawan","nama_karyawan","hak_akses"];
    public $timestamps = false;
    protected $primaryKey = "id_karyawan";

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
