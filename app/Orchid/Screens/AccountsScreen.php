<?php

namespace App\Orchid\Screens;

use Exception;
use Alert;
use App\Gamedata\Account;
use App\Http\Requests\Accounts\CreateAccountRequest;
use App\Orchid\Layouts\AccountsLayout;
use App\Services\AccountManager;
use Orchid\Screen\AsSource;
use Orchid\Screen\Fields\Button;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Layout;
use Orchid\Screen\Link;
use Orchid\Screen\Screen;

class AccountsScreen extends Screen
{
    use AsSource;
    /**
     * Display header name.
     *
     * @var string
     */
    public $name = 'Accounts';

    /**
     * Display header description.
     *
     * @var string
     */
    public $description = 'Description';

    /**
     * Query data.
     *
     * @return array
     */
    public function query(): array
    {
        return [
            'accounts' => Account::paginate(10),
        ];
    }

    /**
     * Button commands.
     *
     * @return Link[]
     */
    public function commandBar(): array
    {
        return [
            Link::name('Create new Account')
                ->icon('icon-plus')
                ->modal('createAccountModal')
        ];
    }

    /**
     * Views.
     *
     * @return Layout[]
     */
    public function layout(): array
    {
        return [
            Layout::modal('createAccountModal', [
                Layout::rows([
                    Input::make('login')
                        ->type('text')
                        ->max(45)
                        ->required()
                        ->title('Login')
                        ->help('Login Account'),
                    Input::make('password')
                        ->type('password')
                        ->max(45)
                        ->required()
                        ->title('password')
                        ->help('password Account'),
                    Input::make('password_confirmation')
                        ->type('password')
                        ->max(45)
                        ->required()
                        ->title('password_confirmation')
                        ->help('password_confirmation'),
                ]),
            ]),
            AccountsLayout::class,

        ];
    }

    public function createAccount(CreateAccountRequest $request, AccountManager $accountManager)
    {
        // dd($request->all());
        try {
            $accountManager->createAccount($request->login, $request->password);
        } catch (Exception $e) {
            Alert::error($e->getMessage());
        }

        return back();
    }
}
