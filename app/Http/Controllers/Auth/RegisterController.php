<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Notifications\UserActivate;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|string|email|max:150|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'input_img' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'address' => 'required|string|max:255'
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        $user = User::create([
            'name' => $data['name'],
            'last_name' => $data['last_name'],
            'email' => $data['email'],
            'full_name' => $data['name'].' '.$data['last_name'],
            'address' => $data['address'],
            'phone' => $data['phone'],
            'token' => str_random(40) . time(),
            'user_role' => 'user',
            'password' => bcrypt($data['password']),
            'file_name'=>$data['image'],
            'file_type'=>$data['type'],
            'file_path'=>$data['path']
        ]);

        $user->notify(new UserActivate($user));

        return $user;
    }
    /**
     * @param $token
     */
    public function activate($token = null)
    {
        $user = User::where('token', $token)->first();

        if (empty($user)) {
            return redirect()->to('/')
                ->with(['error' => 'Your activation code is either expired or invalid.']);
        }

        $user->update(['token' => null, 'status' => User::ACTIVE]);

        return redirect()->route('login')
            ->with(['success' => 'Congratulations! your account is now activated.']);
    }

    public function fileUpload(Request $request) {

    
        if ($request->hasFile('input_img')) {
            $image = $request->file('input_img');
            $name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('images');
            $image->move($destinationPath, $name);

            $response = array('image'=>$name,'path'=>$destinationPath,'type'=>$image->getClientOriginalExtension());
    
            return $response;
        }
    }
}
