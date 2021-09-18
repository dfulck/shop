<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\offer;
use App\Models\product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function offer(Request $request)
    {

        $offer=offer::query()->where('code',$request->get('offer_code'))->firstOrFail();
        $amount = Cart::totalAmount();

        if (!$offer->exists()){
            return view('client.orders.create', [
                'items' => Cart::getItems(),
                'totalAmount' => $amount,
                'totalItems' => Cart::totalItems()
            ]);
        }
        return view('client.orders.create', [
            'items' => Cart::getItems(),
            'totalAmount' => $amount - $amount * $offer->discount / 100,
            'totalItems' => Cart::totalItems()
        ]);

    }

    public function index()
    {
        return view('client.orders.create', [
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
