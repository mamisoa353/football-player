@extends('layouts.app')

@section('content')
    <div class="hero overlay" style="background-image: url({{ asset('/assets/images/bg_1.jpg') }} );">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 ml-auto">
                    <h1 class="text-white">Gestion des clubs</h1>
                    {{-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta, molestias repudiandae pariatur.</p> --}}
                    <p>
                        <a href="#" class="btn btn-primary py-3 px-4 mr-3">Ajouter un nouveau club</a>
                        <a href="#listeClubs" class="more light">Listes des clubs</a>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="site-section bg-dark">
        <div class="container">
            <div class="row" id="listeClubs">
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
                                    <th></th>
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
                                    <td>
                                        <button type="button" class="btn btn-primary" data-bs-toggle="popover"
                                            title="Titre du Popover" data-bs-content="Contenu du Popover"
                                            data-bs-placement="left" onclick="initPopover()">
                                            {{-- Popover à gauche --}}
                                            <i class="bi bi-three-dots-vertical"></i>
                                        </button>
                                    </td>
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

            <div class="modal fade" id="popupModal" tabindex="-1" role="dialog" aria-labelledby="popupModalLabel"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="popupModalLabel">Titre du Pop-up</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Fermer">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            Contenu du Pop-up
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    @endsection

    @section('script')
        <script>
            function popover() {
                var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'))
                var popoverList = popoverTriggerList.map(function(popoverTriggerEl) {
                    return new bootstrap.Popover(popoverTriggerEl)
                });
            }

            function initPopover() {
                popover(); // Appeler la fonction popover lorsque le bouton est cliqué
            }


            document.querySelector('a[href="#listeClubs"]').addEventListener('click', function(e) {
                e.preventDefault(); // Pour éviter que le lien n'ouvre l'URL directement
                document.querySelector('#listeClubs').scrollIntoView({
                    behavior: 'smooth' // Pour un défilement fluide
                });
            });
        </script>
    @endsection
