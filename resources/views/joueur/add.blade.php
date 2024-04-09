@extends('layouts.app')
@section('content')
<div class="site-section bg-dark">
  <div class="col-lg-2">
  </div>
    <div class="col-lg-8">
        <div>
            <div class="card-body"><a href='liste'> <button class="btn btn-success">Liste</button></a>
                <h5 class="card-title">Ajouter nouveau Joueur</h5>


 <form action="action_add" method="POST"class="row g-3">
@csrf
<div class="col-md-6">
   <label for="inputEmail1" class="form-label">Nom</label>
                        <input type="text" class="form-control" placeholder='nom'name='nom' id="inputEmail1">
                    </div>
<div class="col-md-6">
   <label for="inputEmail2" class="form-label">Prenom</label>
                        <input type="text" class="form-control" placeholder='prenom'name='prenom' id="inputEmail2">
                    </div>
<div class="col-md-6">
   <label for="inputEmail3" class="form-label">Dtn</label>
                        <input type="date" class="form-control" placeholder='dtn'name='dtn'  id="inputEmail3">
                    </div>
<div class="col-md-6">
   <label for="inputEmail4" class="form-label">Taille</label>
                        <input type="number" placeholder='taille'name='taille' class="form-control" id="inputEmail4">
                    </div>
<div class="col-md-6">
   <label for="inputEmail5" class="form-label">Profil</label>
                        <input type="text" class="form-control" placeholder='profil'name='profil' id="inputEmail5">
                    </div>
<div class="col-md-6">
   <label for="inputEmail6" class="form-label">NbButs</label>
                        <input type="number" placeholder='nbbuts'name='nbbuts' class="form-control" id="inputEmail6">
                    </div>
<div class="col-md-6">
   <label for="inputEmail7" class="form-label">IdNationalite</label>
                        <select id="inputState" name='idnationalite' class="form-control">\n" 
@foreach($nationalite as $row)
 <option value='<?php echo $row->id ?>' ><?php echo $row->designation ?></option>
 

@endforeach
</select></div>
<div class="col-md-6">
   <label for="inputEmail8" class="form-label">IdClubTeam</label>
                        <select id="inputState" name='idclubteam' class="form-control">\n" 
@foreach($clubTeam as $row)
 <option value='<?php echo $row->id ?>' ><?php echo $row->nom ?></option>
 

@endforeach
</select></div>
<div class="col-md-6">
   <label for="inputEmail9" class="form-label">IdNationalTeam</label>
                        <select id="inputState" name='idnationalteam' class="form-control">\n" 
@foreach($nationalTeam as $row)
 <option value='<?php echo $row->id ?>' ><?php echo $row->nom ?></option>
 

@endforeach
</select></div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <button type="reset" class="btn btn-secondary">Reset</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>

 @endsection
