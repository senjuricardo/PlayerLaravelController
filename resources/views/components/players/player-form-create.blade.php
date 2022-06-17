
<div class="col-4 mx-auto mt-5">
<form method="POST" action="{{ url('players') }}" enctype="multipart/form-data">
    @csrf

    <div class="form-group">
        <label for="name">Name</label>
        <input
            type="text"
            id="name"
            name="name"
            autocomplete="name"
            placeholder="Type your name"
            class="form-control
            @error('name') is-invalid @enderror"
            value="{{ old('name') }}"
            required
            aria-describedby="nameHelp">
        <small id="nameHelp" class="form-text text-muted">We'll never share your data with anyone else.</small>
        @error('name')
        <span class="invalid-feedback" role="alert">
 <strong>{{ $message }}</strong>
 </span>
        @enderror
    </div>
    <div class="form-group">
        <label for="name">Address</label>
        <input
            type="text"
            id="address"
            name="address"
            autocomplete="name"
            placeholder="Type your address"
            class="form-control
            @error('address') is-invalid @enderror"
            value="{{ old('address') }}"
            required
            aria-describedby="nameHelp">
        <small id="nameHelp" class="form-text text-muted">We'll never share your data with anyone else.</small>
        @error('address')
        <span class="invalid-feedback" role="alert">
 <strong>{{ $message }}</strong>
 </span>
        @enderror
    </div>
    <div class="form-group">
        <label for="name">Description</label>
        <textarea
            type="text-area"
            id="description"
            name="description"
            autocomplete="name"
            placeholder="Type your description"
            class="form-control
            @error('description') is-invalid @enderror"
            required> {{ old('description') }}</textarea>
        <small id="nameHelp" class="form-text text-muted">We'll never share your data with anyone else.</small>
        @error('description')
        <span class="invalid-feedback" role="alert">
 <strong>{{ $message }}</strong>
 </span>
        @enderror
    </div>
    <div class="form-group">
    <label for="retired">Retired</label>
    <br>
         <input type="radio" id="yes" name="retired" value="1"  class="@error('retired') is-invalid @enderror">
         <label for="yes">YES</label><br>
         <input type="radio" id="no" name="retired" value="0"  class="@error('retired') is-invalid @enderror">
        <label for="no">NO</label>


        @error('retired')<span class="invalid-feedback" role="alert">
            <strong>{{$message }}</strong>
        </span>
        @enderror
    </div>

    <div class="form-group">
        <label for="name">Image</label>
        <input
            type="file"
            id="image"
            name="image"
            autocomplete="image"
            class="form-control @error('image') is-invalid @enderror"
            value="{{old('image') }}"
            required/>
        @error('image')<span class="invalid-feedback" role="alert">
            <strong>{{$message }}</strong>
        </span>
        @enderror
    </div>



    <button type="submit" class="mt-2 mb-5 btn btn-primary">Submit</button>
</form>
</div>
