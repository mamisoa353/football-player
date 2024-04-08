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
                                        <img src="{{ asset('/assets/images/person_5.jpg') }}" alt="Image">
                                        <h3>Lionel Messi</h3>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="text-center widget-vs-contents mb-4">
                            <h4>À propos</h4>
                            <p class="mb-5 ">
                                <span class="d-block">Age : 32 ans</span>
                                <span class="d-block">Taille : 174 cm</span>
                                <span class="d-block">Nationalité : Argentine </span>
                                <span class="d-block">Equipe nationale : Argentine </span>
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
                    </div>
                </div>
            </div>
        </div>
    @endsection
