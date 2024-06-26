<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
   
    public function home()
    {
        return view('home');
        }

     public function store(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'mobile' => 'required',
            'city' => 'required',
        ]);
        $user = new User();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->mobile = $request->input('mobile');
        $user->city = $request->input('city');
        $user->save();
        return redirect()->route('payment');
     }   
     public function payment(){
        return view('paymentpage');
        }
}
