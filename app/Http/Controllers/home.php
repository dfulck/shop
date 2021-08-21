<?php

namespace App\Http\Controllers;

use App\Models\brand;
use App\Models\category;
use Illuminate\Http\Request;

class home extends Controller
{
    public function home()
    {
        return view('client.home');
    }

    public function panel()
    {
        return view('Admin.panel',[
            'user'=>auth()->user()
        ]);
    }
}
