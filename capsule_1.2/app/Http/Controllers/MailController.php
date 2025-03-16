<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class MailController extends Controller
{
    public function sendMail(Request $request)
    {
        Log::info('📩 Received Contact Form Request', ['request_data' => $request->all()]);

        try {
            // ✅ Validate request
            $validated = $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|email',
                'number' => 'required|string|max:15',
                'countries' => 'required|string',
                'message' => 'required|string|max:1000',
            ]);

            Log::info('✅ Validation Passed', ['validated_data' => $validated]);

            // ✅ Setup PHPMailer
            $mail = new PHPMailer(true);
            $mail->isSMTP();
            $mail->Host = 'smtp.hostinger.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'form@capsuleppf.com'; // Change this if necessary
            $mail->Password = 'Troya@9977!@';   // ❗ MOVE THIS TO `.env` FILE
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
            $mail->Port = 465;

            // ✅ Email Headers
            $mail->setFrom($validated['email'], $validated['name']);
            $mail->addAddress("contact@capsuleppf.com");
            $mail->Subject = "New Contact Form Submission";
            $mail->isHTML(true);
            $mail->Body = "
                <h2>New Contact Request</h2>
                <p><strong>Name:</strong> {$validated['name']}</p>
                <p><strong>Email:</strong> {$validated['email']}</p>
                <p><strong>Phone Number:</strong> {$validated['number']}</p>
                <p><strong>Country:</strong> {$validated['countries']}</p>
                <p><strong>Message:</strong></p>
                <p>{$validated['message']}</p>
            ";

            // ✅ Send Email
            $mail->send();
            Log::info('✅ Email Sent Successfully');

            return response()->json(["success" => true, "message" => "Message sent successfully!"]);

        } catch (\Illuminate\Validation\ValidationException $e) {
            Log::error('❌ Validation Failed', ['errors' => $e->errors()]);
            return response()->json(["success" => false, "error" => "Validation failed", "details" => $e->errors()], 422);

        } catch (Exception $e) {
            Log::error('❌ Mail Sending Failed', ['error' => $mail->ErrorInfo]);
            return response()->json(["success" => false, "error" => "Mail sending failed"], 500);
        }
    }
}
