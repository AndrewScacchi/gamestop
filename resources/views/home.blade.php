@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @foreach($games as $game)
                <div class="card mb-5">
                    <div class="card-header">Nome: {{ $game->nome }}</div>

                    <div class="card-body">
                       <div>Editore: {{$game->editore}}</div> 
                       <div>Prezzo: {{$game->prezzo}}</div>
                       <div>Trama: {{$game->trama}}</div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
