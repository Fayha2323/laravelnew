<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return User::get();
        return view('login');
    }
    public function actionLogin(Request $request)
    {
        $email = $request->email;
        $user = User::where('email', $email)->first();

        // password_verify()
        // utk password yang di hash dan tidak di hash
        if (password_verify($request->password, $user->password)) {
            return "Login sukses";
        } else {
            return "login gagal";
        }
    }
}
