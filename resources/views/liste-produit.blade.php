@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Liste produit') }}</div>

                    <div class="card-body">


                        <div class="row">
                            <form class="d-flex" role="search" action="Search-product" method="POST">
                                @csrf
                                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"
                                    name="argument">
                                <button class="btn btn-outline-success" type="submit">Search</button>
                            </form>

                        </div>
                        <div class="row">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>id</th>
                                        <th>Nom</th>
                                        <th>Marque</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($produit as $prod)
                                        <tr>
                                            <td scope="row"> {{ $prod->id }}</td>
                                            <td> {{ $prod->nom }}</td>
                                            <td> {{ $prod->marque }}</td>
                                            <td><a href="{{ url('commande-produit')}}-{{$prod->id}} "> <button type="button" class="btn btn-outline-primary" >Commander</button> </a></td>
                                            <p id="message"></p>
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
@endsection

<script>
    function hello() {
        alert("Atooo");
         document.getElementById('message').innerHtml = "<p>hello</p>";
    }
</script>
