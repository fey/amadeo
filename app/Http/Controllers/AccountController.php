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
            'login' => 'required|min:6|max:45',
            'password' => 'required|min:6|max:45|confirmed|different:login',
        ]);
        $account = $accountManager->createAccount($request->login, $request->password);
        $accountManager->saveAccount($account);

        return response()->redirectTo('/');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function new()
    {
        return view('accounts.new');
    }
}
