<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Services\AccountManager;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function store(AccountManager $accountManager, Request $request)
    {
        $accountData = $request->validate([
            'account.login' => 'required|unique|min:6|max:45',
            'account.password' => 'required|min:6|max:45',
        ]);

        dd($accountData);
    }
}
