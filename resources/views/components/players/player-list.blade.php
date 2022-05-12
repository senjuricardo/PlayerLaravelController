<table class="table">
    @if (session('status'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('status') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
    <thead>
    <tr>
        <th scope="col">id</th>
        <th scope="col">name</th>
        <th scope="col">address</th>
        <th scope="col">retired</th>

        <th scope="col">actions</th>
    </tr>
    </thead>
    <tbody>
    @foreach($players as $player)
        <tr>
            <th scope="row">{{$player->id}}</th>
            <td>{{$player->name}}</td>
            <td>{{$player->address}}</td>
            <td>@if($player->retired) <i  class=" text-success bi bi-emoji-smile-fill"></i> @else <i class=" text-danger bi bi-emoji-frown-fill"></i> @endif  </td>
            <td>  <a class="btn btn-success" href="{{url('players/' . $player->id)}}">Show</a> </td>
            <td>  <a class="btn btn-primary" href="{{url('players/' . $player->id)}}">Edit</a> </td>
            <td>  <a class="btn btn-danger" href="{{url('players/' . $player->id)}}">Delete</a> </td>
        </tr>
    @endforeach
    </tbody>
</table>

<div class="d-flex justify-content-center">{{ $players->links() }}


