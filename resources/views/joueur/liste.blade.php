@extends('layouts.app')
@section('content')
    <div class="site-section bg-dark">
        <div class="container">
            <div class="row" id="listeClubs">
                <div class="col-lg-16">
                    <div class="card-body">
                        <a href='add'>
                            <button class="btn btn-success">Ajouter nouveau</button>
                        </a>
                        <button type="button" class="btn btn-success" data-bs-toggle="modal"
                            data-bs-target="#Filtre">Filtre</button>
                        <h3>Liste Joueur</h3>
                        <div class="table-responsive pt-3">
                            <table class="table table-striped" border="1">
                                <tr>
                                    <th>Profil</th>
                                    <th>Nom</th>
                                    <th>Age</th>
                                    <th>Taille</th>
                                    <th>NbButs</th>
                                    {{-- <th>IdNationalite</th> --}}
                                    <th>Club</th>
                                    <th>Equipe nationale</th>
                                    <th>Nombre des parcours</th>

                                </tr>
                                @foreach ($liste as $row)
                                    <tr>
                                        <td>
                                            <img src="{{ asset('/assets/logo/Other/' . $row->profil . '.png') }}"
                                                class="rounded-circle mr-3" width="50" height="50">
                                        </td>
                                        <td>{{ $row->nom . ' ' . $row->prenom }} </td>
                                        <td>{{ $row->age }} ans</td>
                                        <td>{{ $row->taille }} cm</td>
                                        <td>{{ $row->nbbuts }}</td>
                                        <td>{{ $row->clubteam->nom }}</td>
                                        <td>{{ $row->nationalteam->nom }}</td>
                                        <td>{{ count($row->parcours) }}</td>
                                        <td>
                                            <button type="button" class="btn btn-primary"
                                                onclick="chargerModalAvecAjax(<?= $row->id ?>)">
                                                Information
                                            </button>
                                            {{-- <a href="">
                                    <i class="bi bi-eye"></i>
                                </a> --}}
                                        </td>


                                        <td>
                                            <button type="button" class="btn btn-primary mb-2" data-bs-toggle="modal"
                                                data-bs-target="#basicModal<?php echo $row->id; ?>"><i
                                                    class="bi bi-pencil-square"></i></button>

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
                                                                <input type="text" class="form-control"
                                                                    placeholder='nom'name='nom' value=<?= $row->nom ?>>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label for="inputEmail2" class="form-label">Prenom</label>
                                                                <input type="text" class="form-control"
                                                                    placeholder='prenom'name='prenom'
                                                                    value=<?= $row->prenom ?>>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label for="inputEmail3" class="form-label">Dtn</label>
                                                                <input type="date" class="form-control"
                                                                    placeholder='dtn'name='dtn' value=<?= $row->dtn ?>>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label for="inputEmail4" class="form-label">Taille</label>
                                                                <input type="number" placeholder='taille'name='taille'
                                                                    value=<?= $row->taille ?> class="form-control">
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label for="inputEmail5" class="form-label">Profil</label>
                                                                <input type="text" class="form-control"
                                                                    placeholder='profil'name='profil'
                                                                    value=<?= $row->profil ?>>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label for="inputEmail6" class="form-label">NbButs</label>
                                                                <input type="number" placeholder='nbbuts'name='nbbuts'
                                                                    value=<?= $row->nbbuts ?> class="form-control">
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label for="inputEmail7"
                                                                    class="form-label">IdNationalite</label>
                                                                <select id="inputState" name='idnationalite'
                                                                    class="form-select">\n"
                                                                    <?php foreach(\App\Models\Nationalite::all() as $data)
                                                    {?> <option value='<?php echo $data->id; ?>'>
                                                                        <?php echo $data->designation; ?></option>


                                                                    <?php } ?>
                                                                </select>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label for="inputEmail8"
                                                                    class="form-label">IdClubTeam</label>
                                                                <select id="inputState" name='idclubteam'
                                                                    class="form-select">\n"
                                                                    <?php foreach(\App\Models\ClubTeam::all() as $data)
                                                    {?> <option value='<?php echo $data->id; ?>'>
                                                                        <?php echo $data->nom; ?></option>


                                                                    <?php } ?>
                                                                </select>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label for="inputEmail9"
                                                                    class="form-label">IdNationalTeam</label>
                                                                <select id="inputState" name='idnationalteam'
                                                                    class="form-select">\n"
                                                                    <?php foreach(\App\Models\NationalTeam::all() as $data)
                                                    {?> <option
                                                                        value='<?php echo $data->id; ?>'>
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
                                                        <button type="submit" class="btn btn-primary">Save
                                                            changes</button>
                                                    </div>
                                                    </form>
                                                </div>
                                                {{-- </td> --}}
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
                                                                    <p style='font-size:28px'>Confirmation de la
                                                                        suppression!</p>
                                                                    <input type="hidden" class="form-control"
                                                                        name='id' value='<?= $row->id ?>' />
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-primary light"
                                                                    data-bs-dismiss="modal">Close</button>
                                                                <button type="submit"
                                                                    class="btn btn-danger">Supprimer</button>
                                                            </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </tr>
                                @endforeach
                            </table>
                            {{ $liste->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="modal fade" id="Filtre">
        <div class="modal-dialog  modal-md" role="document">
            <div class="modal-content bg-dark">
                <div class="modal-header">
                    <h5 class="modal-title">Filtre</h5>
                </div>
                <div class="modal-body">
                    <form action="/joueur/liste" method="GET"class="row g-3">
                        <div class="col-md-6">
                            <label for="inputEmail8" class="form-label">Club Team</label>
                            <select id="inputState" name='idclubteam' class="form-control bg-dark">\n"
                                <option></option>
                                @foreach ($clubTeam as $row)
                                    <option value='<?php echo $row->id; ?>'><?php echo $row->nom; ?></option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="inputEmail9" class="form-label">National Team</label>
                            <select id="inputState" name='idnationalteam' class="form-control bg-dark">\n"
                                <option></option>
                                @foreach ($nationalTeam as $row)
                                    <option value='<?php echo $row->id; ?>'><?php echo $row->nom; ?></option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="inputEmail9" class="form-label">Trier par</label>
                            <select id="inputState" name='tri' class="form-control bg-dark">\n"
                                <option></option>
                                <option value="nom">Nom</option>
                                <option value="nbbuts">Nombre des buts</option>
                                <option value="parcours_count">Nombre des parcours</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="inputEmail9" class="form-label"> Type </label>
                            <select id="inputState" name='type' class="form-control bg-dark">\n"
                                <option value="asc">Croissant</option>
                                <option value="desc">Decroissant</option>
                            </select>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light light" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Valider</button>
                </div>
                </form>
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
                <a href="/parcours/add" type="button" class="btn btn-dark">Tranférer</a>
                <button type="button" class="btn btn-primary " data-bs-dismiss="modal">Close</button>
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

        function parcoursHtml(parcours) {
            tbody = ``;
            parcours.forEach(function(parcour) {
                tbody += `<tr>
                                                <td><strong class="text-white">` + parcour.club_team.nom + `</strong></td>
                                                <td>` + parcour.datedebut + `</td>
                                                <td>` + (parcour.datefin ? parcour.datefin : 'En cours') + `</td>
                                            </tr>`
            });

            return `<table class="table custom-table">
                                        <tbody>
                                            <tr>
                                                <th>Equipe</th>
                                                <th>Date debut</th>
                                                <th>Date fin</th>
                                            </tr>
                                        </tbody>
                                        <tbody>
                                            ` + tbody + `
                            </tbody>
        </table>`
        }

        function getHtml(content) {
            return `
            <div class="widget-next-match">
                        <div class="widget-title">
                            <h3>Détails du joueur
                                <i class="bi bi-pencil-square"></i>
                                <a href="/joueur/page/1">
                                </a>
                                </h3>
                        </div>
                        <div class="widget-body mb-3">
                            <div class="widget-vs">
                                <div class="d-flex align-items-center justify-content-around justify-content-between w-100">
                                    <div class="team-1 text-center">
                                        <img src="{{ asset('/assets/logo/Other/`+content.profil +`.png') }}" alt="Image">
                                        <h3>` + content.nom + ' ' + content.prenom + `</h3>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="text-center widget-vs-contents mb-4">
                            <h4>À propos</h4>
                            <p class="mb-5 ">
                                <span class="d-block">Age : ` + content.age + ` ans</span>
                                <span class="d-block">Taille : ` + content.taille + ` cm</span>
                                <span class="d-block">Nationalité : ` + content.nationalite.designation + `
                                    <img src="{{ asset('/assets/logo/Nationalite/`+content.nationalite.drapeau+`.svg') }}" class="rounded-circle mr-3"
                                        width="15" height="15"> </span>
                                <span class="d-block">Equipe nationale : ` + content.national_team.nom + `
                                    <img src="{{ asset('/assets/logo/Nationalite/`+content.national_team.profil+`.svg') }}" class="rounded-circle mr-3"
                                        width="15" height="15">
                                </span>
                                <span class="d-block">Club actuel : ` + content.club_team.nom + `
                                    <img src="{{ asset('/assets/logo/Other/`+content.club_team.profil+`.png') }}" class="rounded-circle mr-3"
                                        width="15" height="15">
                                    </span>
                            </p>

                            <div id="date-countdown2" class="pb-1"></div>
                            <h4>Les parcours du joueur</h4>
                            <div class="col-lg-12">

                                <div class="widget-next-match">` + parcoursHtml(content.parcours) + `
                                </div>
                            </div>
                        </div>
                    </div>`;
        }
    </script>
@endsection
