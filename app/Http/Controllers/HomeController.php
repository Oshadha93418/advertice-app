<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

use App\SubscriptionPlans;

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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user_id = Auth::user()->id;
        $sub_plan= SubscriptionPlans::where(['user_id'=>$user_id])->get();
        if(!$sub_plan){
            return view('home')->with(['select_subscription_plan'=>$sub_plan]);
        }
        return view('home')->with(['select_subscription_plan'=>$sub_plan]);
    }
}
