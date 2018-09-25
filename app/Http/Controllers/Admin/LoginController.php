<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\Admin\LoginRequest;
use Validator;
use Auth;
use Illuminate\Support\MessageBag;

class LoginController extends BaseController
{
    /**
     * @param LoginRequest $request
     * @return RedirectResponse
     */
    public function getLogin() {
        return view('admin.home.login');
    }

    public function postLogin(LoginRequest $request) {
//        $rules = [
//            'email' =>'required|email',
//            'password' => 'required|min:6'
//        ];
//        $messages = [
//            'email.required' => 'Email là trường bắt buộc',
//            'email.email' => 'Email không đúng định dạng',
//            'password.required' => 'Mật khẩu là trường bắt buộc',
//            'password.min' => 'Mật khẩu phải chứa ít nhất 6 ký tự',
//        ];
//
//        $validator = Validator::make($request->all(), $rules, $messages);
//
//        if ($validator->fails()) {
//            return redirect()->back()->withErrors($validator)->withInput();
//        } else {
//            $email = $request->input('email');
//            $password = $request->input('password');
//
//            if( Auth::attempt(['email' => $email, 'password' =>$password])) {
//                return redirect()->intended('/admin/dashboard');
//            } else {
//                $errors = new MessageBag(['errorlogin' => 'Email hoặc mật khẩu không đúng']);
//                return redirect()->back()->withInput()->withErrors($errors);
//            }
//        }
        $email = $request->input('email');
        $password = $request->input('password');

        if( Auth::attempt(['email' => $email, 'password' =>$password])) {
            return redirect()->intended('/admin/dashboard');
        } else {
            $errors = new MessageBag(['errorlogin' => 'Email hoặc mật khẩu không đúng']);
            return redirect()->back()->withInput()->withErrors($errors);
        }
    }

    public function getLogout()
    {
        Auth::logout();
        return redirect()->to('admin/login');
    }

}