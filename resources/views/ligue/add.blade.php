@extends('layouts.app')
@section('content')
    <div class="site-section bg-dark">
        <div class="col-lg-2">
        </div>
        <div class="col-lg-8">
            <div>
                <div class="card-body"><a href='liste'> <button class="btn btn-success">Liste</button></a>
                    <h5 class="card-title">Ajouter nouveau Ligue</h5>


                    <form action="action_add" method="POST"class="row g-3">
                        @csrf
                        <div class="col-md-6">
                            <label for="inputEmail1" class="form-label">Designation</label>
                            <input type="text" class="form-control" placeholder='designation'name='designation'
                                id="inputEmail1">
                        </div>
                        <div class="col-md-6">
                            <label for="inputEmail2" class="form-label">idNationalite</label>
                            <select id="inputState" name='idnationalite' class="form-control">\n"
                                @foreach ($nationalite as $row)
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
