<?php
/**
 * Created by PhpStorm.
 * User: wal20
 * Date: 11/03/16
 * Time: 09:44
 */

namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;

class UserRequests extends FormRequest
{
    /**
     * @return array
     * Création de validateur par champs
     */
    public function rules()
    {
        return [
            'nom' => 'required|min:2',
            'prenom' => 'required|min:2',
            'email' =>'required|min:2|max:100',
            'message' => 'required|min:2',
        ];
    }

    /**
     * Personnalise chaque message d'erreur
     *
     */
    public function messages()
    {
        return[
            'nom.required'=>'le prenom est obligatoire',
            'prenom.required'=>'le prenom est obligatoire',
            'email.required'=>'le mail est obligatoire',
            'message.required'=>'le message est obligatoire',
            'nom.min'=>'le nom est trop court',
            'nom.max'=>'le nom est trop long',
            'email.min'=>'le mail est trop longue',
            'email.max'=>'le mail est trop court',
            'prenom.min'=>'le prenom est trop court',
            'prenom.max'=>'le prenom est trop long',
            'message.min'=>'le message est trop court',
            'message.max'=>'le message est trop long',
        ];
    }
    public function authorize(){
        return true;
    }
}