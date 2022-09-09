<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PriceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $prices = [
                [ 'height' => '100-120', 'article' => '1232132', 'percent' => 30, 'price_low' => 1000, 'price_old_low' => 1100, 'price_middle' => 1200, 'price_old_middle' => 1300, 'price_high' => 1400, 'price_old_high' => 1500, 'product_id' => 1],
            [ 'height' => '120-140', 'article' => '1232132', 'percent' => 40, 'price_low' => 2000, 'price_old_low' => 2100, 'price_middle' => 2200, 'price_old_middle' => 2300, 'price_high' => 2400, 'price_old_high' => 2500, 'product_id' => 1],
            [ 'height' => '140-160', 'article' => '1232132', 'percent' => 50, 'price_low' => 3000, 'price_old_low' => 3100, 'price_middle' => 3200, 'price_old_middle' => 3300, 'price_high' => 3400, 'price_old_high' => 3500, 'product_id' => 1],
            [ 'height' => '160-180', 'article' => '1232132', 'percent' => 60, 'price_low' => 4000, 'price_old_low' => 4100, 'price_middle' => 4200, 'price_old_middle' => 4300, 'price_high' => 4400, 'price_old_high' => 4500, 'product_id' => 1, 'is_active' => 1],
            [ 'height' => '180-200', 'article' => '1232132', 'percent' => 70, 'price_low' => 5000, 'price_old_low' => 5100, 'price_middle' => 5200, 'price_old_middle' => 5300, 'price_high' => 5400, 'price_old_high' => 5500, 'product_id' => 1],
            [ 'height' => '180-200', 'article' => '1232132', 'percent' => 80, 'price_low' => 6000, 'price_old_low' => 6100, 'price_middle' => 6200, 'price_old_middle' => 6300, 'price_high' => 6400, 'price_old_high' => 6500, 'product_id' => 1],
            [ 'height' => '100-120', 'article' => '1232132', 'percent' => 30, 'price_low' => 1000, 'price_old_low' => 1100, 'price_middle' => 1200, 'price_old_middle' => 1300, 'price_high' => 1400, 'price_old_high' => 1500, 'product_id' => 2],
            [ 'height' => '120-140', 'article' => '1232132', 'percent' => 40, 'price_low' => 2000, 'price_old_low' => 2100, 'price_middle' => 2200, 'price_old_middle' => 2300, 'price_high' => 2400, 'price_old_high' => 2500, 'product_id' => 2, 'is_active' => 1],
            [ 'height' => '140-160', 'article' => '1232132', 'percent' => 50, 'price_low' => 3000, 'price_old_low' => 3100, 'price_middle' => 3200, 'price_old_middle' => 3300, 'price_high' => 3400, 'price_old_high' => 3500, 'product_id' => 2],
            [ 'height' => '160-180', 'article' => '1232132', 'percent' => 60, 'price_low' => 4000, 'price_old_low' => 4100, 'price_middle' => 4200, 'price_old_middle' => 4300, 'price_high' => 4400, 'price_old_high' => 4500, 'product_id' => 2],
            [ 'height' => '180-200', 'article' => '1232132', 'percent' => 70, 'price_low' => 5000, 'price_old_low' => 5100, 'price_middle' => 5200, 'price_old_middle' => 5300, 'price_high' => 5400, 'price_old_high' => 5500, 'product_id' => 2],
            [ 'height' => '180-200', 'article' => '1232132', 'percent' => 80, 'price_low' => 6000, 'price_old_low' => 6100, 'price_middle' => 6200, 'price_old_middle' => 6300, 'price_high' => 6400, 'price_old_high' => 6500, 'product_id' => 2],
        ];

        foreach ($prices as $price) {
            DB::table('prices')->insert($price);
        }
    }
}
