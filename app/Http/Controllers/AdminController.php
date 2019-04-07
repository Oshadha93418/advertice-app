<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Adverticements;
use App\AdverticeCategories;
use App\Payments;
use App\User;
use App\SubscriptionPlans;



class AdminController extends Controller
{
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
        $totalAdds = Adverticements::all()->count();
        $totalUsers = User::all()->count();
        $totalPayments = Payments::all()->count();
        return view('admin/home', compact('totalAdds', 'totalUsers', 'totalPayments'));
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function usersList()
    {
        $users = User::all();
        return view('admin/usersList', compact('users'));
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function paymentList()
    {
        $payments = Payments::all();
        return view('admin/paymentList', compact('payments'));
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function subscriptionList()
    {
        $subPlans = SubscriptionPlans::all();
        return view('admin/subscriptionList', compact('subPlans'));
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function categoryList()
    {
        $categories = AdverticeCategories::all();
        return view('admin/categoryList', compact('categories'));
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function adverticeList()
    {
        $adverticements = Adverticements::with('user', 'categories', 'usersub')->get();
        return view('admin/adverticeList', compact('adverticements'));
    }
}
