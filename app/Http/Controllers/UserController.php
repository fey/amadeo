<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

class UserController extends Controller
{
    //
    public function profile()
    {
        /**@var User $user */
        $user = Auth::user();
        dd($user->toArray());
    }
}
