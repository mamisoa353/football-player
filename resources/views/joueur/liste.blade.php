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
                                <button type="button" class="btn btn-primary" onclick="chargerModalAvecAjax(<?= $row->id ?>)">
                                    Ouvrir le modal avec Ajax
                                </button>


                                {{-- <a href="">
                                    <i class="bi bi-eye"></i>
                                </a> --}}
                            </td>

                            {{-- <td>
                                <button type="button" class="btn btn-success mb-2" data-bs-toggle="modal"
                                    data-bs-target="#basicModal<?php echo $row->id; ?>">Modif</button>

                            </td> --}}
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
                                    {{-- <td>
                                        <button type="button" class="btn btn-danger mb-2" data-bs-toggle="modal"
                                            data-bs-target="#bbasicModal<?php echo $row->id; ?>">Supprimer</button>

                                    </td> --}}
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

    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content bg-dark">
                <!-- Contenu du modal chargé via Ajax -->
                <div class="modal-body">
                    <!-- Contenu chargé via Ajax sera inséré ici -->
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        function chargerModalAvecAjax(id) {
            var url = '/joueur/details/' + id;
            $.ajax({
                type: 'GET',
                url: url,
                success: function(data) {
                    // Mettre à jour le contenu du modal avec les données JSON
                    $('.modal-body').html(getHtml(data.joueur));
                    $('#myModal').modal('show');
                }
            });
        }

        function getHtml(content) {
            return `
            <div class="widget-next-match">
                        <div class="widget-title">
                            <h3>Détails du joueur</h3>
                        </div>
                        <div class="widget-body mb-3">
                            <div class="widget-vs">
                                <div class="d-flex align-items-center justify-content-around justify-content-between w-100">
                                    <div class="team-1 text-center">
                                        <img src="{{ asset('/assets/images/person_5.jpg') }}" alt="Image">
                                        <h3>` + content.nom +' ' + content.prenom + `</h3>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="text-center widget-vs-contents mb-4">
                            <h4>À propos</h4>
                            <p class="mb-5 ">
                                <span class="d-block">Age : 32 ans</span>
                                <span class="d-block">Taille : 174 cm</span>
                                <span class="d-block">Nationalité : Argentine
                                    <img src="{{ asset('/assets/logo/Nationalite/ar.svg') }}" class="rounded-circle mr-3"
                                        width="15" height="15"> </span>
                                <span class="d-block">Equipe nationale : Argentine
                                    <img src="{{ asset('/assets/logo/Nationalite/ar.svg') }}" class="rounded-circle mr-3"
                                        width="15" height="15">
                                </span>
                                <span class="d-block">Club actuel : Inter Miami </span>
                            </p>

                            <div id="date-countdown2" class="pb-1"></div>
                            <h4>Les parcours du joueur</h4>
                            <div class="col-lg-12">

                                <div class="widget-next-match">

                                    <table class="table custom-table">
                                        <tbody>
                                            <tr>
                                                <th>P</th>
                                                <th>Equipe</th>
                                                <th>Date debut</th>
                                                <th>Date fin</th>
                                                <th>L</th>
                                                <th>PTS</th>
                                            </tr>
                                        </tbody>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td><strong class="text-white">Football League</strong></td>
                                                <td>22</td>
                                                <td>3</td>
                                                <td>2</td>
                                                <td>140</td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td><strong class="text-white">Soccer</strong></td>
                                                <td>22</td>
                                                <td>3</td>
                                                <td>2</td>
                                                <td>140</td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td><strong class="text-white">Juvendo</strong></td>
                                                <td>22</td>
                                                <td>3</td>
                                                <td>2</td>
                                                <td>140</td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td><strong class="text-white">French Football League</strong></td>
                                                <td>22</td>
                                                <td>3</td>
                                                <td>2</td>
                                                <td>140</td>
                                            </tr>
                                            <tr>
                                                <td>5</td>
                                                <td><strong class="text-white">Legia Abante</strong></td>
                                                <td>22</td>
                                                <td>3</td>
                                                <td>2</td>
                                                <td>140</td>
                                            </tr>
                                            <tr>
                                                <td>6</td>
                                                <td><strong class="text-white">Gliwice League</strong></td>
                                                <td>22</td>
                                                <td>3</td>
                                                <td>2</td>
                                                <td>140</td>
                                            </tr>
                                            <tr>
                                                <td>7</td>
                                                <td><strong class="text-white">Cornika</strong></td>
                                                <td>22</td>
                                                <td>3</td>
                                                <td>2</td>
                                                <td>140</td>
                                            </tr>
                                            <tr>
                                                <td>8</td>
                                                <td><strong class="text-white">Gravity Smash</strong></td>
                                                <td>22</td>
                                                <td>3</td>
                                                <td>2</td>
                                                <td>140</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>`;
        }
    </script>
@endsection
