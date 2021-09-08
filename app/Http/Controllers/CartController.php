<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {
        return view('client.ShopingCart.index', [
            'items' => Cart::getItems(),
            'totalAmount' => Cart::totalAmount(),
            'totalItems' => Cart::totalItems()
        ]);
    }

    public function store(Request $request, Product $product)
    {
        Cart::new($product, $request);

        return response([
            'msg' => 'successful',
            'cart' => Cart::getCart()
        ], 200);
    }

    public function destroy(Product $product)
    {
        Cart::remove($product);

        return response([
            'msg' => 'removed',
            'cart' => Cart::getCart()
        ], 200);
    }
}
