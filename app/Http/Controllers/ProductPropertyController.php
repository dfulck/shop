<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;

class ProductPropertyController extends Controller
{
    public function create(product $product)
    {
        return view('Admin.product.properties.create',[
            'product'=>$product
        ]);
    }

    public function store(Request $request,product $product)
    {
        $product->properties()->sync($request->get('properties'));

        return back();
    }
}
