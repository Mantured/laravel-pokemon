@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row g-4">
        @forelse ($pokemons as $pokemon)
        <div class="col-4">
            <div class="card-deck">
                <div class="card">
                <img class="card-img-top w-75 align-self-center" src="{{asset("assets/img") . '/'. $pokemon->name . '.png'}}" alt="Picture of {{$pokemon->name}}">
                <div class="card-body">
                    <h5 class="card-title text-capitalize">{{$pokemon->name}}</h5>
                    <p class="card-text">Main Type: {{$pokemon->main_type}}</p>
                    <p class="card-text">Additional Type: {{$pokemon->additional_type != "" ? $pokemon->additional_type : "none"  }}</p>
                </div>
                </div>
            </div>
        </div>
        @empty
        <div class="col-12">
            <h1>
                nessun pokemon trovato
            </h1>
        </div>
        @endforelse
        <div class="col-6">
            {{$pokemons->links()}}
        </div>
    </div>

</div>
@endsection
