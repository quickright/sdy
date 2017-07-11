<?php

namespace App\Http\Controllers\Auth;

use App\Model\Hd\User;
use App\Http\Controllers\Controller;
use App\Traits\CaptchaTrait;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Log;

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
    use CaptchaTrait;


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

        var_dump($data);
         /*$rules = ['captcha' => 'required|captcha'];
            $validator = Validator::make($data, $rules);
            if ($validator->fails())
            {
                echo '<p style="color: #ff0000;">Incorrect!</p>';
                 var_dump($validator);
            }
            else
            {
                echo '<p style="color: #00ff30;">Matched :)</p>';
                var_dump($validator);
            }*/

                Log::info('Showing user profile for user: ');

        $messages  = [
        'password.confirmed' => ' 2次密码输入不相同，请重新输入.',
        'captcha.captcha' => ' 验证码不对，请重新输入',
        ];
        return Validator::make($data, [
            'user_name' => 'required|string|max:255',
            'mobile' => 'required|string|numeric',
            //'email' => 'required|string|email|max:255|unique:mobile',
            'password' => 'required|string|min:6|confirmed',//|unique:mobile',
             'password-confirm' => 'required|s_same:password',
             'captcha' => 'required|captcha',
        ],$messages);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return User::create([
            'user_name' => $data['user_name'],
            'mobile' => $data['mobile'],
            'password' => bcrypt($data['password']),
        ]);
    }
}
