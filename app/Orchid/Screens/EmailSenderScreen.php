<?php

namespace App\Orchid\Screens;

use Orchid\Screen\Link;
use Orchid\Screen\Screen;
use Orchid\Screen\Layout;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Relation;
use Orchid\Screen\Fields\Quill;
use Orchid\Platform\Models\User;
use Illuminate\Http\Request;
use Alert;

class EmailSenderScreen extends Screen
{
    /**
     * Display header name.
     *
     * @var string
     */
    public $name = 'send email';

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
        return [];
    }

    /**
     * Button commands.
     *
     * @return Link[]
     */
    public function commandBar(): array
    {
        return [
            Link::name('Send Message')
                ->icon('icon-paper-plane')
                ->method('sendMessage')
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
            Layout::rows([
                Input::make('subject')
                    ->title('Subject')
                    ->required()
                    ->placeholder('Message subject line')
                    ->help('Enter the subject line for your message'),

                Relation::make('users.')
                    ->title('Recipients')
                    ->multiple()
                    ->required()
                    ->placeholder('Email addresses')
                    ->help('Enter the users that you would like to send this message to.')
                    ->fromModel(User::class, 'name', 'email'),

                Quill::make('content')
                    ->title('Content')
                    ->required()
                    ->placeholder('Insert text here ...')
                    ->help('Add the content for the message that you would like to send.')

            ])->with(70)
        ];
    }
    public function sendMessage(Request $request)
    {
        // Mail::raw($request->get('content'), function (Message $message) use ($request) {

        //     $message->subject($request->get('subject'));

        //     foreach ($request->get('users') as $email) {
        //         $message->to($email);
        //     }
        // });

        Alert::info('Your email message has been sent successfully.');
        return back();
    }
}
