<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class aboutController extends Controller
{
    public function main()
    {
$products=Product::all();


        return view('about');
    }








}
