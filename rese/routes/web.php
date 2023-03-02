<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RestaurantController;




//店詳細
Route::get('/', [RestaurantController::class, 'shop_detail']); 














