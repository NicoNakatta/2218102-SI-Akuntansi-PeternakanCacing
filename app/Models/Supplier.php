<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    use HasFactory;
    protected $table = "supplier";
    protected $fillable = ["kode_supplier","nama_supplier"
    ,"alamat","kota","no_telp","email","contact_person"];
    public $timestamps = false;
    protected $primaryKey = "kode_supplier";

    public function pembelian(){
        return $this->hasMany(Transaksi_pembelian::class);    
    }
}
