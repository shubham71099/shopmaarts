<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;
use Session;
use Mail;
use Cart;

class CartController extends Controller
{

    public function add(Request $request)
    {
     	// dd($request);

     	\Cart::add(array(
            'id' => $request->id,
            'name' => $request->name,
            'price' => $request->price,
            'quantity' => $request->quantity,
            'attributes' => array(
                'image' => $request->image,
            )
        ));

        
       
        return redirect()->route('cart')->with('success_msg', 'Product Successfully Added to Cart!');
    }

    public function cart()
    {
        
        $cartCollection = \Cart::getContent();

        // dd($cartCollection);

        return view('web.layout.cart')->with(['cartCollection' => $cartCollection]);
    }
    
    public function removecart(Request $request)
    {
        \Cart::remove($request->id);
        return redirect()->route('cart')->with('success_msg', 'Product removed from Cart!');
    }
     public function update(Request $request)
    {
    	// dd($request->all());
    	
        \Cart::update($request->id,
            array(
                'quantity' => array(
                    'relative' => false,
                    'value' => $request->quantity
                ),
        ));
        return redirect()->route('cart')->with('success_msg', 'Cart is Updated!');
	}
	public function clear(Request $request)
	{
		\Cart::clear();

		return redirect()->route('cart')->with('success_msg', 'All product are removed from cart !');
	}

}
