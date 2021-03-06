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
    <a class="btn btn-primary" href="{{url('players/export')}}">export</a>
    <form method="POST" action="{{url('players/import')}}" enctype="multipart/form-data">
        @csrf
        <input type="file" name="playersFile" />
        <button type="submit" class="btn btn-primary">Import</button>
    </form>
    <tr>
        <th scope="col">id</th>
        <th scope="col">image</th>
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
            <td>@if ($player->image)<img class="w-50 img-responsive" src="{{asset('storage/'.$player->image) }}" alt="" title=""></a>@else<p>   No Image     </p>@endif</td>
            <td>{{$player->name}}</td>
            <td>{{$player->address}}</td>
            <td>@if($player->retired) <i  class=" text-success bi bi-emoji-smile-fill"></i> @else <i class=" text-danger bi bi-emoji-frown-fill"></i> @endif  </td>
            <td>  <a class="btn btn-success" href="{{url('players/' . $player->id)}}">Show</a>
             <a class="btn btn-primary" href="{{url('players/' . $player->id . '/edit')}}">Edit</a>
                <form action="{{url('players/' . $player->id)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form> </td>
        </tr>
    @endforeach
    </tbody>
</table>

<div class="d-flex justify-content-center">{{ $players->links() }}


