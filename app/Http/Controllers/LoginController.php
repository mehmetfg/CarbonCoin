<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //
    use Authorizable;

    public function index()
    {
        return view("auth.other.login");
    }
    public function authenticate(Request $request)
    {




        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Authentication passed...
            // use the below code to redirect the user to dashboard.
            // return redirect()->intended('dashboard');
            return redirect("/")->with("success", __("labels.Giriş İşlemi Başarılı"));
        }else
        {
            return  back()->with('status', "Hatalı Kullanıcı Adı veya Şifre");
        }


    }
    public function logout()
    {
        Auth::logout();
        session()->flush();
        return redirect("/login");
    }
}
