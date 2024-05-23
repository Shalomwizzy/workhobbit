<?php

namespace App\Http\Controllers;

use App\Events\UserRegistered;
use App\Mail\AdminContactMail;
use App\Mail\ContactMail;
use App\Mail\ContactMailResponse;
use App\Models\User;
use App\Notifications\SendEmailToAllUsers;
use Illuminate\Http\Request;
use RegistersUsers;

use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\View;

class EmailsController extends Controller
{

    public function sendContactMail(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|string|email',
            'message' => 'required|string',
            'subject' => 'nullable|string',
        ]);
    
        $data = [
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'subject' => $request->input('subject'),
            'message' => $request->input('message'),
           
        ];
    
    
      
        Mail::to('support@workhobbit.com')->send(new ContactMail($data));
    

        $this->sendAutomaticResponse($data);
    
        return back()->with('success', 'Mail has been sent successfully. We will get in touch with you soon.');
    }
    
    
    public function sendAutomaticResponse(array $data)
    {
        Mail::to($data['email'])->send(new ContactMailResponse($data));
    }


}
