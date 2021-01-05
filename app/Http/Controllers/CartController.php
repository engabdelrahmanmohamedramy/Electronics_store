<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
use App\Models\Cart;

class CartController extends Controller
{
    public function add_cart(Request $request,$product_id)
    {
    	
    	$cartExist = Cart::where('user_id',Auth::id())->where('product_id',$product_id)->first();
    	if(!empty($cartExist))
    	{
    		$cartExist->quantity+=1;
    		$cartExist->save();
    	}
    	else
    	{
    		$cart = new Cart();
	    	$cart->user_id = Auth::id();
	    	$cart->product_id = $product_id;
	    	$cart->quantity=1;
	    	$cart->save();
    	}
    	return back();
    }


    public function cart()
    {
    	$carts = Cart::where('user_id',Auth::id())->get();
    	$total_price=0;
    	foreach ($carts as $cart) 
    	{
    		$total_price += $cart->product->price * $cart->quantity;
    	}
    	return view('cart',compact('carts','total_price'));
    }


}
