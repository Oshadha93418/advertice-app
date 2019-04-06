<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

use App\UserSubcription;
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
        $sub_plan = UserSubcription::where(['user_id' => $user_id])->get();
        if (sizeof($sub_plan) == 0) {
            $subs = SubscriptionPlans::all();
            return view('user/subscription_plan', compact('subs'))->with(['message'=>'Please select a subscription plan']);
        }
        return view('home')->with(array('select_subscription_plan' => 'hide'));
    }
}
