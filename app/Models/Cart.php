<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Cart
{
    public static function new(product $product, Request $request)
    {
        if (session()->has('cart')) {
            $cart = self::getItem();
        }

        $cart[$product->id] = [
            'product' => $product,
            'quantity' => $request->get('quantity')
        ];

        $cart['total_Items'] = self::totalItems();
        $cart['total_Amount'] = self::totalAmount();


        session()->put([
            'cart' => $cart
        ]);
    }

    public static function totalItems()
    {
        $items = collect(self::getItem())->filter(function ($item) {
            return is_array($item);
        });

        return count($items);
    }

    public static function totalAmount()
    {
        $totalAmount = 0;

        foreach (self::getItem() as $cartItem) {

            if (is_array($cartItem) && array_key_exists('product', $cartItem) && array_key_exists('quantity', $cartItem)) {

                $totalAmount += $cartItem['product']->cost_with_discount * $cartItem['quantity'];

            }
        }

        return $totalAmount;
    }

    public static function getItem()
    {
        if (!session()->has('cart')){
            return null;
        }
        return session()->get('cart');

    }

}
