<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jobs\SendEmailJob;
use Illuminate\Support\Facades\Log;


class EmailController extends Controller
{
    public function sendEmails()
    {
        $emails = ['test@gmail.com', 'test2@gmail.com', 'test3@gmail.com', 'test4@gmail.com', 'test5@gmail.com', 'test6@gmail.com'];

        foreach ($emails as $email) {
            SendEmailJob::dispatch($email);
        }
        return response()->json(['message' => 'Emails are being processed!']);
    }
}
