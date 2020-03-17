<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\product;

class ProductController extends Controller
{

    public function home()
    {
        return view('backend.index');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products= product::all();
        return view("backend.product.index", compact("products"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("backend.product.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $filepath = $request->file("foto_sepatu")->store("public");
        //return $filepath;

        product::create([
            'merk_sepatu' => $request->merk_sepatu,
            'jenis_sepatu' =>$request->jenis_sepatu,
            'no_sepatu' => $request->no_sepatu,
            'foto_sepatu' => $filepath,
            'stok_sepatu' => $request->stok_sepatu,
            'harga_sepatu' => $request->harga_sepatu,
            'status' => $request->status,
            'status' => $request->harga_sepatu,
        ]);

        return redirect()->route('products.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = product::find($id);
        return view("backend.product.show", compact("data"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = product::find($id);
        return view("backend.product.edit", compact("data"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        product::where("id", $id)->update($request->except("_token"));
        return redirect()->route('products.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        product::where("id", $id)->delete();
        return redirect()->route('products.index');
    }
}
