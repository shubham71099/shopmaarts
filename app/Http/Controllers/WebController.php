<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;
use Session;
use Mail;
use Cart;

class WebController extends Controller
{

    public function logo()
    {
        $logo = DB::table('logo')->get();

        return $logo;

    }
    public function web()
    {
    	// dd('innnn');
        $logo = DB::table('logo')->get();

        $banner = DB::table('banner')
            ->where('status','=','active')
            ->get();

        $product = DB::table('product')
            ->leftjoin('category','category.id','=','product.scat_id')
            ->select('product.*','category.name as cname')
            ->where('status','=','active')
            ->get();

        $cart = Session::has('userdata')?Session::get('userdata'):null;
       
        Session::put('userdata',$cart);       
    
        return view('web.layout.index')->withlogo($logo)->withbanner($banner)->withproduct($product)->withCart($cart);
    }
    public function front()
    {
    	$logo = DB::table('logo')->get();

    	return view('web.layout.front')->withlogo($logo);
    }

    public function saree()
    {
        $category = DB::table('category')
            ->get();

        $product = DB::table('product')
            ->where('name','=','Prints saree')
            ->get();

        return view('web.layout.filter')->withproduct($product)->withcategory($category);
    }

    public function lehanga()
    {
        $category = DB::table('category')
            ->get();

        $product = DB::table('product')
            ->where('scat_id','=','1')
            ->get();

        return view('web.layout.filter')->withproduct($product)->withcategory($category);
    }

    public function kurti()
    {
        $category = DB::table('category')
            ->get();

        $product = DB::table('product')
            ->where('scat_id','=','10')
            ->get();

        return view('web.layout.filter')->withproduct($product)->withcategory($category);
    }

    public function shop()
    {
        $category = DB::table('category')
            ->get();

        $product = DB::table('product')
            ->get();

        return view('web.layout.shop')->withproduct($product)->withcategory($category);
        
    }

    public function career()
    {
        
        $cart = Session::has('userdata')?Session::get('userdata'):null;
       
        Session::put('userdata',$cart);   

        return view('web.layout.career')->withCart($cart);
    }

    public function postcareer(Request $request) 
    {
             DB::table('career')
                ->insert(['name'=>$request->name,
                            'email'=>$request->email,
                            'mobile'=>$request->mobile,
                            'qualification'=>$request->qualification,
                            'experience'=>$request->experience,
                            'address'=>$request->address]);

        return back()->with('success','Your Job Application Received Successfully .');
    }

    public function contact()
    {
        
        $cart = Session::has('userdata')?Session::get('userdata'):null;
       
        Session::put('userdata',$cart);   

        return view('web.layout.contact')->withCart($cart);
    }
    public function postcontact(Request $request)
    {
             $id =  DB::table('contact')
                    ->insertGetId(['name'=>$request->name,
                                'email'=>$request->email,
                                'message'=>$request->message]);

                    $data = DB::table('contact')
                            ->where('id','=',$id)
                            ->select('contact.*')
                            ->first();    

                            // dd($id,$data);

                            // dd($data->email);

                Mail::send('mail.send_email_offers',['data'=>$data], function ($message) use($data)
                {
                    $message->from('shopmaarts@gmail.com','Shopmaarts Offers');
                    $message->to($data->email)->subject('Welcome to Shopmaarts');
                });

                //dd('Mail send');

        //return redirect()->route('web');
                return back()->with('success','Complaint / query registered successfully');
    }
    
    

    public function productfetch($id)
    {
    	$cart = Session::has('userdata')?Session::get('userdata'):null;
       
        Session::put('userdata',$cart); 
    	
         $data = DB::table('product')
            ->where('id','=',$id)
            ->get();

         $product = DB::table('product')
            ->leftjoin('category','category.id','=','product.scat_id')
            ->select('product.*','category.name as cname')
            ->where('status','=','active')
            ->get();
            
        return view('web.layout.productfetch',['data'=>$data])->withCart($cart)->withproduct($product);

    }
    public function shopbycategory($id)
    {
        $cart = Session::has('userdata')?Session::get('userdata'):null;
       
        Session::put('userdata',$cart); 

        $scategory = DB::table('category')
                    ->where('id','=',$id)
                    ->get();

        
        $category = DB::table('category')
            ->get();

         $product = DB::table('product')
            ->where('scat_id','=',$id)
            ->get();
            
            // dd($category);

        return view('web.layout.shopbycategory',['product'=>$product])->withCart($cart)->withCategory($category)->withScategory($scategory);

    }

    public function addtocart(Request $request)
    {
        //Session::flush();

        //dd($request);
        $data = $request->all();
        //dd($data);   
        //$userdata = $request->Session()->put('userdata',$data);
        $cart = Session::has('userdata')?Session::get('userdata'):null;
       
       $image = DB::table('product')
            ->where('id','=',$request->id)
            ->select('image','id')
            ->get();

        $match = "false";

        if($match = "false")
        {
            $cart[] = array(
                'image'=>$image[0]->image,
                'name'=>$request->name,
                'price'=>$request->price,
                'quantity'=>$request->quantity,
            );
        }
        else
        {
            $cart[] = array(
                'image'=>$image[0]->image,
                'name'=>$request->name,
                'price'=>$request->price,
                'quantity'=>$request->quantity,
            );
        }
         //dd($cart);
        Session::put('userdata',$cart);
        $logo = DB::table('logo')->get();
        return view('web.layout.contact')->withCart($cart)->withlogo($logo)->withDisplay('true')->withImage($image);

    }

    
    
}
