<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengeluaran extends Model
{
    use HasFactory;
    protected $table = "pengeluaran";
    protected $fillable = ["kode_pengeluaran","biaya_listrik"
    ,"biaya_air","biaya_sewa_tanah"];
    public $timestamps = false;
    protected $primaryKey = "kode_pengeluaran";
}
