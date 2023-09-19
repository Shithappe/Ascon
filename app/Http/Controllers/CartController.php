<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request; 
use App\Http\Requests\StoreCartRequest;
use App\Http\Requests\UpdateCartRequest;

class CartController extends Controller
{

    public function addToCart(Request $request)
    {
        $user_id = $request->input('user_id');
        $product_id = $request->input('product_id');
        $quantity = $request->input('quantity');

        $cartItem = new Cart([
            'user_id' => $user_id,
            'product_id' => $product_id,
            // 'quantity' => $quantity,
        ]);

        $cartItem->save();

        return response()->json(['message' => 'Product added to cart successfully']);
    }

    /**
     * Display a listing of the resource.
     */
    public function index($user_id)
    {
        $cartItems = Cart::where('user_id', $user_id)->get();

        return response()->json(['cartItems' => $cartItems]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCartRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Cart $cart)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cart $cart)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCartRequest $request, Cart $cart)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cart $cart)
    {
        //
    }
}
