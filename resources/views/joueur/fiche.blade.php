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
                    </div>
                </div>
            </div>
        </div>
    @endsection
