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

        return 'mensaje enviado';
    }
}
