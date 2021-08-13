<?php

namespace App\Http\Controllers;

use App\Models\brand;
use App\Models\category;
use Illuminate\Http\Request;

class home extends Controller
{
    public function home()
    {
        return view('client.home',[
            'categories'=>category::query()->where('category_id',1)->get(),
            'brands'=>brand::all(),
        ]);
    }
}
