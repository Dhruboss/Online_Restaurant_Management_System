<?php

namespace App\Http\Controllers;

use App\Models\login;
use App\Models\customer;
use Illuminate\Support\Facades\Cookie;
use App\Http\Requests\StoreloginRequest;
use App\Http\Requests\UpdateloginRequest;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function Login(){
        return view('customer.login');
    }

    public function loginSubmit(Request $request){
        $customer = customer::where('email',$request->email)
                            ->where('pass',$request->pass)
                            ->first();

        // return $teacher;
        if($customer){
            session()->put('customer',$customer->c_id);
            //$request->session()->put('customer',$customer->name);

            if ($request->remember) {
                setcookie('remember',$request->email, time()+36000);
                Cookie::queue('name',$customer->email."",time()+60);
            }else{
                setcookie('remember',"");
                Cookie::queue('name',"");
            }
           // return redirect()->route('products.mycart');
            return view('pages.home')->with('customer', $customer);
        }
        return redirect()->route('login');

    }

    public function logout(){
        session()->flush();
        return redirect()->route('login');
    }

}
