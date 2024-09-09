<?php

namespace App\Http\Controllers;

use App\Mail\SendEmails;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    public function sendEmails() {
        $users = User::all();

        foreach ($users as $user) {
            $messageContent = "You're invited to the event next week. See you!";

            $attachmentFilename = 'QR_' . $user->name . '.png';
            $attachmentPath = public_path('storage/attachments/' . $attachmentFilename);

            if (file_exists($attachmentPath)) {
                Mail::to($user->email)->send(new SendEmails($user->name, $messageContent, $attachmentPath));
            } else {
                return "Attachment for {$user->name} does not exist.";
            }

            Mail::to($user->email)->send(new SendEmails($user->name, $messageContent, $attachmentPath));
        }

        return 'Emails Sent Successfully!';
    }
}
