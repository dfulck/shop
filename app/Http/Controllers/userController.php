<?php

namespace App\Http\Controllers;

use App\Mail\otpMail;
use App\Models\role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use mysql_xdevapi\Session;

class userController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Admin.user.index', [
            'user' => auth()->user()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('client.user.register');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $this->validate($request, [
            'email' => ['required', 'email']
        ]);

        $user = User::RegisterUser($request);

        session()->flash('info','Verfry Code Send Your Email');

        return redirect(route('users.show', $user));
    }


    public function verify(Request $request, User $user)
    {
        $users = $request->session()->get('user');
        $usesrs_check = User::where('id',$users['id'])->first();
        if (!Hash::check($request->get('code'), $user->password)) {
            return back()->withErrors(['code' => 'این کد صجیج نمی باشد ']);
        }

        auth()->login($user);
        session()->flash('success','Login Successfully');
        return redirect(route('home'));
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\User $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return view('client.user.verify', [
            'users' => $user
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\User $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('Admin.user.edit', [
            'user' => $user
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\User $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $user->update([
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'password' => bcrypt($request->get('password')),
        ]);
        return redirect(route('Admins.panel'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\User $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        dd('erfan');
    }

    public function logout()
    {
        auth()->logout();
        session()->flash('error','Sign Out Successfully');

        return redirect(route('home'));
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
        session()->flash('success','Login Successfully');
        return redirect(route('home'));
    }
}
