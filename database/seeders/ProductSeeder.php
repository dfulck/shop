<?php

namespace Database\Seeders;

use App\Models\category;
use App\Models\product;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        product::factory()->times(20)->create();
    }
}
