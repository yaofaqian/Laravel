<?php

namespace App\Http\Controllers\Backend;
use Illuminate\Support\Facades\View;
use App\Http\Controllers\CommonController;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
class LoginController extends CommonController
{
    /**
     * [用户登录页面]
     * @param  [number] $id [id]
     * @author 姚发前
     * @throws Exception
     * @access public
     * @return [json]     [data]
     */
    public function index()
    {
        return view('backend.login.index');
    }
    /**
     * [用户登录]
     * @param  [number] $id [id]
     * @author 姚发前
     * @throws Exception
     * @access public
     * @return [json]     [data]
     */
    public function login()
    {
        $errorvalidate = $this->validate(
            request(),
            [
                'email' => 'required|email',
                'password' => 'required',
                'is_remember' => 'integer',
            ],
            [
               'email.required' => '邮箱不得为空',
               'email.email' => '邮箱格式不正确',
               'password.required' => '密码不可为空',
            ]
        );
        $user = \request(['email','password']);
        $is_remember = \request('is_remember');
        if(\Auth::attempt($user,$is_remember))
        {
            return redirect('/');
        }
    }
    /**
     * [用户退出]
     * @param  [number] $id [id]
     * @author 姚发前
     * @throws Exception
     * @access public
     * @return [json]     [data]
     */
    public function logout()
    {
        \Auth::logout();
        return redirect('/login');
    }
}
