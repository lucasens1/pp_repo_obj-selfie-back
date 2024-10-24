<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailTestController extends Controller
{
    // Test
    public function sendTestEmail(){
        $data = ['message' => '1'];

        Mail::send('emails.test', $data, function($message){
            $message->to('pippo@gmail.com', 'Pippo')->subject('Email di Prova');
            $message->from('pippo1@gmail.com', 'Pippo1');
        });

        return 'Mail inviata';
    }
}
