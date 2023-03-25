<?php
/**
 * Created by PhpStorm
 * User: Norman
 * Date: 2023/3/24
 * Time: 11:45 PM
 */

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;

use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;


use Illuminate\View\View;
use Illuminate\Contracts\Auth\Guard;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */

    /**
     * 登录表单
     * @return View
     */
    public function loginForm()
    {
        return view('backend.login');
    }

    /**
     * Laravel 默认使用 email 字段来认证。如果你想使用其他的字段，可以在 LoginController 控制器里面定义一个 username 方法：
     * @return string
     */
    public function username()
    {
        return 'username';
    }

    /**
     * 自定义用户认证和注册的「看守器」
     * @return Guard
     */
    protected function guard()
    {
        return Auth::guard('admin');
    }

    /**
     * 登录成功后的跳转地址
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function redirectTo()
    {
        return '/' . config('app.backend_route_prefix');
    }

    /**
     * Validate the user login request.
     *
     * @param \Illuminate\Http\Request $request
     * @return void
     */
    protected function validateLogin(Request $request)
    {
        $this->validate($request, [
            $this->username() => 'required|string',
            'password' => 'required|string',
            'vercode' => 'required|captcha',
        ], [
            'vercode.required' => '请填写验证码',
            'vercode.captcha' => '验证码错误',
        ]);
    }

    /**
     * Log the user out of the application.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function logout(Request $request)
    {
        $this->guard()->logout();

        $request->session()->invalidate();

        return redirect( config('app.backend_route_prefix').'/login');
    }


}
