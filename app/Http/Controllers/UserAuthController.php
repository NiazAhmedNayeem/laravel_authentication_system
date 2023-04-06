<?php

namespace App\Http\Controllers;

use App\Models\People;
use Illuminate\Http\Request;
use Session;

class UserAuthController extends Controller
{
    private $user;

    public function index()
    {
        return view('user.auth.login');
    }
    public function login(Request $request)
    {
        $this->user = People::where('email', $request->email)->first();
        if ($this->user)
        {
            if (password_verify($request->password, $this->user->password))
            {
                if ($this->user->status == 1)
                {
                    Session::put('id', $this->user->id);
                    Session::put('name', $this->user->name);

                    return redirect('/user/dashboard');
                }
                else
                {
                    return redirect('/user/login')->with('message', 'You are not eligible for login. Please contact with Admin. Thank you.');
                }
            }
            else
            {
                return redirect()->back()->with('message', 'Sorry .. password is not invalid.');
            }
        }
        else
        {
            return redirect()->back()->with('message', 'Sorry .. email address is not invalid.');
        }
    }

    public function register()
    {
        return view('user.auth.register');
    }
    public function userRegister(Request $request)
    {
        People::registerUser($request);
        return redirect('/user/login')->with('message', 'Register successful, Please wait for Admin Approval. Thank you.');
    }
    public function logout()
    {
        Session::forget('id');
        Session::forget('name');

        return redirect('/user/login');
    }
}
