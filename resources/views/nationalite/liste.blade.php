@extends('layouts.app')
@section('content')
    <div class="site-section bg-dark">

        <div class="card-body"><a href='add'> <button class="btn btn-success">Ajouter nouveau</button></a>

            <div class="site-section bg-dark">
                <div class="container">


                    <div class="row" id="listeClubs">
                        <div class="col-lg-12">
                            <div class="col-6 title-section">
                                <h3 class="heading">Liste des nationalité</h3>
                            </div>
                            <div class="widget-next-match">
                                <table class="table table-striped" border="1">
                                    <tr>
                                        <th>Designation</th>
                                        <th>Drapeau</th>
                                    </tr>
                                    @foreach ($liste as $row)
                                        <tr>
                                            <td><?php echo $row->designation; ?></td>
                                            <td> <img
                                                    src="{{ asset('/assets/logo/Nationalite/'.$row->drapeau.'.svg') }}"
                                                    class="rounded-circle mr-3" width="15" height="15">
                                                {{-- <?php echo $row->drapeau; ?>  --}}
                                            </td>
                                            <td>
                                                <button type="button" class="btn btn-success mb-2" data-bs-toggle="modal"
                                                    data-bs-target="#basicModal<?php echo $row->id; ?>">Modif</button>
                                            </td>
                                            <div class="modal fade" id="basicModal<?php echo $row->id; ?>">
                                                <div class="modal-dialog  modal-md" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title">Modification</h5>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form action="action_update" method="GET"class="row g-3">
                                                                <div class="col-md-6">
                                                                    <label for="inputEmail1"
                                                                        class="form-label">Designation</label>
                                                                    <input type="text" class="form-control"
                                                                        placeholder='designation'name='designation'
                                                                        value=<?= $row->designation ?>>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <label for="inputEmail2"
                                                                        class="form-label">Drapeau</label>
                                                                    <input type="text" class="form-control"
                                                                        placeholder='drapeau'name='drapeau'
                                                                        value=<?= $row->drapeau ?>>
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
                                                    </td>
                                                    <td>
                                                        <button type="button" class="btn btn-danger mb-2"
                                                            data-bs-toggle="modal"
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
                                                                        <p style='font-size:28px'>Confirmation de la
                                                                            suppression!</p> <input type="hidden"
                                                                            class="form-control" name='id'
                                                                            value='<?= $row->id ?>' />
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-primary light"
                                                                        data-bs-dismiss="modal">Close</button>
                                                                    <button type="submit"
                                                                        class="btn btn-danger">Supprimer</button>
                                                                </div>
                                                                </form>
                                                            </div>
                                                            </td>
                                        </tr>
                                    @endforeach
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                {{ $liste->links() }}
            </div>
        </div>
    </div>
@endsection
