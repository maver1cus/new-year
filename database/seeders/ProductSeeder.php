<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = [
            [ 'title' => 'Смарагд', 'title_heading' => '<b>Туя</b> смарагд', 'hash' => 'smaragd', 'article' => '423432343'],
            [ 'title' => 'Брабант', 'title_heading' => '<b>Туя</b> Брабант', 'hash' => 'brabant', 'article' => '423432342'],
        ];

        foreach ($products as $product) {
            DB::table('products')->insert($product);
        }
    }
}
