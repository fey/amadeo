<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Services\AccountManager;
use Illuminate\Http\Request;
use App\Gamedata\Account;
use App\Http\Requests\Accounts\CreateAccountRequest;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class AccountController extends Controller
{
    public function store(CreateAccountRequest $request, AccountManager $accountManager)
    {
        $accountManager->createAccount(
            $request->login,
            $request->password
        );

        return back();
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function new()
    {
        $this->user();
        return view('accounts.new');
    }

    public function index()
    {
        $accounts = Account::all();
        dump($accounts->toArray());
        return $accounts->toJson();
    }

    public function show()
    {
        throw new NotFoundHttpException();
    }
}
