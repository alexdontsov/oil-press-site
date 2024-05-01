<?php

declare(strict_types=1);

namespace App\Http\Controllers;
use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use View as ViewShare;
use Illuminate\View\View;

class ContactPageController extends Controller
{
    public function __invoke(Request $request): View | Response
    {
        $title = 'Контакты';
        ViewShare::share('title', $title);

        if ($request->isMethod('post'))
        {
            Message::create(
                [
                    'name' => $request->request->get('name'),
                    'email' => $request->request->get('email'),
                    'message' => $request->request->get('msg_subject'),
                    'body' => $request->request->get('message'),
                ]
            );

            return new Response('Ваше сообщение успешно отправлено!');
        }

        return view('contact', []);
    }
}
