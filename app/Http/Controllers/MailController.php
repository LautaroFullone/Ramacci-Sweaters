<?php

namespace App\Http\Controllers;

use App\Mail\MensajeEnviado;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;



class MailController extends Controller
{
    public function send (Request $request)
    {
        $name=$request->input('name');
        $mail=$request->input('email');
        $phone=$request->input('phone');
        $body=$request->input('body');

        $mensaje=['name' => $name,
                    'mail'=>$mail,
                    'phone'=>$phone,
                    'body'=>$body,
                ];

        Mail::to('ropeque19@hotmail.com')->send(new MensajeEnviado($mensaje));
        Mail::send('Html.view', $data, function ($message) {
            $message->from('john@johndoe.com', 'John Doe');
            $message->sender('john@johndoe.com', 'John Doe');
            $message->to('john@johndoe.com', 'John Doe');
            $message->cc('john@johndoe.com', 'John Doe');
            $message->bcc('john@johndoe.com', 'John Doe');
            $message->replyTo('john@johndoe.com', 'John Doe');
            $message->subject('Subject');
            $message->priority(3);
            $message->attach('pathToFile');
        });
        return 'mensaje enviado';


    }
}
