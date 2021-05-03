<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bundles')->insert([
        [
            'name' => 'Name 1',
            'products' => 'a',
            'amount' => 1
        ],[
            'name' => 'Name 2',
            'products' => 'ab',
            'amount' => 2
        ],[
            'name' => 'Name 3',
            'products' => 'abc',
            'amount' => 3
        ]
        ]);
    }
}