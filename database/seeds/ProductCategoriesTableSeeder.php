<?php

use App\Models\Product\ProductCategories;
use Illuminate\Database\Seeder;

class ProductCategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            [
                'name' => 'TOP 1 category',
            ],
            [
                'name' => 'TOP 2 category',
            ],
        ];

        foreach($categories as $c){
            ProductCategories::create($c);
        }
    }
}
