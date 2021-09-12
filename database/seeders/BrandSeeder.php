<?php

namespace Database\Seeders;

use App\Models\brand;
use Illuminate\Database\Seeder;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        brand::factory()->times(10)->create();
    }
}
