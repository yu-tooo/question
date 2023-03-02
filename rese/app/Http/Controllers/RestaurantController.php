<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Restaurant;

class RestaurantController extends Controller
{


    public function shop_detail(Request $request)
    {
        $id = $request->id;
        $shop = Restaurant::where('id', $id)->first();
        $data = [
            'id' => $id,
            'shop' => $shop
        ];
        return view('restaurant.shop_detail', $data);
    }
}
