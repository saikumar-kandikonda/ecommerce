<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use Illuminate\Support\Facades\Hash;
use App\Models\product;
use App\Models\order;
use App\Models\cart;
use App\Models\wishlist;
use App\Models\userdetails;
use Session;
Use Illuminate\Support\Facades\DB;
class ProductController extends Controller
{
    //
    function index(){
        $data=product::all();
        return view('product',['productdata'=>$data]);
    }
     public function register(Request $req)
    {
        # code...
        $user=new userdetails;
     
        $user->name=$req->name;
        $user->email=$req->email;
        $user->password=Hash::make($req->password);
        $user->save();
        return redirect('/login');

    }
    public function detailsofeachproduct($id)
    {
        # code...
        $productdata= product::find($id); 
        return view('productdetails',['singleproductdetails'=>$productdata]);
    }
    public function search(Request $req)
    {
        # code...
     $data=product::where('name','like','%'.$req->input('search').'%')->get();
      if($data==true){
        return view('/search',['search'=>$data]);
      }else{
         return "search results not found";
      }
     
 
    }
    public function addtocart(Request $req)
    {
        # code...
        
        if($req->session()->has('user'))
        {   
            $userid=Session::get('user')['id'];
            $cart= new cart;
            $wishlist= new wishlist;
            $cart->productid=$req->productid;
            $cart->userid=$req->session()->get('user')['id'];
            $cart->save();
            wishlist::where('productid',$req->productid)->delete();
            return redirect('/usercart');

        }
        else
        {
            return view('/login');
        }
    }
    public function wishlist(Request $req)
    {
        # code...
        
        if($req->session()->has('user'))
        {
            $wishlist= new wishlist;
            $wishlist->productid=$req->productid;
            $wishlist->userid=$req->session()->get('user')['id'];
            $wishlist->save();
            return redirect('/');

        }
        else
        {
            return view('/login');
        }
    }
    public function wishlisthere()
    {
        # code...
        if(Session::has('user')){
            $userid=Session::get('user')['id'];
            $allproducts=DB::table('wishlist')
            ->join('products','wishlist.productid','=','products.id')
            ->where('wishlist.userid',$userid)
            ->select('products.*','wishlist.id as wishlistid')
            ->get();
            
            return view('wishlist',['usercart'=>$allproducts]);
            }else
            {
                return redirect('/login');
            }

    }

    static function cartitemscount()
    {
        # code...
        $userid=Session::get('user')['id'];
     
        return cart::where('userid',$userid)->count();
       
    }
    public function men()
    {
        # code...
        
            
            $allmenproducts=DB::table('products')
            ->where('products.Gender','male')
            ->get();
            
            return view('men',['allmen'=>$allmenproducts]);
           

    }
    public function women()
    {
        # code...
          
        $allwomenproducts=DB::table('products')
        ->where('products.Gender','female')
        ->get();
        
        return view('women',['allwomen'=>$allwomenproducts]);

    }
    public function usercart()
    {
        # code...
        if(Session::has('user')){
        $userid=Session::get('user')['id'];
        $allproducts=DB::table('cart')
        ->join('products','cart.productid','=','products.id')
        ->where('cart.userid',$userid)
        ->select('products.*','cart.id as cartid')
        ->get();
        
        return view('usercart',['usercart'=>$allproducts]);
        }else
        {
            return redirect('/login');
        }

    }

    public function removefromcart($id)
    {
        # code...
        cart::destroy($id); 
        return redirect('usercart');

    }
    public function ordernow()
    {
        # code...
        $userid=Session::get('user')['id'];
        $totalprice=DB::table('cart')
        ->join('products','cart.productid','=','products.id')
        ->where('cart.userid',$userid)
        ->sum('products.price');
        
        return view('ordernow',['totalprice'=>$totalprice]);

        
    }

    public function orderproduct(Request $req)
    {
        # code...
        if(Session::has('user')){
            $userid=Session::get('user')['id'];
            $productid=$req->productid;
            $totalprice=DB::table('products')
            ->where('products.id',$productid)
            ->sum('products.price');
           
  
             return view('ordernow',['totalprice'=>$totalprice]);
        }else{
            return redirect('/login');
        }

    }
    public function orderplace(Request $req)
    {
        # code...
        if($req->address == "" || $req->payment=="")
        {
            return redirect('/ordernow');
        }else
        {
        $userid=Session::get('user')['id'];
        $allcart=cart::where('userid',$userid)->get();
        foreach($allcart as $cart){
           $order= new order;
           $order->productid=$cart->productid;
           $order->userid=$cart->userid;
           $order->status="pending";
           $order->paymentmethod=$req->payment;
           $order->paymentstatus="successful";
           $order->address=$req->address;
           $order->save();
           cart::where('userid',$userid)->delete();

        }
        return redirect('/');
    }
    }
    public function myorders()
    {
        # code...
        if(Session::has('user')){
        $userid=Session::get('user')['id'];
      
        $totalprice=DB::table('orders')
        ->join('products','orders.productid','=','products.id')
        ->where('orders.userid',$userid)
        ->get();
        
        return view('myorders',['myorders'=>$totalprice]);
        }else
        {
            return redirect('/login');
        }
    }
}


