<?php

namespace Database\Seeders;

use App\Models\category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        category::query()->create([
            'title'=>'دسته بندی اصلی',
            'category_id'=>null,
        ]);
    }
}
