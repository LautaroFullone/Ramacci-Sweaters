<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;

class MailController extends Controller
{
    public function send(Request $request)
    {
        // Instantiation and passing `true` enables exceptions
        $mail = new PHPMailer(true);

        try {
            //Server settings
            $mail->SMTPDebug = 0; // Enable verbose debug output
            $mail->isSMTP(); // Send using SMTP
            $mail->Host = 'smtp.gmail.com'; // Set the SMTP server to send through
            $mail->SMTPAuth = true; // Enable SMTP authentication
            $mail->Username = $request->input('email'); // SMTP username
            $mail->Password = $request->input('password'); // SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
            $mail->Port = 587; // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

            //Recipients
            $mail->setFrom($request->input('email'), $request->input('name'));
            $mail->addAddress('ropeque19@hotmail.com', 'ropeque'); // Add a recipient
            // Name is optional

            // Content
            $mail->isHTML(true); // Set email format to HTML
            $mail->Subject = 'Pregunta sobre un producto';
            $mail->Body = $request->input('body');

            $mail->send();
            echo 'El mensaje se envio correctamente';
        } catch (Exception $e) {
            echo "Hubo un error al enviar el mail:  {$mail->ErrorInfo}";
        } finally {
            $id = $request->input('id');
            // Mail::to('ropeque19@hotmail.com')->send(new MensajeEnviado($mensaje));

            return redirect()->back();
        }

    }
}
