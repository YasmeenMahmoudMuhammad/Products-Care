<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
use App\Models\Cart;
use App\Models\Bill;
use App\Models\Order;

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

    public function checkout()
    {
        return view('checkout');
    }

    public function add_bill(Request $request)
    {

        $carts = Cart::where('user_id',Auth::id())->get();
        $total_price=0;
        foreach ($carts as $cart) 
        {
            $total_price += $cart->product->price * $cart->quantity;
        }

        $bill = new Bill();
        $bill->user_id = Auth::id();
        $bill->address = $request->get('add');
        $bill->payment_details = $request->get('Payment_Details');
        $bill->total_price = $total_price;
        $bill->save();
        foreach ($carts as $cart) 
        {
            $order = new Order();
            $order->bill_id = $bill->id;
            $order->product_id = $cart->product_id;
            $order->quantity = $cart->quantity;
            $order->save();
            $cart->delete();
        }
        return view('thankyou');
    }

}
