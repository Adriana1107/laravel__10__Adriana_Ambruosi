<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Mail\contactMail;

use Illuminate\Http\Request;

use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\articleRequest;
use Exception;

 class PublicController extends Controller
{
    public function welcome(){
        return view('welcome');
    }




    public function contactUs(Request $request){

        $user = $request->input('user'); 
        $email = $request->input('email'); 
        $message = $request->input('message'); 
        $userData = compact('user', 'email', 'message');
        
        try{
            Mail::to($email)->send(new ContactMail($userData));
        }catch(Exception $e){
            return redirect(route('home'))->with('emailError', 'errore durante invio della mail, riprovare');
        }

    return redirect(route('home'))->with('emailSent', 'Hai inviato una email correttamente');

    }


   

}





