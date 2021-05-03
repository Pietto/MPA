<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductCategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product_category')->insert([
            [
                'product_ID' => 1,
                'category_ID' => 4
            ],[
                'product_ID' => 1,
                'category_ID' => 6
            ],[
                'product_ID' => 1,
                'category_ID' => 7
            ],[
                'product_ID' => 2,
                'category_ID' => 4
            ],[
                'product_ID' => 2,
                'category_ID' => 6
            ],[
                'product_ID' => 2,
                'category_ID' => 8
            ],[
                'product_ID' => 3,
                'category_ID' => 1
            ],[
                'product_ID' => 3,
                'category_ID' => 3
            ],[
                'product_ID' => 3,
                'category_ID' => 13
            ],[
                'product_ID' => 4,
                'category_ID' => 4
            ],[
                'product_ID' => 4,
                'category_ID' => 6
            ],[
                'product_ID' => 4,
                'category_ID' => 7
            ],[
                'product_ID' => 5,
                'category_ID' => 1
            ],[
                'product_ID' => 5,
                'category_ID' => 2
            ],[
                'product_ID' => 5,
                'category_ID' => 9
            ],[
                'product_ID' => 6,
                'category_ID' => 1
            ],[
                'product_ID' => 6,
                'category_ID' => 3
            ],[
                'product_ID' => 6,
                'category_ID' => 8
            ],[
                'product_ID' => 7,
                'category_ID' => 4
            ],[
                'product_ID' => 7,
                'category_ID' => 6
            ],[
                'product_ID' => 7,
                'category_ID' => 7
            ],[
                'product_ID' => 7,
                'category_ID' => 9
            ],[
                'product_ID' => 8,
                'category_ID' => 4
            ],[
                'product_ID' => 8,
                'category_ID' => 6
            ],[
                'product_ID' => 8,
                'category_ID' => 7
            ],[
                'product_ID' => 9,
                'category_ID' => 4
            ],[
                'product_ID' => 9,
                'category_ID' => 6
            ],[
                'product_ID' => 9,
                'category_ID' => 7
            ],[
                'product_ID' => 10,
                'category_ID' => 4
            ],[
                'product_ID' => 10,
                'category_ID' => 6
            ],[
                'product_ID' => 10,
                'category_ID' => 7
            ],[
                'product_ID' => 10,
                'category_ID' => 11
            ],[
                'product_ID' => 11,
                'category_ID' => 5
            ],[
                'product_ID' => 11,
                'category_ID' => 6
            ],[
                'product_ID' => 11,
                'category_ID' => 7
            ],[
                'product_ID' => 11,
                'category_ID' => 9
            ],[
                'product_ID' => 12,
                'category_ID' => 9
            ],[
                'product_ID' => 12,
                'category_ID' => 10
            ],[
                'product_ID' => 13,
                'category_ID' => 9
            ],[
                'product_ID' => 13,
                'category_ID' => 10
            ],[
                'product_ID' => 14,
                'category_ID' => 4
            ],[
                'product_ID' => 14,
                'category_ID' => 6
            ],[
                'product_ID' => 14,
                'category_ID' => 7
            ],[
                'product_ID' => 14,
                'category_ID' => 8
            ],[
                'product_ID' => 14,
                'category_ID' => 11
            ],[
                'product_ID' => 15,
                'category_ID' => 4
            ],[
                'product_ID' => 15,
                'category_ID' => 6
            ],[
                'product_ID' => 15,
                'category_ID' => 7
            ],[
                'product_ID' => 15,
                'category_ID' => 8
            ],[
                'product_ID' => 15,
                'category_ID' => 11
            ],[
                'product_ID' => 15,
                'category_ID' => 9
            ],[
                'product_ID' => 16,
                'category_ID' => 1
            ],[
                'product_ID' => 16,
                'category_ID' => 3
            ],[
                'product_ID' => 16,
                'category_ID' => 11
            ],[
                'product_ID' => 17,
                'category_ID' => 4
            ],[
                'product_ID' => 17,
                'category_ID' => 6
            ],[
                'product_ID' => 17,
                'category_ID' => 8
            ],[
                'product_ID' => 18,
                'category_ID' => 1
            ],[
                'product_ID' => 18,
                'category_ID' => 3
            ],[
                'product_ID' => 18,
                'category_ID' => 9
            ],[
                'product_ID' => 19,
                'category_ID' => 5
            ],[
                'product_ID' => 19,
                'category_ID' => 6
            ],[
                'product_ID' => 19,
                'category_ID' => 7
            ],[
                'product_ID' => 19,
                'category_ID' => 11
            ],[
                'product_ID' => 20,
                'category_ID' => 9
            ],[
                'product_ID' => 20,
                'category_ID' => 10
            ]
        ]);
    }
}