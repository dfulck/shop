<?php

namespace App\Http\Controllers;

use App\Mail\otpMail;
use App\Models\role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class userController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Admin.user.index',[
            'user'=>auth()->user()
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

        $otp = random_int(11111, 99999);

        $userexsits=User::query()->whereEmail($request->get('email'))->firstOrFail();

        if ($userexsits->exists()){
            $user = $userexsits;
            $user->update([
                'password'=>bcrypt($otp)
            ]);
        }else{
            $user = User::query()->create([
                'email' => $request->get('email'),
                'password' => bcrypt($otp) ,
                'role_id' => role::FindByTitle('guest')->id,
            ]);
        }

        Mail::to($user->email)->send(new otpMail($otp));

        return redirect(route('users.show',$user));
    }


    public function verify(Request $request,User $user)
    {
        if (!Hash::check($request->get('code'),$user->password)){
            return back()->withErrors(['code'=>'این کد صجیج نمی باشد ']);
        }

        auth()->login($user);

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
        return view('client.user.verify',[
            'users'=>$user
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
        return view('Admin.user.edit',[
            'user'=>$user
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
            'name'=>$request->get('name'),
            'email'=>$request->get('email'),
            'password'=>bcrypt($request->get('password')),
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

        return redirect(route('home'));
    }
}
