<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Biaya extends Model
{
    use HasFactory;
    protected $table = "biaya";
    protected $fillable = ["kode_biaya","total_gaji_pegawai"
    ,"harga_bibit","harga_obat","harga_tanah","harga_pakan"];
    public $timestamps = false;
    protected $primaryKey = "kode_biaya";
}
