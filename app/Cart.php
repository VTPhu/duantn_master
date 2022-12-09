<?php

namespace App;

use Illuminate\Support\Facades\Session;

class Cart
{
    public $products = null;
    public $totaPrice = 0;
    public $totalQuanty = 0;
    public $totalSize = 'S';
    public $totalSized = '';
    public function __construct($cart)
    {

        if ($cart) {
            $this->products = $cart->products;
            $this->totaPrice = $cart->totaPrice;
            $this->totalQuanty = $cart->totalQuanty;
            $this->totalSized = $cart->totalSized;
        }
    }
    public function AddCart($product, $id, $sl, $sized)
    {

        // khởi tạo sản phẩm mới
        $newProduct = ['quantily' => 0, 'price' => $product->price, 'productInfo' => $product, 'sized' => $sized]; // khởi đầu

        if ($this->products) {
            if (array_key_exists($id . $sized, $this->products)) { // tìm được sản phẩm trùng
                if ($this->products[$id . $sized]['sized'] == $sized) {
                    $newProduct = $this->products[$id . $sized];
                }
            }
        }

        $newProduct['quantily'] += $sl;

        // moist
        $newProduct['sized'] = $sized;

        $newProduct['price'] = $newProduct['quantily'] * $product->price;
        $this->products[$id . $sized] = $newProduct;

        $this->totaPrice += $newProduct['price'];

        // $this->products[$id]['price'] = $sl * $this->products[$id]['productInfo']->price;
        // $this->totaPrice += $this->products[$id]['price'];
        $this->totalQuanty += $sl;

        // $this->totalSized =  $this->products[$id]['sized'];
    }
    public function deleteCart($id, $sized)
    {

        $this->totalQuanty -= $this->products[$id . $sized]['quantily'];
        $this->totaPrice -= $this->products[$id . $sized]['price'];
        unset($this->products[$id . $sized]);
    }
    // public function saveCart($id, $quantily)
    // {
    //     $this->totalQuanty -= $this->products[$id]['quantily'];
    //     $this->totaPrice -= $this->products[$id]['price'];

    //     $this->products[$id]['quantily'] = $quantily;
    //     $this->products[$id]['price'] = $quantily * $this->products[$id]['productInfo']->price;

    //     $this->totalQuanty += $this->products[$id]['quantily'];
    //     $this->totaPrice += $this->products[$id]['price'];
    // }
    public function saveCart($id, $quantily)
    {
        $this->totalQuanty -= $this->products[$id]['quantily'];
        $this->totaPrice -= $this->products[$id]['price'];

        $this->products[$id]['quantily'] = $quantily;
        $this->products[$id]['price'] = $quantily * $this->products[$id]['productInfo']->price;

        $this->totalQuanty += $this->products[$id]['quantily'];
        $this->totaPrice += $this->products[$id]['price'];
    }
}
