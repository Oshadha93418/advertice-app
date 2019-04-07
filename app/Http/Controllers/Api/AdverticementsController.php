<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

use App\AdverticeCategories;
use App\UserSubcription;
use App\Adverticements;

use Validator;

class AdverticementsController extends Controller
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
    {
        $categories = AdverticeCategories::all();
        $user = Auth::user();
        $userSub = UserSubcription::where(['user_id' => $user->id])->with('SubscriptionPlans')->get();
        return view('user/products/create', compact('categories', 'user', 'userSub'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        /* $valid = $this->validate($request,[
            'discription' => 'required|string',
            'category_id' => 'required|integer'
        ]); */
        $user_id = Auth::user()->id;
        $userSub = UserSubcription::where(['user_id' => $user_id])->with('user')->get();
        //$userSubplan = UserSubcription::where(['user_id' => $user_id])->get()->find(1)->SubscriptionPlans;
        /* var_dump($userSub[0]["id"]); */
        $adverticement = new Adverticements([
            'user_id' => $user_id,
            'title' => $request->get('title'),
            'discription' => $request->get('description'),
            'cat_id' => $request->get('category_id'),
            'user_sub_id' => $userSub[0]["id"],
            'status' => 'active',
        ]);

        $adverticement->save();
  
        return redirect('/home')->with(['status' => 'New Adverticement Added!']);
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
        $adds = Adverticements::find($id)->get();
        $adds->touch();

        return redirect('adverticeList');
    }
}
