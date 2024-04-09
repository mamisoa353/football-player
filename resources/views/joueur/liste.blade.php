@extends('layouts.app')
@section('content')
    <div class="site-section bg-dark">

        <div class="card-body"><a href='add'> <button class="btn btn-success">Ajouter nouveau</button></a>

            <h3>Liste Joueur</h3>
            <div class="table-responsive pt-3">
                <table class="table table-striped" border="1">
                    <tr>
                        <th>Nom</th>
                        <th>Prenom</th>
                        <th>Dtn</th>
                        <th>Taille</th>
                        <th>Profil</th>
                        <th>NbButs</th>
                        <th>IdNationalite</th>
                        <th>IdClubTeam</th>
                        <th>IdNationalTeam</th>

                    </tr>



                    @foreach ($liste as $row)
                        <tr>
                            <td><?php echo $row->nom; ?></td>
                            <td><?php echo $row->prenom; ?></td>
                            <td><?php echo $row->dtn; ?></td>
                            <td><?php echo $row->taille; ?></td>
                            <td><?php echo $row->profil; ?></td>
                            <td><?php echo $row->nbbuts; ?></td>
                            <td><?= \App\Models\Nationalite::find($row->idnationalite)->designation ?></td>
                            <td><?= \App\Models\ClubTeam::find($row->idclubteam)->nom ?></td>
                            <td><?= \App\Models\NationalTeam::find($row->idnationalteam)->nom ?></td>
                            <td>
                                <button type="button" class="btn btn-success mb-2" data-bs-toggle="modal"
                                    data-bs-target="#basicModal<?php echo $row->id; ?>">Modif</button>

                            </td>
                            <div class="modal fade" id="basicModal<?php echo $row->id; ?>">
                                <div class="modal-dialog  modal-md" role="document">
                                    <div class="modal-content bg-dark">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Modification</h5>
                                        </div>
                                        <div class="modal-body">



                                            <form action="action_update" method="GET"class="row g-3">
                                                <div class="col-md-6">
                                                    <label for="inputEmail1" class="form-label">Nom</label>
                                                    <input type="text" class="form-control" placeholder='nom'name='nom'
                                                        value=<?= $row->nom ?>>
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="inputEmail2" class="form-label">Prenom</label>
                                                    <input type="text" class="form-control"
                                                        placeholder='prenom'name='prenom' value=<?= $row->prenom ?>>
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="inputEmail3" class="form-label">Dtn</label>
                                                    <input type="date" class="form-control" placeholder='dtn'name='dtn'
                                                        value=<?= $row->dtn ?>>
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="inputEmail4" class="form-label">Taille</label>
                                                    <input type="number" placeholder='taille'name='taille'
                                                        value=<?= $row->taille ?> class="form-control">
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="inputEmail5" class="form-label">Profil</label>
                                                    <input type="text" class="form-control"
                                                        placeholder='profil'name='profil' value=<?= $row->profil ?>>
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="inputEmail6" class="form-label">NbButs</label>
                                                    <input type="number" placeholder='nbbuts'name='nbbuts'
                                                        value=<?= $row->nbbuts ?> class="form-control">
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="inputEmail7" class="form-label">IdNationalite</label>
                                                    <select id="inputState" name='idnationalite' class="form-select">\n"
                                                        <?php foreach(\App\Models\Nationalite::all() as $data)
{?> <option value='<?php echo $data->id; ?>'>
                                                            <?php echo $data->designation; ?></option>


                                                        <?php } ?>
                                                    </select>
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="inputEmail8" class="form-label">IdClubTeam</label>
                                                    <select id="inputState" name='idclubteam' class="form-select">\n"
                                                        <?php foreach(\App\Models\ClubTeam::all() as $data)
{?> <option value='<?php echo $data->id; ?>'>
                                                            <?php echo $data->nom; ?></option>


                                                        <?php } ?>
                                                    </select>
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="inputEmail9" class="form-label">IdNationalTeam</label>
                                                    <select id="inputState" name='idnationalteam' class="form-select">\n"
                                                        <?php foreach(\App\Models\NationalTeam::all() as $data)
{?> <option value='<?php echo $data->id; ?>'>
                                                            <?php echo $data->nom; ?></option>


                                                        <?php } ?>
                                                    </select>
                                                </div>
                                                <input type="hidden" class="form-control" name='id'
                                                    value='<?= $row->id ?>' />
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-danger light"
                                                data-bs-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Save changes</button>
                                        </div>
                                        </form>

                                    </div>
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-danger mb-2" data-bs-toggle="modal"
                                            data-bs-target="#bbasicModal<?php echo $row->id; ?>">Supprimer</button>

                                    </td>
                                    <div class="modal fade" id="bbasicModal<?php echo $row->id; ?>">
                                        <div class="modal-dialog  modal-md" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Suppression</h5>
                                                </div>
                                                <div class="modal-body">



                                                    <form action="supprimer" method="GET"class="row g-3">
                                                        <p style='font-size:28px'>Confirmation de la suppression!</p>
                                                        <input type="hidden" class="form-control" name='id'
                                                            value='<?= $row->id ?>' />
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
