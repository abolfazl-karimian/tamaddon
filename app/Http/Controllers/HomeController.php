<?php

namespace App\Http\Controllers;

use App\admin;
use Illuminate\Support\Facades\App;

//use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        //admin = Admin::all();
        //var_dump($admin->last()->Name);
//        dd('dd');
//        $admin = Admin::latest()->first();
//        $admin = $admin->latest()->first();    ----> if the function was     public function home(Admin $admin)
//        return view('Home',compact('admin'));

        return view('user.home');
    }

    public function index()
    {
//        dd('ss');
    }
}
