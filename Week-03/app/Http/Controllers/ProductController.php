<?php
namespace App\Http\Controllers;

class ProductController extends Controller
{
    public function category($category)
    {
        $images = [
            'food-beverage' => 'food.png',
            'beauty-health' => 'beauty.png',
            'home-care'     => 'homecare.png',
            'baby-kid'      => 'BabyKid.png',
        ];

        return view('product', [
            'category' => $category,
            'image'    => $images[$category],
        ]);
    }
}