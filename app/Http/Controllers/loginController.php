<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class loginController extends Controller
{
    //
    public function viewlogin(){
        return view('authpages.login');
      }

      protected function loginUser(Request $request){
       // return "hell";
        $credentials = $request->only('email', 'password');
        $email=$request->email;
        $password=$request->password;
        $category=$request->category;
        

        /*if (Auth::attempt($credentials)) {
            // Authentication passed...
            return redirect()->intended('/');
        }*/

        if (Auth::attempt(['email' => $email, 'password' => $password, 'category' =>'Supplier'])) {
            // The user is active, not suspended, and exists.
            //return "Supplier";
            return redirect()->action('supplierController@index');
 
        }
        if (Auth::attempt(['email' => $email, 'password' => $password, 'category' =>'Customer'])) {
            // The user is active, not suspended, and exists.
            //return redirect()->action('customerController@index');
            return "Customer";
        }
        if (Auth::attempt(['email' => $email, 'password' => $password, 'category' =>'Admin'])) {
            // The user is active, not suspended, and exists.
           // return "Admin";
           return redirect()->action('adminController@dashboard');
        }

        else {
            return redirect('/login')->with('error','Login Failed..Invalid User name or Password'); 
         }

      }
}
