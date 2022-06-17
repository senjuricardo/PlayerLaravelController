@extends('master.main')


@section('content')
    <h1 class="text-center">SHOW PLAYER</h1>
<div class="col-4 mx-auto mt-5">

    <div class="form-group">
        <label for="name">Image</label> <br>

        <td>@if ($player->image)<img class="w-50 img-responsive" src="{{asset('storage/'.$player->image) }}" alt="" title=""></a>@else<p>   No Image     </p>@endif</td>
    </div>

        <div class="form-group">
            <label for="name">Name</label>

            <input type="text" id="name" name="name" autocomplete="name" class="form-control"
                   value="{{ $player->name}}" disabled>


                <label for="name">Address</label>

            <input type="text" id="address" name="address" autocomplete="name" class="form-control"
                   value="{{ $player->address}}" disabled>

            <label for="name">Description</label>

            <textarea id="description" name="description" autocomplete="name" class="form-control"
                     disabled>{{ $player->description}} </textarea>

            <label for="name">Retired</label>
            <br>

            <input type="radio" id="yes" name="retired" @if($player->retired) checked @endif disabled >
            <label for="yes">YES</label><br>
            <input type="radio" id="no" name="retired" @if(!$player->retired) checked @endif disabled >
            <label for="no">NO</label><br>

            <a class="btn btn-danger" href="{{url('players/')}}">Back</a>
</div>

</div>

@endsection
