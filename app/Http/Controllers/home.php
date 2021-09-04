<?php

namespace App\Http\Controllers;

use App\Models\brand;
use App\Models\category;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

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
