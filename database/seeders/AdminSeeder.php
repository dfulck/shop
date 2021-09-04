<?php

namespace Database\Seeders;

use App\Models\permission;
use App\Models\role;
use App\Models\User;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_id=role::query()->create([
            'title'=>'Admin'
        ]);
        $role_id->permissions()->attach(permission::all());

        User::query()->create([
            'role_id'=>$role_id->id,
            'name'=>'Erfan',
            'email'=>'cloberfan@gmail.com',
            'password'=>bcrypt(126875)
        ]);
        role::query()->create([
            'title'=>'guest'
        ]);
    }
}
