<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Log; 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class MailController extends Controller
{
    public function sendMail(Request $request)
    {
        Log::info('Received Contact Form Request', ['request_data' => $request->all()]);
    
        try {
            $validated = $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|email',
                'number' => 'required|string|max:15',
                'countries' => 'required|string', // Change 'country' to 'countries'
                'message' => 'required|string|max:1000',
            ]);
            
    
            Log::info('Validation passed', ['validated_data' => $validated]);
    
            $mail = new PHPMailer(true);
            $mail->isSMTP();
            $mail->Host = 'smtp.hostinger.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'form@capsuleppf.com';
            $mail->Password = 'Troya@9977!@#geklas';  // ❌ Move this to ENV file for security
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
            $mail->Port = 465;
    
            $mail->setFrom($validated['email'], $validated['name']);
            $mail->addAddress("contact@capsuleppf.com");
            $mail->Subject = "New Contact Form Submission";
            $mail->isHTML(true);
            $mail->Body = "
                <h2>New Contact Request</h2>
                <p><strong>Name:</strong> {$validated['name']}</p>
                <p><strong>Email:</strong> {$validated['email']}</p>
                <p><strong>Phone Number:</strong> {$validated['number']}</p>
                <p><strong>Country:</strong> {$validated['country']}</p>
                <p><strong>Message:</strong></p>
                <p>{$validated['message']}</p>
            ";
    
            $mail->send();
            Log::info('Email sent successfully');
    
            return response()->json(["success" => true, "message" => "Message sent successfully!"]);
        } catch (\Illuminate\Validation\ValidationException $e) {
            Log::error('Validation Failed', ['errors' => $e->errors()]);
            return response()->json(["success" => false, "error" => "Validation failed", "details" => $e->errors()], 422);
        } catch (Exception $e) {
            Log::error('Mail Sending Failed', ['error' => $mail->ErrorInfo]);
            return response()->json(["success" => false, "error" => "Mail sending failed"], 500);
        }
    }
    
}
