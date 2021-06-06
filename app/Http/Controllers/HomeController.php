<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;
use Session;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('admin.mainlayout');
    }
    public function mainlayout()
    {
        return view('admin.mainlayout');
    }

    
    


    public function addcategory()
    {
        return view('admin.addcategory');
    }
    public function add_category(Request $request) 
    {
             DB::table('category')
                ->insert(['name'=>$request->name,
                            'des'=>$request->des]);

        return redirect()->route('viewcategory');
    }
    public function viewcategory()
    {
        $data = DB::table('category')->get();
        
        return view('admin.viewcategory')->withData($data);
    }
    public function deletecategory($id)
    {
        $id = DB::table('category')
            ->where('id','=',$id)
            ->delete();

        return redirect()->route('viewcategory');
    }
    public function editcategory($id)
    {
        $data = DB::table('category')
            ->where('id','=',$id)
            ->get();
            
        return view('admin.editcategory')->withData($data);
    }
    public function editcategory_post(Request $request)
    {
        DB::table('category')
            ->where('id','=',$request->id)
            ->update(["name"=>$request->name,
                        "des"=>$request->des]);

        return redirect()->route('viewcategory');
    }





    public function addsubcategory()
    {
        $cat = DB::table('category')->get();

        return view('admin.addsubcategory')->withCat($cat);
    }


    public function postsubcategory(Request $request)
    {   

     $cat = DB::table('category')->get();

     DB::table('subcategory')
         ->insert(['name'=>$request->cname,'cat_id'=>$request->cat_id]);
    

         return redirect()->route('viewsubcategory')->withCat($cat);    
    }
     public function viewsubcategory()
    {
        $data = DB::table('subcategory')
                    ->leftjoin('category','category.id','=','subcategory.cat_id')
                    ->select('subcategory.*','category.name as cname')
                    ->get();

         return view('admin.viewsubcategory',['data'=>$data]);
    }
    public function deletesubcategory($id)
    {
        $id = DB::table('subcategory')
            ->where('id','=',$id)
            ->delete();

        return redirect()->route('viewsubcategory');
    }

    public function editsubcategory($id)
    {
        
        $cat = DB::table('category')->get();

          $data = DB::table('subcategory')
            ->where('id','=',$id)
            ->get();

        return view('admin.editsubcategory')->withData($data)->withCat($cat);

    }

    public function editsubcategorypost(Request $request)
    {
        DB::table('subcategory')
            ->where('id','=',$request->id)
            ->update(["name"=>$request->name]);

        return redirect()->route('viewsubcategory');
    }

    


    

    public function addproduct()
    {
        $cat = DB::table('category')->get();

        return view('admin.addproduct')->withCat($cat);
    }
    public function postproduct(Request $request) 
    {
        //dd($request);
            $file = $request->image->getClientOriginalName();
            $file1 = time().$file;
            $loc = 'product/';
            $path = $request->file('image')->storeAs($loc,$file1);

            $cat = DB::table('category')->get();

            DB::table('product')
                ->insert(['scat_id'=>$request->scat_id,
                            'name'=>$request->name,
                            'price'=>$request->price,
                            'des'=>$request->des,
                            'status'=>$request->status,
                            'image'=>$file1]);

        return redirect()->route('viewproduct');
    }
    public function viewproduct()
    {

        $data = DB::table('product')
                    ->leftjoin('category','category.id','=','product.scat_id')
                    ->select('product.*','category.name as cname')
                    ->get();

         return view('admin.viewproduct',['data'=>$data]);

    }
    public function productdetail($id)
    {
         $data = DB::table('product')
            ->where('id','=',$id)
            ->get();
            
        return view('admin.productdetail',['data'=>$data]);

    }
   
    public function deleteproduct($id)
    {
        $id = DB::table('product')
            ->where('id','=',$id)
            ->delete();

        return redirect()->route('viewproduct');
    }

    public function customers()
    {
        $data = DB::table('customers')->get();

        return view('admin.users')->withData($data);
    }
    public function deletecustomer($id)
    {
        $id = DB::table('customers')
            ->where('id','=',$id)
            ->delete();

        return redirect()->route('customers');
    }

    public function careerapp()
    {
        $data = DB::table('career')->get();

        return view('admin.career')->withData($data);
    }




    public function accountview()
    {
        $data = DB::table('users')->get();
        
        return view('admin.accountview')->withData($data);
    }
    public function edit_account($id)
    {
        $data = DB::table('users')
            ->where('id','=',$id)
            ->get();

        return view('admin.edit_account')->withData($data);
    }
    public function edit_account_post(Request $request)
    {
        DB::table('users')
            ->where('id','=',$request->id)
            ->update(["name"=>$request->name,
                        "email"=>$request->email]);

        return redirect()->route('accountview');
    }

    public function logo()
    {
        $data = DB::table('logo')->get();

        return view('admin.logo')->withData($data);
    }

    public function editlogo($id) 
    {
        $data = DB::table('logo')->get();

        return view('admin.editlogo')->withData($data);

    }
    public function editlogopost(Request $request)
    {
            $file = $request->image->getClientOriginalName();
            $file1 = time().$file;
            $loc = 'logo/';
            $path = $request->file('image')->storeAs($loc,$file1);

            DB::table('logo')
                ->where('id','=',$request->id)
                ->update(['image'=>$file1]);

            return redirect()->route('logo');
    }








    public function banner()
    {
        return view('admin.banner');
    }
    public function addbanner(Request $request) 
    {
          
            $file = $request->image->getClientOriginalName();
            $file1 = time().$file;
            $loc = 'banner/';
            $path = $request->file('image')->storeAs($loc,$file1);

            DB::table('banner')
                ->insert(['heading'=>$request->heading,
                          'image'=>$file1]);

             return redirect()->route('viewbanner');
    }
     public function viewbanner()
    {
        $data = DB::table('banner')->get();
        
        return view('admin.viewbanner')->withData($data);
    }
     public function deletebanner($id)
    {
        $id = DB::table('banner')
            ->where('id','=',$id)
            ->delete();

        return redirect()->route('viewbanner');
    }

    public function banner_active($id,$status)
    {

        if($status == 'active')
        {   
            DB::table('banner')
                ->where('id','=',decrypt($id))
                ->update(['status'=>'inactive']);
        }
        else
        {
            DB::table('banner')
                ->where('id','=',decrypt($id))
                ->update(['status'=>'active']);

        }
        $data = DB::table('banner')->get();

        return redirect()->route('viewbanner')->withData($data);
    }


    public function complaints()
    {
        $data = DB::table('contact')->get();
        
        return view('admin.complaints')->withData($data);
    }


    public function product_active($id,$status)
    {

        if($status == 'active')
        {   
            DB::table('product')
                ->where('id','=',decrypt($id))
                ->update(['status'=>'inactive']);
        }
        else
        {
            DB::table('product')
                ->where('id','=',decrypt($id))
                ->update(['status'=>'active']);

        }
        $data = DB::table('product')->get();

        return redirect()->route('viewproduct')->withData($data);
    }

    public function orderdetails()
    {

        $data = DB::table('sale')
                ->leftjoin('customers','customers.id','=','sale.cid')
                ->leftjoin('customer_address','customer_address.id','=','sale.aid')
                ->select('sale.*','customers.id','customer_address.name','customer_address.mobile','sale.id as sid')
                ->get();


        return view('admin.orderdetails')->withData($data);

    }
    public function sale_order_view($id)
    {
        $id=decrypt($id); 
        // dd($id);

       $data = DB::table('sale')
            ->leftjoin('customer_address','customer_address.id','=','sale.aid')
            ->leftjoin('product','product.id','=','sale.pid')
            ->where('sale.cid','=',$id)  
            ->select('sale.*','product.image as image','customer_address.name as cname','sale.aid as aid','customer_address.flat','customer_address.mobile','customer_address.name as cname','customer_address.society','customer_address.landmark','customer_address.city','customer_address.state','customer_address.pincode')
            ->get();

        return view('admin.sale_order_view')->withData($data);
    
    }
    public function orderstatus($id)
    {
        $data = DB::table('sale')
            ->where('id','=',$id)
            ->get();

        return view('admin.orderstatus')->withData($data);
    }
    public function orderstatuspost(Request $request)
    {
        DB::table('sale')
            ->where('id','=',$request->id)
            ->update(['status'=>$request->status]);

        return redirect()->route('orderdetails');
    }




}




