<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function foodBeverage()
    {
        return view('products.food_beverage');
    }

    public function beautyHealth()
    {
        return view('products.beauty_health');
    }

    public function homeCare()
    {
        return view('products.home_care');
    }

    public function babyKid()
    {
        return view('products.baby_kid');
    }
}
