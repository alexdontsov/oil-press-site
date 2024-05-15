<?php

declare(strict_types=1);

namespace App\Http\Controllers;
use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ProductInfoFormController extends Controller
{
    public function __invoke(Request $request): Response
    {
        Message::create(
            [
                'name' => $request->request->get('phone'),
                'email' => $request->request->get('email'),
                'message' => $request->request->get('product'),
                'body' => $request->request->get('product'),
            ]
        );

        return new Response('Ваше сообщение успешно отправлено!');
    }
}
