<?php

namespace App\Services\email;

use App\Models\User;

class EmailService
{
    public function sendEmail($user_info, $token) {
        $body = array(
            'action_link' => base_url(route_to('auth.get-change-password-view', $token)),
            'user' => $user_info,
        );

        $view = \Config\Services::renderer();
        $mail_body = $view->setVar('mail_data',$body)->render('email/template-reset-password');

        $emailConfig = [
            'mail_from' => env('EMAIL_FROM_ADDRESS'),
            'mail_from_name' => env('EMAIL_FROM_NAME'),
            'mail_receipt_email' => $user_info['email'],
            'mail_receipt_name' => $user_info['name'],
            'mail_subject' => 'Reset Password',
            'mail_body' => $mail_body
        ];
        dd($mail_body);
        send($emailConfig);
    }
}