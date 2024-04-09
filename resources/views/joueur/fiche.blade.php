@extends('layouts.app')

@section('content')
    {{-- <div class="hero overlay" style="background-image: url({{ asset('/assets/images/bg_3.jpg') }} );">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 ml-auto">
                    <h1 class="text-white">World Cup Event</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta, molestias repudiandae pariatur.</p>
                    <div id="date-countdown"></div>
                    <p>
                        <a href="#" class="btn btn-primary py-3 px-4 mr-3">Book Ticket</a>
                        <a href="#" class="more light">Learn More</a>
                    </p>
                </div>
            </div>
        </div>
    </div> --}}

    <div class="site-section bg-dark">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="widget-next-match">
                        <div class="widget-title">
                            <h3>Détails du joueur</h3>
                        </div>
                        <div class="widget-body mb-3">
                            <div class="widget-vs">
                                <div class="d-flex align-items-center justify-content-around justify-content-between w-100">
                                    <div class="team-1 text-center">
                                        <img src="{{ asset('/assets/logo/Other/' . $joueur->profil . '.png') }}"
                                            alt="Image">
                                        {{-- <img src="{{ asset('/assets/logo/Other/`+content.profil +`.png') }}" alt="Image"> --}}
                                        <h3>{{ $joueur->nom . ' ' . $joueur->prenom }} </h3>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="text-center widget-vs-contents mb-4">
                            <h4>À propos</h4>
                            <p class="mb-5 ">
                                <span class="d-block">Age : {{ $joueur->age }} ans</span>
                                <span class="d-block">Taille : {{ $joueur->taille }} cm</span>
                                <span class="d-block">Nombre de buts : {{ $joueur->nbbuts }} </span>
                                <span class="d-block">Nationalité : {{ $joueur->nationalite->designation }}
                                    <img src="{{ asset('/assets/logo/Nationalite/' . $joueur->nationalite->drapeau . '.svg') }}"
                                        class="rounded-circle mr-3" width="15" height="15"> </span>
                                <span class="d-block">Equipe nationale : {{ $joueur->nationalteam->nom }}
                                    <img src="{{ asset('/assets/logo/Nationalite/' . $joueur->nationalteam->profil . '.svg') }}"
                                        class="rounded-circle mr-3" width="15" height="15">
                                </span>
                                <span class="d-block">Club actuel : {{ $joueur->clubteam->nom }}
                                    <img src="{{ asset('/assets/logo/Other/' . $joueur->clubteam->profil . '.png') }}"
                                        class="rounded-circle mr-3" width="15" height="15">
                                </span>
                            </p>


                            <div id="date-countdown2" class="pb-1"></div>
                            <h4>Les parcours du joueur</h4>
                            <div class="col-lg-12">

                                <div class="widget-next-match">

                                    <table class="table custom-table">
                                        <tbody>
                                            <tr>
                                                <th>Equipe</th>
                                                <th>Date debut</th>
                                                <th>Date fin</th>
                                            </tr>
                                        </tbody>

                                        <tbody>
                                            @foreach ($joueur->parcours as $parcour)
                                                <tr>
                                                    <td><strong class="text-white">{{ $parcour->clubteam->nom }}</strong>
                                                    </td>
                                                    <td>{{ $parcour->datedebut }}</td>
                                                    <td>{{ $parcour->datefin ? $parcour->datefin : 'En cours' }}</td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="table-responsive pt-3">
                            <table class="table table-striped" border="1">
                                <tr>
                                    <th>Profil</th>
                                </tr>

                                <tr>
                                    <button type="button" class="btn btn-success mb-2" data-bs-toggle="modal"
                                        data-bs-target="#basicModal<?php echo $joueur->id; ?>">Modif</button>
                                </tr>

                                <tr>
                                    <button type="button" class="btn btn-success mb-2" data-bs-toggle="modal"
                                        data-bs-target="#Marquer">Marquer des buts</button>
                                </tr>

                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="Marquer">
            <div class="modal-dialog  modal-md" role="document">
                <div class="modal-content bg-dark">
                    <div class="modal-header">
                        <h5 class="modal-title">Marquer des buts </h5>
                    </div>
                    <div class="modal-body">
                        <form action="action_update" method="GET"class="row g-3">
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="basicModal<?php echo $joueur->id; ?>">
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
                                    value=<?= $joueur->nom ?>>
                            </div>
                            <div class="col-md-6">
                                <label for="inputEmail2" class="form-label">Prenom</label>
                                <input type="text" class="form-control" placeholder='prenom'name='prenom'
                                    value=<?= $joueur->prenom ?>>
                            </div>
                            <div class="col-md-6">
                                <label for="inputEmail3" class="form-label">Dtn</label>
                                <input type="date" class="form-control" placeholder='dtn'name='dtn'
                                    value=<?= $joueur->dtn ?>>
                            </div>
                            <div class="col-md-6">
                                <label for="inputEmail4" class="form-label">Taille</label>
                                <input type="number" placeholder='taille'name='taille' value=<?= $joueur->taille ?>
                                    class="form-control">
                            </div>
                            <div class="col-md-6">
                                <label for="inputEmail5" class="form-label">Profil</label>
                                <input type="text" class="form-control" placeholder='profil'name='profil'
                                    value=<?= $joueur->profil ?>>
                            </div>
                            <div class="col-md-6">
                                <label for="inputEmail6" class="form-label">NbButs</label>
                                <input type="number" placeholder='nbbuts'name='nbbuts' value=<?= $joueur->nbbuts ?>
                                    class="form-control">
                            </div>
                            <div class="col-md-6">
                                <label for="inputEmail7" class="form-label">IdNationalite</label>
                                <select id="inputState" name='idnationalite' class="form-select">\n"
                                    <?php foreach(\App\Models\Nationalite::all() as $data)
                                {?>
                                    <option value='<?php echo $data->id; ?>'>
                                        <?php echo $data->designation; ?>
                                    </option>
                                    <?php }
                                    ?>
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
                            <input type="hidden" class="form-control" name='id' value='<?php echo $joueur->id; ?>' />
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger light" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                    </form>
                </div>
                </td>


            </div>
        </div>
    @endsection
