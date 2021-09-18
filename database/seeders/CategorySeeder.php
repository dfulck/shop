<?php

namespace Database\Seeders;

use App\Models\category;
use Database\Factories\CategoryFactory;
use Illuminate\Database\Eloquent\Factories\Sequence;
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
       $category= category::query()->create([
            'title'=>'دسته بندی اصلی',
            'category_id'=>null,
        ]);

//       category::factory()->times(10)->create();
    }
}
