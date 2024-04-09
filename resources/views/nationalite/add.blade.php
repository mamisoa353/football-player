@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-lg-2">
        </div>
        <div class="col-lg-8">
            <div class="card">
                <div class="card-body"><a href='liste'> <button class="btn btn-success">Liste</button></a>
                    <h5 class="card-title">Ajouter nouveau Nationalite</h5>


                    <form action="action_add" method="POST"class="row g-3">
                        @csrf
                        <div class="col-md-6">
                            <label for="inputEmail1" class="form-label">Designation</label>
                            <input type="text" class="form-control" placeholder='designation'name='designation'
                                id="inputEmail1">
                        </div>
                        <div class="col-md-6">
                            <label for="inputEmail2" class="form-label">Drapeau</label>
                            <input type="text" class="form-control" placeholder='drapeau'name='drapeau' id="inputEmail2">
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
