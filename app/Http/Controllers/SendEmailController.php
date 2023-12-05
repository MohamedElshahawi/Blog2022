<?php

namespace App\Http\Controllers;

use App\Mail\BlogMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\EmailDemo;
use Symfony\Component\HttpFoundation\Response;

class SendEmailController extends Controller
{
    public function sendEmail(Request $request) {


     $data= [
        'name' => $request->name,
        'email' => $request->email,
        'message' => $request->message

     ];
             Mail::to('receiver@gmail.com')->send(new BlogMail($data));
             return 'thank for reaching out';





    }
}
