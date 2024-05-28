<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AdminLoginController extends Controller
{
    public function index(){
        return view('adminlogin');
    }
    public function authenticate(Request $request){

        $validator=Validator::make($request->all(),[
            'email'=>'required|email',
            'password'=>'required'

        ]);
        if($validator->passes()){
            if(Auth::guard('admin')->attempt(['email'=> $request->email,'password'=>$request->password],$request->get('remember'))){
                $admin=Auth::guard('admin')->user();
                if($admin->role==2){
                    return redirect()->route('admin.dashboard');
                }else{
                    $admin=Auth::guard('admin')->logout();
                    return redirect()->route('admin.login')->with('error','You are not authorize access admin panel');
                }
                
            }else{
              return redirect()->route('admin.login')->with('error','Either Eamil/Password is incorrect');
            }
        }else{
            return redirect()->route('admin.login')
            ->withErrors($validator)
            ->withInput($request->only('email'));
        }
    }
   
}