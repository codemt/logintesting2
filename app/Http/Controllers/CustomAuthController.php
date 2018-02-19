<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use Auth;
class CustomAuthController extends Controller
{
    //

    public function showRegistrationForm()
    {



    		return view('custom.register');
    }
    public function submitForm(Request $request)
    {


    			$this->validation($request);
                $request['password']= bcrypt($request->password);
                User::create($request->all());
    			return redirect('/')->with('Status','you are registered');

                //return $request->all();


    			//echo "hello";
    }
    public function validation($request)
    {


		$request->validate([
			    'fname' => 'required|max:20',
			    'lname' => 'required|max:20',
			    'mobile' => 'required|max:11',
			    'password' => 'required|confirmed|max:255',
			    'email' => 'required|email|unique:users||max:255',
			]);


    }
    public function showlogin()
    {

            return view('custom.login');


    }
    public function login(Request $request)
    {

            $request->validate([
                
                // 'password' => 'required|confirmed|max:255',
                // 'email' => 'required|email|unique:users||max:255',
            ]);

             if(Auth::attempt(['email'=>$request->email,'password'=>$request->password]))
             {

                return redirect('/');
             }
             else 
             {
                    return "something went wrong";

             }   

    }
}
