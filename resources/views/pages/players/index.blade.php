@extends('master.main')


@section('content')
    <h1>Players</h1>
    <form action="{{url('players/destall')}}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Delete All</button>
    </form> </td>

    @component('components.players.player-list',[
            'players'=>$players
    ])
    @endcomponent
@endsection

