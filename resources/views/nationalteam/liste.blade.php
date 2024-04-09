@extends('layouts.app')
@section('content')
    <div class="site-section bg-dark">
        
        <div class="card-body"><a href='add'> <button class="btn btn-success">Ajouter nouveau</button></a>

            <h3>Liste NationalTeam</h3>
            <div class="table-responsive pt-3">
                <table class="table table-striped" border="1">
<tr>
<th>Nom</th>
<th>Profil</th>
<th>Code</th>
<th>IdNationalite</th>

</tr>

  

 @foreach($liste as $row)
<tr>
<td><?php echo $row->nom; ?></td>
<td><?php echo $row->profil; ?></td>
<td><?php echo $row->code; ?></td>
<td><?= \App\Models\Nationalite::find($row->idnationalite)->designation?></td>
<td>  
                        <button type="button" class="btn btn-success mb-2" data-bs-toggle="modal"
                            data-bs-target="#basicModal<?php echo $row->id?>">Modif</button>
                        
                    </td>
                    <div class="modal fade" id="basicModal<?php echo $row->id?>">
                        <div class="modal-dialog  modal-md" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Modification</h5>
                                </div>
                                <div class="modal-body">



 <form action="action_update" method="GET"class="row g-3">
<div class="col-md-6">
   <label for="inputEmail1" class="form-label">Nom</label>
                        <input type="text" class="form-control" placeholder='nom'name='nom' value=<?=$row->nom ?> >
                    </div>
<div class="col-md-6">
   <label for="inputEmail2" class="form-label">Profil</label>
                        <input type="text" class="form-control" placeholder='profil'name='profil' value=<?=$row->profil ?> >
                    </div>
<div class="col-md-6">
   <label for="inputEmail3" class="form-label">Code</label>
                        <input type="text" class="form-control" placeholder='code'name='code' value=<?=$row->code ?> >
                    </div>
<div class="col-md-6">
   <label for="inputEmail4" class="form-label">IdNationalite</label>
                        <select id="inputState" name='idnationalite' class="form-select">\n" 
<?php foreach(\App\Models\Nationalite::all() as $data)
{?> <option value='<?php echo $data->id ?>' ><?php echo $data->designation ?></option>
 

<?php } ?>
</select></div>
                        <input type="hidden" class="form-control" name='id' value='<?=$row->id  ?>'/>                    
              </div>  
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-danger light"
                                                data-bs-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Save changes</button>
                                        </div>
                                    </form>

                                </div>
</td><td>  
                        <button type="button" class="btn btn-danger mb-2" data-bs-toggle="modal"
                            data-bs-target="#bbasicModal<?php echo $row->id?>">Supprimer</button>
                        
                    </td>
                    <div class="modal fade" id="bbasicModal<?php echo $row->id?>">
                        <div class="modal-dialog  modal-md" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Suppression</h5>
                                </div>
                                <div class="modal-body">



 <form action="supprimer" method="GET"class="row g-3">
<p style='font-size:28px'>Confirmation de la suppression!</p>                        <input type="hidden" class="form-control" name='id' value='<?=$row->id  ?>'/>                    
              </div>  
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-primary light"
                                                data-bs-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-danger">Supprimer</button>
                                        </div>
                                    </form>

                                </div>
</td>
</tr>
@endforeach
</table>

                {{ $liste->links() }}

            </div>

        </div>
    </div>
@endsection
