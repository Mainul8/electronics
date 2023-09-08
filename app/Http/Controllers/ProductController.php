<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;

class ProductController extends Controller
{
     public function index()
  {
     
    $cat=Category::all();
    $data=compact('cat');
    return view('registration')->with($data);
  }
  public function store(Request $request)
  {
    
    $request->validate(
      [
        'course_cat'=>'required',
        'price'=>'required',
        'ram' => 'required',
        'manufacturer' => 'required' 
      ]

    );
    $product=new Product;
    $product->course_cat=$request['course_cat'];
    $product->price=$request['price'];
    $product->ram=$request['ram'];
    $product->manufacturer=$request['manufacturer'];
    $product->save();
    return redirect('/product');

  }
  function list(Request $request){
    $products=Product::all();

    $data = compact('products');
    return view('product-view')->with($data);
  }

}
