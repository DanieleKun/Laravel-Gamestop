@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8"> 
            <ul>
                @foreach ($games as $game)
                    <li>{{ $game -> title }}, <strong>Prezzo:</strong>{{ $game -> price}}</li>

                @endforeach
            </ul>
            <button class="btn btn-danger"><a href="{{ route('games.create')}}">Crea nuovo gioco</a></button>
           
        </div>

    </div>
</div>


@endsection