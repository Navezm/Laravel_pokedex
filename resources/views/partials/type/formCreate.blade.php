<h1 class="text-center">Add Type</h1>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form action="/types" method="POST">
    @csrf
    <div class="form-group">
      <label>Name</label>
      <input type="text" name="type" class="form-control">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>