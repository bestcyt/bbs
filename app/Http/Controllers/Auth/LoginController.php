<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function authenticate()
    {
        if (Auth::attempt(['email' => request()->input('email'), 'password' => request()->input('password')])) {
            // 认证通过...
            return redirect()->intended('dashboard');
        }
    }

    /**
     * Redirect the user to the GitHub authentication page.
     *
     * @return Response
     */
    public function redirectToProvider()
    {
        return Socialite::driver('github')->redirect();
    }

    /**
     * Obtain the user information from GitHub.
     *
     * @return Response
     */
    public function handleProviderCallback()
    {
        $user = Socialite::driver('github')->user();
//        dd($user['login'],$user['avatar_url'],$user['html_url'],$user['email']);
        if ($this->saveUserInfo($user)){
            //保存数据库 没有就创建新用户
            return redirect()->route('root', $user)->with('success', '登录成功！');
        }
        // $user->token;

        return redirect()->route('root', $user)->with('success', '登录！');
    }

    /*
     * 保存第三方用户登录信息
     */
    public function saveUserInfo($user){
        $user_['name'] = $user['login'];
        $user_['password'] = $user['login'];
        $user_['avatar'] = $user['avatar_url'];
        $user_['introduction'] = $user['html_url'];
        $user_['email'] = '8501c07'.random_int(11,99).'@qq.com';

        return User::insert($user_);

    }
}
