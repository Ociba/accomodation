<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    protected function sendEmail(){
        $data =array('name' =>"Ociba James", "body"=>"Testing Email Sending");
        
        Mail::send('mail',$data, function($message){
            $message->to('ocibajames@gmail.com','JJoome Admin')
            ->subject('JJOOME WEB TESTING MAIL');
            $message ->from('jjoome@gmail.com', 'JJOOME');
        });
        return view('mail');
    }
}
