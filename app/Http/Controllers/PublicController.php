<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Log;

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


public function contactUs(Request $request)
{
    $user = $request->input('user'); 
    $email = $request->input('email'); 
    $message = $request->input('message'); 

    $userData = compact('user', 'email', 'message');

    try {
        Mail::to($email)->send(new ContactMail($userData));

        return redirect(route('home'))->with('emailSent', 'Hai inviato una email correttamente');
    } catch (Exception $e) {
        // Logga l'errore reale per capire cosa succede
        Log::error('Errore invio mail: ' . $e->getMessage());

        return redirect(route('home'))->with('emailError', 'Errore durante invio della mail, riprovare');
    }
}

}






