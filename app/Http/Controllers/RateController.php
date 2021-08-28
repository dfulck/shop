<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;

class RateController extends Controller
{
    public function store(Request $request,product $product)
    {

        auth()->user()->products()->attach($product,['value'=>$request->get('like')]);

        return back();
    }
}
