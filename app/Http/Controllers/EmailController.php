<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\SendEmails;
use Illuminate\Support\Facades\Mail;
use App\Models\User;

class EmailController extends Controller
{
    public function sendEmails() {
        $users = User::all();

        foreach ($users as $user) {
            $messageContent = "You're invited to the event next week. See you!";
            
            $qrCodeFilename = 'QR_' . $user->name . '.png';

            $qrCodeUrl = asset('storage/attachments/' . $qrCodeFilename);

            Mail::to($user->email)->send(new SendEmails($user->name, $messageContent, $qrCodeUrl));
        }

        return 'Emails Sent Successfully!';
    }
}
