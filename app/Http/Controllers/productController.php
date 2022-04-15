<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class productController extends Controller
{
    public function main()
    {
$products=Product::all();


        return view('products', compact('products'));
    }


public function create()
{
    product::create([

        'title'=>'maiou',
        'description'=>'maiou pentru sport',
        'price'=>'400',
        'created_at'=>now(),
        'updated_at'=>now(),
    ]);

    dd('created');
}





}
