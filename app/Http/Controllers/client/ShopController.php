<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Facades\DB;

class ShopController extends Controller
{
    //
    public function Category(Request $request){
        $products = Product::where('status','=','0')->paginate(14);
        return view('client.index.shop',compact('products'));

    }
    // public function ProductCate($idsp){
    //     $product= Product::where('category_id',$idsp)->get();
    //     // $product = Product::where('status','=','0')
    //     // ->join('categories','categories.id','=','products.category_id')
    //     // ->select('categories.name','products.id','products.title','products.slug','products.quantily','products.price','products.size','products.date','products.thumnail','products.saled','products.color','products.view','products.category_id','products.brand_id','products.description','products.status','products.tags')
    //     // ->where('category_id', $idsp )->first();

    //     return view('client.index.productCate',compact('product'));
    // }
    // public function ProductCate($idsp){
    //     // $category =Category::where('status','=','0')->where('id', $idsp)->first();
    //     $product = Product::where('status','=','0')->where('category_id', $idsp )->get();

    //     return view('client.index.shop', compact('product'));
    // }

}
