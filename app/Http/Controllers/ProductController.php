<?php

namespace App\Http\Controllers;

use App\Models\brand;
use App\Models\category;
use App\Models\product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Admin.product.index',[
            'products'=>product::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.product.create',[
            'categories'=>category::query()->where('category_id',1)->get(),
            'brands'=>brand::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        product::query()->create([
            'name'=>$request->get('name'),
            'slug'=>$request->get('slug'),
            'description'=>$request->get('description'),
            'cost'=>$request->get('cost'),
            'image'=>$request->file('image')->storeAs('public/product',$request->file('image')->getClientOriginalName()),
            'category_id'=>$request->get('category_id'),
            'brand_id'=>$request->get('brand_id'),
        ]);
        return redirect(route('products.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(product $product)
    {
        return view('client.product.show',[
            'product'=>$product
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(product $product)
    {
        return view('Admin.product.edit',[
            'product'=>$product,
            'categories'=>category::query()->where('category_id',1)->get(),
            'brands'=>brand::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, product $product)
    {
        $image=$product->image;
        if ($request->hasFile('image')){
            $image=$request->file('image')->storeAs('public/product',$request->file('image')->getClientOriginalName());
        }

        $product->update([
            'name'=>$request->get('name',$product->name),
            'slug'=>$request->get('slug',$product->slug),
            'description'=>$request->get('description',$product->description),
            'cost'=>$request->get('cost',$product->cost),
            'image'=>$image,
            'category_id'=>$request->get('category_id',$product->category_id),
            'brand_id'=>$request->get('brand_id',$product->brand_id),
        ]);
        return redirect(route('products.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(product $product)
    {
        $product->delete();
        return redirect(route('products.index'));
    }
}
