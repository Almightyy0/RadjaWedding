<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller; 

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('Authentication.login');
    }
}