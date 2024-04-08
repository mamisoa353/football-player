@extends('layouts.app')

@section('content')
    <div class="hero overlay" style="background-image: url({{ asset('/assets/images/bg_3.jpg') }} );">
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
    </div>

    <div class="site-section bg-dark">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">

                    <div class="widget-next-match">
                        <table class="table custom-table">
                            <thead>
                                <tr>
                                    <th>P</th>
                                    <th>Team</th>
                                    <th>W</th>
                                    <th>D</th>
                                    <th>L</th>
                                    <th>PTS</th>
                                </tr>
                            </thead>
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
    @endsection
