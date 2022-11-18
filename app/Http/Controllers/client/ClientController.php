<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Posts;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        Carbon::setLocale('vi');
        $category = Category::all();
        $trending = Product::where('view', '>', '100')->where('status', '=', '0')->orderBy('view', 'DESC')->get();
        $blog = DB::table('posts')
            ->join('categories', 'categories.id', '=', 'posts.category_id')
            ->join('user', 'user.id', '=', 'posts.user_id')
            ->orderBy('title', 'DESC')
            ->select('categories.name', 'posts.sumary', 'posts.thumnail_url', 'posts.title', 'posts.date', 'posts.created_at', 'user.name as tacgia')

            ->get();

        $product = Product::where('status', '=', '0')->orderBy('title', 'ASC')->paginate(10);

        return view('client.index.trangchu', compact('product', 'category', 'trending', 'blog'));
    }

    public static  function countProductByIdCate($id) // id danh mục
    {
        return Product::where('category_id', $id)->count();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function productDetail($id)
    {
        $category = DB::table('categories')
            ->join('products', 'products.category_id', '=', 'categories.id')
            ->where('products.id', '=', $id)
            ->get();
        $brand = DB::table('brands')
            ->join('products', 'products.category_id', '=', 'brands.id')
            ->where('products.id', '=', $id)
            ->get();

        $product = Product::find($id);
        if ($product == null) return redirect('/thongbao');
        return view('client.index.productDetail', compact('product', 'category', 'brand'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
