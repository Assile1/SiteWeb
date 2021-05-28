<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Enfant;
class EnfantController extends Controller
{
    //lister les enfants
    public function index(){

    }
    //afficher le formulaire de création d'enfant
    public function create(){
        return view('AdmineCrèche.createEnfant');

    }
    //enregistrer un enfants
    public function store(Request $request){
       return $request->all();
    }
    //permet de récupérer un enfant puis de le mettre dans un formulaire
    public function edit(){

    }
    //permet de modifier un enfant
    public function update(){

    }
    //permet de supprimer un enfant
    public function destroy(){

    }


}
