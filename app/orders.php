<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class orders extends Model
{
    protected $table = "orders";
    protected $fillable = [
        "kode_order", "customer", "product", "jumlah_order", "jumlah_bayar", "status_bayar"
    ];
    use SoftDeletes;
}
