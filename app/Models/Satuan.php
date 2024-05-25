<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Satuan extends Model
{
    use HasFactory;

    protected $table = "satuan";
    protected $fillable = ["kode_satuan","nama_satuan"];
    public $timestamps = false;
    protected $primaryKey = "kode_satuan";

    public function barang(){
        return $this->hasOne(Barang::class);    
    }
}
