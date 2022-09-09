<?php

namespace App\Http\Controllers;

use App\Models\Price;
use Illuminate\Http\Request;

class PriceController extends Controller
{
    public function showToProductId($product_id) {
        return response()->json(Price::all()->where('product_id', $product_id));
    }

    public function show($price_id) {
        return response()->json(Price::find($price_id));
    }

    public function store(Request $request, $product_id) {
        $credentials = request(['height', 'article', 'percent', 'price_low', 'price_old_low', 'price_middle', 'price_old_middle', 'price_high', 'price_old_high']);
        $credentials['product_id'] = $product_id;
        $price = Price::create($request);

        return response($price);
    }

    public function updateMany(Request $request) {
        $prices = $request->prices;
        $updatePrices = [];

        foreach ($prices as $price) {
            $updatePrice = Price::find($price['id']);

            if ($updatePrice) {
                $updatePrice->update($price);
                array_push($updatePrices, $updatePrice);
            }

        }

        return response()->json([ 'prices' => $updatePrices ]);
    }

    public function destroy($price_id) {
        return response()->json(Price::find($price_id)->deleteOrFail());
    }
}
