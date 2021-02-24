<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;

use Illuminate\Support\Facades\Mail;
use App\Mail\MensajeEnviado;

class MailController extends Controller
{
    public function send(Request $request)
    {


            Mail::to('ropeque19@hotmail.com')->send(new MensajeEnviado($request->all()));
            return redirect()->back();
        }

}

