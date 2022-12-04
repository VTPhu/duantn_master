<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;
use App\Cart;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function AddCart($id, $sl, Request  $request)
    {
        $product = DB::table('products')->where('id', $id)->first();
        if ($product != null) {
            $oldCart = Session('Cart') ? Session('Cart') : null;
            $newCart = new Cart($oldCart);
            $newCart->AddCart($product, $id, $sl);

            $request->session()->put('Cart', $newCart);
        }
        return view('client.index.cart', compact('newCart'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function DeletedCart($id, Request  $request)
    {


        $oldCart = Session('Cart') ? Session('Cart') : null;
        $newCart = new Cart($oldCart);
        $newCart->deleteCart($id);
        if (Count($newCart->products) > 0) {
            $request->Session()->put('Cart', $newCart);
        } else {
            $request->Session()->forget('Cart');
        }
        return view('client.index.cart', compact('newCart'));
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function listCart()
    {
        return view('client.index.listCart');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function DeletedListCart($id, Request  $request)
    {


        $oldCart = Session('Cart') ? Session('Cart') : null;
        $newCart = new Cart($oldCart);
        $newCart->deleteCart($id);
        if (Count($newCart->products) > 0) {
            $request->Session()->put('Cart', $newCart);
        } else {
            $request->Session()->forget('Cart');
        }
        return view('client.index.list-cart');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function SaveListCart($id, Request  $request, $quantily)
    {

        $oldCart = Session('Cart') ? Session('Cart') : null;
        $newCart = new Cart($oldCart);
        $newCart->saveCart($id, $quantily);
        $request->Session()->put('Cart', $newCart);
        return view('client.index.list-cart');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function AddDetailProduct($id, Request  $request, $quantily, $size)
    {
        $oldCart = Session('Cart') ? Session('Cart') : null;
        $newCart = new Cart($oldCart);
        $newCart->saveCart($id, $quantily, $size);
        $request->Session()->put('Cart', $newCart);
        return view('client.index.productDetail');
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
