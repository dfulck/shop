<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;

class RateController extends Controller
{
    public function store(Request $request,product $product)
    {
        if (!$product->users()->exists()){
            auth()->user()->products()->attach($product,['value'=>$request->get('like')]);
        }
        return redirect()->back();
    }
}
