<?php

namespace App\Http\Controllers;

use App\Mail\TestMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


class MailController extends Controller
{
    // public function __construct(Request $request)
    // {
    //     $this->request = $request;
    // }
    // public function getForm(){
    //     return view('contacts.index');
    // }
    
    public function handleRequest(Request $request){
        // nhan het du lieu co trong form
        $email = $request->get('email');
        $name = $request->get('name');
        $message = $request->get('message');
        $mail = [
                'name' =>$name,
                'email'=>$email,
                'message' =>$message
            ];
        Mail::to("lamsungcamdao@gmail.com")->send(new TestMail($mail));
        return redirect()->route('contacts',parameters:['ok' => 1]);
    }
}
