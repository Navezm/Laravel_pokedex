<h1 class="text-center">Edit Pokemon</h1>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form action="/pokemons/{{$edit->id}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="form-group">
      <label>Name</label>
      <input type="text" name="name" class="form-control" value="{{$edit->name}}">
    </div>
    <div class="form-group">
      <label>Level</label>
      <input type="number" name="lvl" class="form-control" value="{{$edit->lvl}}">
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
    <button type="submit" class="btn btn-primary">Update</button>
</form>