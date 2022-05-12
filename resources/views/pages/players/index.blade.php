@extends('master.main')


@section('content')
    <h1>Players</h1>

    @component('components.players.player-list',[
            'players'=>$players
    ])
    @endcomponent
@endsection

