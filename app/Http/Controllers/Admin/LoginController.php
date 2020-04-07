<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Symfony\Component\Console\Input\Input;
use Validator;
use Auth;


class LoginController extends Controller
{
    use AuthenticatesUsers;

    protected $redirectToRouteAfterAuth = 'admin.dashboard.index';

    public function showLoginForm()
    {
        return view('admin.auth.login');
    }

    public function adminLogin(Request $request)
    {
        //validate input data
        //if validation successfully attempt to login user
        //if attempt true redirect admin panel index

        $rules = array(
            'email' => 'required|email',
            'password' => 'required|min:3'
        );
        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            //validation failed then redirect back
            return redirect()->route('admin.login.showLoginForm')->with('validationError', 'رمز عبور باید حداقل سه کاراکتر باشد');
        } else {
            //validation successfully then attempt to login user
            $userData = array(
                'email' => $request->input('email'),
                'password' => $request->input('password'),
                'is_admin' => true,
            );
            //attempt to login user
            if (Auth::attempt($userData)) {
                //login done
                return  redirect()->route($this->redirectToRouteAfterAuth);
            } else {
                return back()->with('loginError', 'ایمیل یا رمز عبور اشتباه است');
            }
        }
    }

    public function adminLogout()
    {
        Auth::logout();
        return redirect()->route('admin.login.showLoginForm');
    }
}
