<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class product extends Model
{
    protected $table = "product";
    protected $fillable = [
        "merk_sepatu", "jenis_sepatu", "no_sepatu", "foto_sepatu", "stok_sepatu", "status", "harga_sepatu"
    ];
    use SoftDeletes;
}
