<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class LoginSwitcherController extends Controller
{
    public function login(User $user) {
        auth()->login($user);

        return redirect()->back();
    }
}
