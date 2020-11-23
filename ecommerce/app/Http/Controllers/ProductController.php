<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;
use App\Models\cart;
use Session;
class ProductController extends Controller
{
    //
    function index(){
        $data=product::all();
        return view('product',['productdata'=>$data]);
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
            $cart= new cart;
            $cart->productid=$req->productid;
            $cart->userid=$req->session()->get('user')['id'];
            $cart->save();
            return redirect('/');

        }
        else
        {
            return view('/login');
        }
    }
    static function cartitemscount()
    {
        # code...
        $userid=Session::get('user')['id'];
     
        return cart::where('userid',$userid)->count();
       
    }
}
