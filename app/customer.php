<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class customer extends Model
{
    protected $table = "customer";
    protected $fillable = [
        "first_name", "last_name", "profil", "address", "email", "username", "password"
    ];

    use SoftDeletes;

}
