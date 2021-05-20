<?php

namespace Database\Seeders;

use App\Models\SubCategory;
use App\Models\Category;
use Illuminate\Database\Seeder;

class SubCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $randomCategory = Category::count() * 2;
        SubCategory::factory()->count($randomCategory)->create();
    }
}
