<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index(){

       $products = Product::all();

       

       return view('product/index' , [
          'products' => $products
       ]);
    }


    public function create(){

      return view('product/create');
   }


   public function store(Request $request){

      Product::create($request -> input());

      // products.index is the route name in web.php . redirect the route using name.
      return redirect() -> route('products.index')->with('success', 'Product added successfully');
   }


}
