@extends('layouts.app')
@section('content')
    <div class="site-section bg-dark">
        <div class="col-lg-2">
        </div>
        <div class="col-lg-8">
            <div>
                <div class="card-body"><a href='liste'> <button class="btn btn-success">Liste</button></a>
                    <h5 class="card-title">Ajouter nouveau ClubTeam</h5>


                    <form action="action_add" method="POST"class="row g-3">
                        @csrf
                        <div class="col-md-6">
                            <label for="inputEmail1" class="form-label">Nom</label>
                            <input type="text" class="form-control" placeholder='nom'name='nom' id="inputEmail1">
                        </div>
                        <div class="col-md-6">
                            <label for="inputEmail2" class="form-label">Profil</label>
                            <input type="text" class="form-control" placeholder='profil'name='profil' id="inputEmail2">
                        </div>
                        <div class="col-md-6">
                            <label for="inputEmail3" class="form-label">Code</label>
                            <input type="text" class="form-control" placeholder='code'name='code' id="inputEmail3">
                        </div>
                        <div class="col-md-6">
                            <label for="inputEmail4" class="form-label">IdLigue</label>
                            <select id="inputState" name='idligue' class="form-control">\n"
                                @foreach ($ligue as $row)
                                    <option value='<?php echo $row->id; ?>'><?php echo $row->designation; ?></option>
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
