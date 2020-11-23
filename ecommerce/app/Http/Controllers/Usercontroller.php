<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
Use Illuminate\Support\Facades\Hash;

class Usercontroller extends Controller
{
    //
     public function login(Request $req)
    {
        # code...
        $user=User::where(['email'=>$req->email])->first();
    
        if(!$user || !Hash::check($req->password,$user->password)){
            return "user name is not valid".$user['password'];
        }else{
            
            $req->session()->put('user',$user);
            $req->session()->put('username',$user['name']);
            return redirect('/');
            
        }

    }
}
