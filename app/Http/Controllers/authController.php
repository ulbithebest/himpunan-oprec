<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class authController extends Controller
{
    public function registerShow()
    {
        return view ('auth.register');
    }

    public function loginShow()
    {
        return view ('auth.login');
    }
}
