<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductsController extends Controller
{

    public function allProducts(){
        $products = Product::all();
        return response()->json(['products'=>$products], 200);
    }

    public function singleProduct($product_id){
        $products = Product::find($product_id);
        return response()->json(['products'=>$products], 200);
    }

    public function searchProduct($title){
        $products = Product::where('title', 'LIKE', '%'. $title. '%')->get();
        if($products)
        {
            return response()->json(['products'=>$products], 200);
        }
        else
        {
            return response()->json(['message'=>'No Product Found'], 404);
        }
    }

    public function allCategory(){
        $products = Product::select('category')->distinct()->get();
        $categories = array();
        foreach($products as $product){
            array_push($categories, $product['category']);
        }
        return response()->json(['categories'=>$categories], 200);
    }

    public function categoryProduct($category_name){
        $products = Product::where('category', $category_name)->get();
        return response()->json(['products'=>$products], 200);
    }

    public function addProducts(Request $request){
        $request->validate([
            'title'=>'required',
            'description'=>'required',
            'currency'=>'required',
            'price'=>'required',
            'brand'=>'required',
            'category'=>'required',
            'image'=>'required'
        ]);

        $products = new Product; 
        $products->title = $request->title;
        $products->description = $request->description;
        $products->currency = $request->currency;
        $products->price = $request->price;
        $products->brand = $request->brand;
        $products->category = $request->category;
        $products->image = $request->image;
        $products->save();
        return response()->json(['message'=>'Product Added Successfully'], 200);
    }

    public function updateProducts(Request $request, $product_id){
        $request->validate([
            'title'=>'required',
            'description'=>'required',
            'currency'=>'required',
            'price'=>'required',
            'brand'=>'required',
            'category'=>'required',
            'image'=>'required'
        ]);

        $products = Product::find($product_id);
        $products->title = $request->title;
        $products->description = $request->description;
        $products->currency = $request->currency;
        $products->price = $request->price;
        $products->brand = $request->brand;
        $products->category = $request->category;
        $products->image = $request->image;
        $products->update();
        return response()->json(['message'=>'Product Updated Successfully'], 200);
    }

    public function deleteProduct(Request $request, $id){
        $products = Product::find($id);
        $products->delete();
        return response()->json(['message'=>'Product Deleted Successfully'], 200);

    }
}
