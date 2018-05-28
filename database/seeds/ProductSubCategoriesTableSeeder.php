<?php

use App\Models\Product\ProductSubCategories;
use Illuminate\Database\Seeder;

class ProductSubCategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $subCategories = [
            [
                'name' => 'First SubCat',
            ],
            [
                'name' => 'Second SubCat',
            ],
        ];

        foreach($subCategories as $c){
            ProductSubCategories::create($c);
        }
    }
}
