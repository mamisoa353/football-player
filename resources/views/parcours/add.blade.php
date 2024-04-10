@extends('layouts.app')
@section('content')
    <div class="site-section bg-dark">
        <div class="col-lg-2">
        </div>
        <div class="col-lg-8">
            <div>
                <div class="card-body"><a href='liste'> <button class="btn btn-success">Liste</button></a>
                    <h5 class="card-title">Ajouter nouveau Parcours</h5>


                    <form action="action_add" method="POST"class="row g-3">
                        @csrf
                        <div class="col-md-6">
                            <label for="inputEmail1" class="form-label">DateDebut</label>
                            <input type="date" class="form-control" placeholder='datedebut'name='datedebut'
                                id="inputEmail1">
                        </div>
                        <div class="col-md-6">
                            <label for="inputEmail2" class="form-label">DateFin</label>
                            <input type="date" class="form-control" placeholder='datefin'name='datefin' id="inputEmail2">
                        </div>
                        <div class="col-md-6">
                            <label for="inputEmail3" class="form-label">IdClubTeam</label>
                            <select id="inputState" name='idclubteam' class="form-control bg-dark">\n"
                                @foreach ($clubTeam as $row)
                                    <option value='<?php echo $row->id; ?>'><?php echo $row->nom; ?></option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="inputEmail4" class="form-label ">IdJoueur</label>
                            <select id="inputState" name='idjoueur' class="form-control bg-dark">\n"
                                @foreach ($joueur as $row)
                                    <option value='<?php echo $row->id; ?>'><?php echo $row->nom; ?> <?php echo $row->prenom; ?></option>
                                @endforeach
                            </select>
                        </div>
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
