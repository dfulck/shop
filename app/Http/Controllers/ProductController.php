<?php

namespace App\Http\Controllers;

use App\Models\answer;
use App\Models\brand;
use App\Models\category;
use App\Models\product;
use App\Models\question;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * @param product $product
     */
    public function details(product $product)
    {

        return view('Admin.product.details.show',[
            'product'=>$product
        ]);
    }


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
        $product=product::query()->create([
            'name'=>$request->get('name'),
            'slug'=>$request->get('slug'),
            'description'=>$request->get('description'),
            'cost'=>$request->get('cost'),
            'category_id'=>$request->get('category_id'),
            'image'=>$request->file('image')->storeAs('public/product',$request->file('image')->getClientOriginalName()),
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
            'product'=>$product,
            'questions'=>question::orderby('id','DESC')->take('2')->get()
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
            'category_id'=>$request->get('category_id'),
            'image'=>$image,
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
        Storage::delete($product->image);
   $product->properties()->detach();
   $product->questions()->detach();
   $product->users()->detach();
        $product->delete();
        return redirect(route('products.index'));
    }
}
