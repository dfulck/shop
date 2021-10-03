<?php

namespace App\Http\Controllers;

use App\Models\brand;
use App\Models\category;
use App\Models\permission;
use App\Models\product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class home extends Controller
{
    public function index(category $category)
    {
        return $category;
    }

    public function home()
    {
        return view('client.home');
    }

    public function panel()
    {
        return view('Admin.Panel', [
            'user' => auth()->user()
        ]);
    }

    public function search(Request $request)
    {
        $search=null;
        $title = $request->get('title');
        if ($request->get('model') == 'category') {
            $search= category::query()->where('title', 'like', '%' . $title . '%')->get();
        }elseif ($request->get('model') == 'permission'){
            $search= permission::query()->where('title', 'like', '%' . $title . '%')->get();
        }else{
            $search=product::query()->where('name', 'like', '%' . $title . '%')->get();
        }


        return view('client.home',[
            'SearchTitle'=>$search
        ]);

    }


}
