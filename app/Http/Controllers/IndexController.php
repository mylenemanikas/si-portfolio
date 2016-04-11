<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;


class IndexController extends Controller
{

    public function index(Request $request)
    {

        return view('index');
    }
    public function formulaire(Requests\UserRequests $request){
        $nom = $request->nom; // title est le name de mon champs
        //                       $request->title<=>$_POST['title']
        $prenom = $request->prenom; //$_POST['description']
        //2eme étape:creation en base de donnée du nouveau film
        $message=$request->message;
        $email=$request->email;

        /*dump($nom);
        dump($prenom);
        dump($message);
        dump($email);
        exit();*/
        // envoi de mail
        Mail::send('email/contact',[
            'nom'=>$nom,
            'prenom'=>$prenom,
            'email'=>$email,
            'mess'=>$message,
        ], function ($message){
            $message->subject('Un nouveau contact!');
            $message->from("marie.garcia@gmail.com","Garcia");
            $message->to('mylene.manikas@gmail.com');
        });
        return Redirect::route('index');

    }


}
