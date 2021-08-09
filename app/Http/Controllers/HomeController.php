<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;

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
        // if(Auth::user()->status == "Inactive"){
        //     return view('user_admin.index');
        // }else 
        
        if(Auth::user()->type == "Receiver"){
            return view('user_receiver.index');    
        }else if(Auth::user()->type == "Secretariat"){
            return view('user_approver.index');
        }else if(Auth::user()->type == "Researcher"){
            return view('user_researcher.index');
        }else{
            return view('user_admin.index');
        }
    }
}
