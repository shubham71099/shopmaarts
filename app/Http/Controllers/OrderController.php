<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;
use Session;
use Mail;
use Cart;

class OrderController extends Controller
{
      public function customer_address()
    {
        
        $cart = Session::has('userdata')?Session::get('userdata'):null;
       
        Session::put('userdata',$cart); 

        $cid = \Auth::guard('customer')->user()->id;

        $data=DB::table('customer_address')
             ->where('cid','=',$cid)
             ->get();   

        return view('web.layout.customer_address')->withCart($cart)->withData($data);
    }

    public function customer_address_submit(Request $request)
    {
        
        $cart = Session::has('userdata')?Session::get('userdata'):null;
       
        Session::put('userdata',$cart);  


        $cid=\Auth::guard('customer')->user()->id;

        //dd($request);
            $data= DB::table('customer_address')
                ->insertGetId(['name'=>$request->name,'mobile'=>$request->mobile,'flat'=>$request->flat,'society'=>$request->society,'landmark'=>$request->landmark,'city'=>$request->city,'state'=>$request->state,'pincode'=>$request->pincode,'cid'=>$cid ]);
              

        return view('web.layout.customer_address')->withCart($cart)->withdata($data);
    }
     public function address_delete($id)
    {
        $cart = Session::has('userdata')?Session::get('userdata'):null;
       
        Session::put('userdata',$cart);  

        $id=decrypt($id);
        DB::table('customer_address')
            ->where('id',$id)->delete();
        $cid=\Auth::guard('customer')->user()->id;
       
        $data=DB::table('customer_address')
             ->where('cid','=',$cid)
             ->get();


        return view('web.layout.customer_address')->withCart($cart)->withdata($data);
	}

	 public function finalcart($aid)
    {
         // dd('innn');
        $cartCollection = \Cart::getContent();

        $aid=decrypt($aid);
        $cid=\Auth::guard('customer')->user()->id;
        $data=DB::table('customers')->where('id','=',$cid)->first();

        $add=DB::table('customer_address')
           ->where('id','=',$aid)
           ->get();
           
        return view('web.layout.finalcart')->withData($data)->withAdd($add)->with(['cartCollection' => $cartCollection]); 
           
    }

    public function orderplace(Request $request)
    {
        //dd($request);
        $cid=\Auth::guard('customer')->user()->id;
       
        $aid=DB::table('customer_address')
                    ->where('cid','=',$cid)
                    ->select('id')->first();

            $sid=DB::table('sale')
                ->insert(['cid'=>$cid,'aid'=>$aid->id,'pid'=>$request->pid,'name'=>$request->name,'price'=>$request->price,'quantity'=>$request->quantity,'amount'=>$request->amount,'mode'=>$request->mode]);
            

       
         return redirect()->route('orders')->with('success_msg', 'Thanks you for Shopping with us . Your Placed Successfully !!!');
    }

    public function orders()
    {
         $cid=\Auth::guard('customer')->user()->id;

         $data = DB::table('sale')
            ->leftjoin('customer_address','customer_address.id','=','sale.aid')
            ->leftjoin('product','product.id','=','sale.pid')
            ->where('sale.cid','=',$cid)  
            ->select('sale.*','product.image as image','sale.aid as aid','customer_address.flat','customer_address.mobile','customer_address.name as cname','customer_address.society','customer_address.landmark','customer_address.city','customer_address.state','customer_address.pincode')
            ->get();

        return view('web.layout.orders')->withData($data);

    }
    
       


}
