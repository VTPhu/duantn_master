<?php

namespace App;

use Illuminate\Support\Facades\Session;

class Cart
{
    public $products = null;
    public $totaPrice = 0;
    public $totalQuanty = 0;
    public $totalSize = 'S';

    public function __construct($cart)
    {

        if ($cart) {
            $this->products = $cart->products;
            $this->totaPrice = $cart->totaPrice;
            $this->totalQuanty = $cart->totalQuanty;
        }
    }
    public function AddCart($product, $id, $sl)
    {

        $newProduct = ['quantily' => 0, 'price' => $product->price, 'productInfo' => $product, 'size' => '',]; // khởi đầu
        if ($this->products) {

            if (array_key_exists($id, $this->products)) { // kiểm 
                $newProduct = $this->products[$id];
            }
        }

        $newProduct['sized'] = 'S';
        $newProduct['quantily'] += $sl;

        $newProduct['price'] = $newProduct['quantily'] * $product->price;

        $this->products[$id] = $newProduct;
        // $this->totaPrice += $product->price;

        $this->products[$id]['price'] = $sl * $this->products[$id]['productInfo']->price;
        $this->totaPrice += $this->products[$id]['price'];


        $this->totalQuanty += $sl;
    }
    public function deleteCart($id)
    {
        $this->totalQuanty -= $this->products[$id]['quantily'];
        $this->totaPrice -= $this->products[$id]['price'];
        unset($this->products[$id]);
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
