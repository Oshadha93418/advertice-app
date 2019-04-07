<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\UserSubcription;
use App\SubscriptionPlans;
use App\Payments;

class UserSubcriptionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    { }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function subscribe($sub_id)
    {

        $subscription = new UserSubcription([
            'user_id' => Auth::user()->id,
            'sub_id' => $sub_id,
        ]);

        $subscription->save();

        $plan = SubscriptionPlans::where(['id' => $sub_id])->get();

        $payment = new Payments([
            'fees' => $plan->price,
            'user_id' => Auth::user()->id,

        ]);
        $payment-save();
        $categories = AdverticeCategories::all();
        $advertices = Adverticements::with('categories', 'user')
            ->where(['user_id' => Auth::user()->id])
            ->get();

        return redirect('/home', compact('categories', 'advertices'))->with('success', 'Subscription has been added');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
