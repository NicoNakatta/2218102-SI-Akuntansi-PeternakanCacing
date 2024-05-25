<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Outlet extends Model
{
    use HasFactory;
    protected $table = "outlet";
    protected $fillable = ["kode_outlet","nama_outlet"
    ,"alamat","kota","no_telp","email"];
    public $timestamps = false;
    protected $primaryKey = "kode_outlet";

    public function penjualan(){
        return $this->hasMany(Transaksi_penjualan::class);    
    }
}
