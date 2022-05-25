@extends('master.main')


@section('content')
    <h1>EDIT PLAYER</h1>

    @component('components.players.player-form-edit',[
            'player'=>$player
    ])
    @endcomponent
@endsection

