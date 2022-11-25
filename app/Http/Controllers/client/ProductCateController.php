<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Facades\DB;

class ProductCateController extends Controller
{
    //
    // public function productCate(){
    //     $products = Product::where('status','=','0')->get();
    //     return view('client.index.shop',compact('products'));

    // }
    public function ProductCate(Request $request, $idsp){
        $product= Product::where('status','=','0')->where('category_id',$idsp)->paginate(14);
        // $product = Product::where('status','=','0')
        // ->join('categories','categories.id','=','products.category_id')
        // ->select('categories.name','products.id','products.title','products.slug','products.quantily','products.price','products.size','products.date','products.thumnail','products.saled','products.color','products.view','products.category_id','products.brand_id','products.description','products.status','products.tags')
        // ->where('category_id', $idsp )->first();

        return view('client.index.productCategory',compact('product'));
    }

}
