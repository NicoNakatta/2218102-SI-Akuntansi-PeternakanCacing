<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $table = "customer";
    protected $fillable = ["kode_customer","nama_customer"
    ,"alamat","kota","no_telp","email","contact_person"];
    public $timestamps = false;
    protected $primaryKey = "kode_customer";
    
    public function penjualan(){
        return $this->hasMany(Transaksi_penjualan::class);    
    }
}
