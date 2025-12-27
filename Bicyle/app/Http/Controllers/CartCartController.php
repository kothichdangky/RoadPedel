<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Cart;

class CartCartController extends Controller
{
    public function updateQuantity(Request $request, $productId)
    {
        $newQty = $request->input('quantity');
        $cart = session()->get('cart');

        if (!$cart) {
            return response()->json(['success' => false, 'message' => 'Cart not found']);
        }

        if (!$newQty || !is_numeric($newQty) || $newQty < 1) {
            return response()->json(['success' => false, 'message' => 'Invalid quantity']);
        }

        $cartInstance = new Cart($cart);
        $cartInstance->updateQuantity($productId, $newQty);
        session()->put('cart', $cartInstance);

        return response()->json([
            'success' => true,
            'itemTotalPrice' => $cartInstance->items[$productId]['totalPrice'],
            'totalCartPrice' => $cartInstance->totalPrice,
            'totalQuantity' => $cartInstance->totalQty
        ]);
    }


}
