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
            //Admin
            ['title'=>'Admin'],
            //category

            ['title'=>'index_category'],
            ['title'=>'create_category'],
            ['title'=>'edit_category'],
            ['title'=>'destroy_category'],

            //brands
            ['title'=>'index_brand'],
            ['title'=>'create_brand'],
            ['title'=>'edit_brand'],
            ['title'=>'destroy_brand'],

            //product
            ['title'=>'index_product'],
            ['title'=>'create_product'],
            ['title'=>'edit_product'],
            ['title'=>'destroy_product'],

            //discount
            ['title'=>'index_discount'],
            ['title'=>'create_discount'],
            ['title'=>'edit_discount'],
            ['title'=>'destroy_discount'],

            //user
            ['title'=>'index_user'],
            ['title'=>'create_user'],
            ['title'=>'edit_user'],
            ['title'=>'destroy_user'],


            //property
            ['title'=>'index_property'],
            ['title'=>'create_property'],
            ['title'=>'edit_property'],
            ['title'=>'destroy_property'],

            //propertyGroup
            ['title'=>'index_propertyGroup'],
            ['title'=>'create_propertyGroup'],
            ['title'=>'edit_propertyGroup'],
            ['title'=>'destroy_propertyGroup'],
            //Role
            ['title'=>'index_role'],
            ['title'=>'create_role'],
            ['title'=>'edit_role'],
            ['title'=>'destroy_role'],

        ]);
    }
}
