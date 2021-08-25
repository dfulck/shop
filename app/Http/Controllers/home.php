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

    public function log()
    {
        return view('client.user.login');
    }

    public function login(request $request)
    {
        $user = User::query()->whereEmail($request->get('email'))->firstOrFail();

        if (!Hash::check($request->get('password'),$user->password)){
           return back()->withErrors(['password'=>'this password in incorect']);
        }

        auth()->login($user);

        return redirect(route('home'));
    }
}
