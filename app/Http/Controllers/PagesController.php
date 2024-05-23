<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function aboutUs(){
        return view('pages.about-us');
    }


    public function contact(){
        return view('pages.contact');
    }


    public function faqs(){
        return view('pages.faqs');
    }


    public function privacy(){
        return view('pages.privacy');
    }


    public function blog(){
        return view('pages.blog');
    }

    public function service(){
        return view('pages.service');
    }

    public function blogSingle(){
        return view('pages.blog-single');
    }


    public function home(){
        $email = auth()->user()->email;
        return view('home', compact('email'));
    }
    

    public function applyNow()
{
    $temporaryIdentifier = 'temp_' . rand(100000, 999999); // Generate the temporary identifier
    
    return view('pages.apply-now', ['temporaryIdentifier' => $temporaryIdentifier]);
}


    public function welcome(){
        return view('pages.welcome');

        
    }

   
}