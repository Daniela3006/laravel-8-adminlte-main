<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class productController extends Controller
{
    public function main()
    {
        //$products = Product::all();
$category= Category::find(1);
dd($category->products);
      //  return view('product.index', compact('products'));
    }


    public function create()
    {
        return view('product.create');
    }


    public function store()
    {
        $data = request()->validate([
            'title' => 'string',
            'description' => 'string',
            'price' => 'integer',
        ]);
        $product = Product::create($data);
        return redirect()->route('product.main');
    }



    public function show(Product $product)
    {

        return view('product.show', compact('product'));
    }


    public function edit(Product $product)
    {
        return view('product.edit', compact('product'));
    }

    public function update(Product $product)
    {
        $data = request()->validate([
            'title' => 'string',
            'description' => 'string',
            'price' => 'integer',
        ]);
        $product->update($data);
        return redirect()->route('product.show', $product->id);
    }
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect(route('product.main'));
    }
}
