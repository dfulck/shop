<?php

namespace Database\Seeders;

use App\Models\permission;
use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        permission::query()->insert([
            //category

            ['title'=>'read_category'],
            ['title'=>'create_category'],
            ['title'=>'edit_category'],
            ['title'=>'delete_category'],

            //brands
            ['title'=>'read_brand'],
            ['title'=>'create_brand'],
            ['title'=>'edit_brand'],
            ['title'=>'delete_brand'],

            //product
            ['title'=>'read_product'],
            ['title'=>'create_product'],
            ['title'=>'edit_product'],
            ['title'=>'delete_product'],

            //discount
            ['title'=>'read_discount'],
            ['title'=>'create_discount'],
            ['title'=>'edit_discount'],
            ['title'=>'delete_discount'],

            //user
            ['title'=>'read_user'],
            ['title'=>'create_user'],
            ['title'=>'edit_user'],
            ['title'=>'delete_user'],

        ]);
    }
}
