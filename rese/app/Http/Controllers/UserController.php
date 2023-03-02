<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function my_page()
    {
        $user = Auth::user();
        return view('user.my_page', ['user' => $user]);
    }

    public function thanks()
    {
        return view('user.thanks');
    }
}
