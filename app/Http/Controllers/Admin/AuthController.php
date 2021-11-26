<?php

namespace App\Http\Controllers\Admin;
use App\Http\Requests\RequestAdminLogin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
use Auth;

class AuthController extends Controller
{
    //view login for admin
    public function login()
    {
      return view('admin.auth.login');

    }
    //check data form admin
    public function loginCheck(RequestAdminLogin $request)
    {
        $credentials = 
        [
          'email' => $request['email'],
          'password' => $request['password'],
        ];
        
         $admin = Admin::where('email',$request->email)->first();
        //if exist admin
        if($admin) 
        {
            if (Auth::guard('admin')->attempt($credentials)) 
            {
              return redirect(route('admin.home'));
            }
            else 
            {
              flash()->error("البيانات غير صحيحة");
              return back();
            }
        }
        else
        {
            flash()->error("البيانات غير صحيحة");
            return back();
        }

    }
    //logout
    public function logout()
    {
      auth()->guard('admin')->logout();
      return redirect(route('admin-login'));
    }

}
