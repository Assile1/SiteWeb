@extends('layouts.app')
@section('content')
  

   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <form action="{{ url('enfant') }}" method="POST">
               {{ csrf_field('') }}
               <div class="form-group">
                  <label for="">Photo</label>
               <input type="text" name="Photo" class="form-control">
                 @csrf  

@method('GET')
            </div>
               <div class="form-group">
                  <label for="">Nom</label>
               <input type="text" name="Nom" class="form-control">
            </div>
               
               <div class="form-group">
                  <label for="">Prènom</label>
               <input type="text" name="Prènom" class="form-control">
            </div>
            <div class="form-group">
                  <label for="">Date_de_naissance</label>
               <input type="text" name="Date_de_naissance" class="form-control">
            </div>
            <div class="form-group">
                  <label for="">Sexe</label>
               <input type="text" name="Sexe" class="form-control">
            </div>
            <div class="form-group">
                  <label for="">Adresse</label>
               <input type="text" name="Adresse" class="form-control">
            </div>
            <div class="form-group">
                  <label for="">Groupe_ sanguin</label>
               <input type="text" name="Groupe_ sanguin" class="form-control">
            </div>
            <div class="form-group">
                  <label for="">Vaccin</label>
               <input type="text" name="Vaccin" class="form-control">
            </div>
            <div class="form-group">
                  <label for="">Maladie</label>
               <input type="text" name="Maladie" class="form-control">
            </div>
            <div class="form-group">
                  <label for="">Régime_ spéciale</label>
               <input type="text" name="Régime_ spéciale" class="form-control">
            </div>
            <div class="form-group">
                  <label for="">Cas_ particulier</label>
               <input type="text" name="Cas_ particulier" class="form-control">
            </div>
            
            
                  
               <input type="submit" name="" class="form-control btn btn-parimary" value="Enregistrer">
            </div>
          

            </form>

         </div>
      </div>
   </div>   



@endsection