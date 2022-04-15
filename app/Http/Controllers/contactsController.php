<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class contactsController extends Controller
{
    public function main()
    {
$products=Product::all();


        return view('contacts');
    }





}
