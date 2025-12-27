<?php

namespace App\Http;

class Cart
{
    public $items;
    public $totalPrice;
    public $totalQty;

    function __construct($oldCart)
    {
        if ($oldCart) {
            $this->items = $oldCart->items;
            $this->totalPrice = $oldCart->totalPrice;
            $this->totalQty = $oldCart->totalQty;
        }
    }

    function add($products)
    {
        $productsStore = [
            "item" => $products,
            "totalQty" => 0,
            "totalPrice" => 0
        ];

        if ($this->items) {
            if (array_key_exists($products->id, $this->items)) {
                $productsStore = $this->items[$products->id];
            }
        }

        $productsStore['totalQty']++;
        $productsStore['totalPrice'] += $products->price;
        $this->items[$products->id] = $productsStore;
        $this->totalQty++;
        $this->totalPrice += $products->price;
    }

    // New method to update the quantity of an item
    function updateQuantity($productId, $newQty)
    {
        if ($this->items && array_key_exists($productId, $this->items)) {
            $storedItem = $this->items[$productId];
            $differenceQty = $newQty - $storedItem['totalQty'];
            $storedItem['totalQty'] = $newQty;
            $storedItem['totalPrice'] = $storedItem['item']->price * $newQty;

            // Update cart totals
            $this->totalQty += $differenceQty;
            $this->totalPrice += $storedItem['item']->price * $differenceQty;

            $this->items[$productId] = $storedItem;
        }
    }
}
