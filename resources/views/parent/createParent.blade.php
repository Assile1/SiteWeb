@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<form action="url('parent')" method="POST">  
         {{ csrf_field('') }}  
               <div class="form-group">
                  <label for="">Photo</label>
               <input type="text" name="Photo" class="form-control">
           </div>
            @csrf  

@method('GET')
            <div class="form-group">
                  <label for="">Nom</label>
               <input type="text" name="Nom" class="form-control">
           </div>
           <div class="form-group">
                  <label for="">Prènom</label>
               <input type="text" name="Prènom" class="form-control">
            </div>
                  <label for="">Adresse</label>
               <input type="text" name="Adresse" class="form-control">
            </div>
            <div class="form-group">
                  <label for="">N°Tel</label>
               <input type="text" name="N°Tel" class="form-control">
            </div>
            <div class="form-group">
                  <label for="">Email</label>
               <input type="text" name="Email" class="form-control">
            </div>
            <div class="form-group">
                  <label for="">Nom_Autre_Rèsponsable</label>
               <input type="text" name="Nom_Autre_Résponsable" class="form-control">
            </div>
            <div class="form-group">
                  <label for="">Prènom_Autre_Rèsponsable</label>
               <input type="text" name="Prènom_Autre_Résponsable" class="form-control">
            </div>
            
            <div class="form-group">
                  <label for="">Profession</label>
               <input type="text" name="Profession" class="form-control">
            </div>
            <div class="form-group">
                  <label for="">Date_Publication</label>
               <input type="text" name="datepublish" class="form-control">
            </div>
            <div class="form-group">
                  
               <input type="submit" name="" class="form-control btn btn-parimary" value="Enregistrer">
            </div>
          
           </form>
		</div>
	</div>
</div>




@endsection