<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;

class IndexController extends Controller {

    public function index(Request $request) {

        return view('index');
    }

    public function formulaire(Requests\UserRequests $request) {
        $nom = $request->nom;
        $prenom = $request->prenom; 
        $message= $request->message;
        $email = $request->email;

        Mail::send('email/contact', [
            'nom' => $nom,
            'prenom' => $prenom,
            'email' => $email,
            'mess' => $message,
                ], function($m) use ($nom, $prenom, $message, $email){
        
            /*$message->subject('Un nouveau contact!');*/
            var_dump($m);
            $m->from($email, $nom);
            $m->to('mylene.manikas@gmail.com')->subject('un nouveu message!');
            
        });


        return Redirect::route('index');
    }

}
