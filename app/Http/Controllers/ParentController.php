<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Parent;
class ParentController extends Controller
{
    //
      public function index(){

    }
    //afficher le formulaire de création du parent
    public function create(){
        return view ('parent.createParent');

    }
    //enregistrer un parent
    public function store(Request $request){
       return $request->all();
    }
    //permet de récupérer un parent puis de le mettre dans un formulaire
    public function edit(){

    }
    //permet de modifier un parent
    public function update(){

    }
    //permet de supprimer un parent
    public function destroy(){

    }
}
