<?php

use App\Models\Cart;
use Illuminate\Support\Str;

function get_cart_session_hash(){
    $cart_hash =  session()->get('cart_session_hash');

    if($cart_hash){
        return $cart_hash;
    }
    session()->put('cart_session_hash',Str::random(60));
    return  session()->get('cart_session_hash');
}

function get_cart(){
    return Cart::where("hash_id", get_cart_session_hash())->get();;
}

function clear_cart(){
    return Cart::where("hash_id", get_cart_session_hash())->delete();
}

function add_product_to_cart($product_id,$quantity){

   return Cart::create(
        [
            "product_id" => $product_id,
            "quantity" => $quantity,
            "hash_id" => get_cart_session_hash()
        ]
    );
}