<?php

namespace App;

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
        }
    }
    public function AddCart($product, $id)
    {
        $newProduct = ['quantily' => 0, 'price' => $product->price, 'productInfo' => $product, 'size' => ''];
        if ($this->products) {
            if (array_key_exists($id, $this->products)) {
                $newProduct = $this->products[$id];
            }
        }
        $newProduct['sized'] = 'S';
        $newProduct['quantily']++;
        $newProduct['price'] = $newProduct['quantily'] * $product->price;
        $this->products[$id] = $newProduct;
        $this->totaPrice += $product->price;
        $this->totalQuanty++;
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
    public function AddCartDetail($id, $quantily, $size)
    {
        $this->totalQuanty -= $this->products[$id]['quantily'];
        $this->totaPrice -= $this->products[$id]['price'];

        $this->products[$id]['quantily'] = $quantily;
        $this->products[$id]['size'] = $size;
        $this->products[$id]['price'] = $quantily * $this->products[$id]['productInfo']->price;

        $this->totalQuanty += $this->products[$id]['quantily'];
        $this->totaPrice += $this->products[$id]['price'];
        $this->totalSized += $size;
    }
}
