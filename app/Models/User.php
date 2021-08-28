<?php

namespace App\Models;

use App\Mail\otpMail;
use http\Env\Request;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Mail;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public static function RegisterUser($request)
    {
        $user = null;


        $otp = random_int(11111, 99999);

        $userexsits = User::query()->where('email', $request->get('email'));

        if ($userexsits->exists()) {
            $user = $userexsits->first();
            $user->update([
                'password' => bcrypt($otp)
            ]);
        } else {
            $user = User::query()->create([
                'email' => $request->get('email'),
                'password' => bcrypt($otp),
                'role_id' => role::FindByTitle('guest')->id,
            ]);
        }
//send email
        Mail::to($user->email)->send(new otpMail($otp));

        return $user;
    }

    public function role()
    {
        return $this->belongsTo(role::class);
    }

    public function products()
    {
        return $this->belongsToMany(product::class)
            ->withPivot('value')
            ->withTimestamps();
    }


}
