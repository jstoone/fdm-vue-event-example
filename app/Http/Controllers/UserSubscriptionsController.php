<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserSubscriptionsController extends Controller
{
    public function index()
    {
        $user = auth()->user();

        if (! $user) {
            $user = User::first();
            auth()->login($user);
        }

        $user->load([
            'podcasts',
            'fruits',
            'keyboards',
        ]);

        return $user;
    }
}
