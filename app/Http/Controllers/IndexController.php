<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\customer;
use App\product;
use App\orders;

class IndexController extends Controller
{
    public function home()
    {
        $customer = customer::sum('id');
        return view('backend.index', compact('customer'));
    }

    public function cust()
    {
        $customer = customer::sum('id');
        
    }
}
