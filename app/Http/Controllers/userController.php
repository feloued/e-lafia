<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class userController extends Controller
{

    public function index()
    {
        return view('user.inscription');
    }
    public function inscrire(request $request)
    {

        //on teste si l'utilisateur est deja inscrit

       $user=User::where('email',$request->email)->first();
       if($user)
       {
           return back()->with('message','Vous etes deja inscrit');
       }

       //dans le cas contraire cest un nouveau
       else{
           $user=new User();
           $user->nom = $request->nom;
           $user->prenom = $request->prenom;
           $user->genre = $request->genre;
           $user->dateNaiss = $request->dateNaiss;
           $user->paysOrigine = $request->paysOrigine;
           $user->lieuNaiss = $request->lieuNaiss;
           $user->specialite = $request->specialite;
           $user->nom_structure = $request->nom_structure;
           $user->email = $request->email;
           $user->password = Hash::make($request->password) ;
           $user->save(); //cela equivaut a un insert dans la base
           return back();
       }



    }
}
