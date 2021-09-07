<?php

namespace App\Http\Controllers;

use App\Models\Like;
use App\Models\product;
use Illuminate\Http\Request;

class LikeController extends Controller
{

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(product $product)
    {
//        session()->flash('success','successfully Liked');
        auth()->user()->LikeProduct($product);
        return response(['msg' => 'liked'], 200);
    }

    public function delete(product $product)
    {
        auth()->user()->disLikeProduct($product);
        response(['msg' => 'disLiked'], 200);
        return redirect()->back();

    }

    public function index()
    {
        return view('client.Like.index',[
            'products'=>auth()->user()->likes
        ]);
    }


}
