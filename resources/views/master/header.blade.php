<nav class="navbar navbar-expand-lg navbar-light bg-light">

    <div class="collapse navbar-collapse d-flex justify-content-between" id="navbarSupportedContent">
        <div class="dropdown">
            <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-expanded="false">
                PLAYERS
            </a>

            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">

                <a class="dropdown-item" href="{{url('players/')}}">Player List</a>
                <a class="dropdown-item" href="{{url('players/create')}}">Add Player</a>
            </div>
        </div>
        <form  action="{{url('players/')}}" method="get" class="form-inline my-2 my-lg-0">
            <input name="search" class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
</nav>
