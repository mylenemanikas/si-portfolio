<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Siteinternetmm;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;


class IndexController extends Controller
{

    public function index(Request $request)
    {

        return view('index');
    }
    public function formulaire(Request $request){
        $nom = $request->nom; // title est le name de mon champs
        //                       $request->title<=>$_POST['title']
        $prenom = $request->prenom; //$_POST['description']
        //2eme étape:creation en base de donnée du nouveau film
        $message=$request->message;
        $email=$request->email;

        dump($nom);
        dump($prenom);
        dump($message);
        dump($email);
        exit();

        $siteinternetmm = new Siteinternetmm();



        $siteinternetmm->nom = $nom;
        $siteinternetmm->prenom = $prenom;
        $siteinternetmm->email=$email;
        $siteinternetmm->message=$message;
        $siteinternetmm->save();
        //save() permet de sauvegarder mon objet en base de données
// 3eme étape: redirection...
        //redirection a partir de ma route
        return view('index');
    }


}
