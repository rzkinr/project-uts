<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function login(Request $request)
    {
        $credential = $request->only("username", "password");
        if(Auth::attempt($credential)){
            return redirect()->route("admin.home");
        } else {
            return redirect()->back();
        }
    }

    // public function logout()
    // {
    //     return view('home');
    // }

}
