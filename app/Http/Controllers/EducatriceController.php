<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EducatriceController extends Controller
{
    //
    //lister les enfants
    public function index(){

    }
    //afficher le formulaire de création d'enfant
    public function create(){
        return view('');

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
