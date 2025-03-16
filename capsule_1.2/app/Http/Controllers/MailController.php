<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class MailController extends Controller
{
    public function sendMail(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'number' => 'required|string|max:15',
            'country' => 'required|string',
            'message' => 'required|string|max:1000',
        ]);

        try {
            $mail = new PHPMailer(true);
            $mail->isSMTP();
            $mail->Host = 'smtp.hostinger.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'form@capsuleppf.com';
            $mail->Password = 'Troya@9977!@#geklas'; // Ensure to use environment variables for security
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
            $mail->Port = 465;

            $mail->setFrom($request->email, $request->name);
            $mail->addAddress("contact@capsuleppf.com");
            $mail->Subject = "New Contact Form Submission";
            $mail->isHTML(true);
            $mail->Body = "
                <h2>New Contact Request</h2>
                <p><strong>Name:</strong> {$request->name}</p>
                <p><strong>Email:</strong> {$request->email}</p>
                <p><strong>Phone Number:</strong> {$request->number}</p>
                <p><strong>Country:</strong> {$request->country}</p>
                <p><strong>Message:</strong></p>
                <p>{$request->message}</p>
            ";

            $mail->send();
            return response()->json(["success" => true, "message" => "Message sent successfully!"]);
        } catch (Exception $e) {
            return response()->json(["success" => false, "error" => $mail->ErrorInfo]);
        }
    }
}
