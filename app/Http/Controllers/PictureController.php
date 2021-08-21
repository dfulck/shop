<?php

namespace App\Http\Controllers;

use App\Http\Requests\PictureRequest;
use App\Models\picture;
use App\Models\product;
use Illuminate\Http\Request;

class PictureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(product $product)
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(product $product)
    {
        return view('Admin.product.picture.create', [
            'pictures'=>picture::all(),
            'product'=>$product
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(product $product,PictureRequest $request)
    {

        $product->addpicture($request);

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\picture  $picture
     * @return \Illuminate\Http\Response
     */
    public function show(product $product,picture $picture)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\picture  $picture
     * @return \Illuminate\Http\Response
     */
    public function edit(product $product,picture $picture)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\picture  $picture
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,product $product, picture $picture)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\picture  $picture
     * @return \Illuminate\Http\Response
     */
    public function destroy(product $product,picture $picture)
    {
        $product->deletePicture($picture);




        return redirect()->back();
    }
}
