<h1 class="text-center">Add Pokemon</h1>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form action="/pokemons" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
      <label>Name</label>
      <input type="text" name="name" class="form-control">
    </div>
    <div class="form-group">
      <label>Level</label>
      <input type="number" name="lvl" class="form-control">
    </div>
    <div class="form-group">
      <label>Type</label>
      <select class="form-control" name="type" id="">
        @foreach ($types->where('pokemon_id', '=', NULL) as $item)
            <option value="{{$item->id}}">{{$item->type}}</option>
        @endforeach
      </select>
    </div>
    <div class="form-group">
      <label>Img</label>
      <input type="file" name="src" class="form-control">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>