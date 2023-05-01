<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {      
        if(Auth::user()->role_id == 1){
            return redirect("admin/dashboard");
        }elseif(Auth::user()->role_id == 2){
            return redirect("HR/dashboard");
        }elseif(Auth::user()->role_id ==3){
            return redirect("em/dashboard");
        }
        elseif(Auth::user()->role_id ==4){
            return redirect("employee/Overview");
        }
        return view('home');
    }
}
