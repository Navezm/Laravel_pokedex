<table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Img</th>
        <th scope="col"></th>
      </tr>
    </thead>
    <tbody>
      @foreach ($pokemons as $item)
        <tr>
            <th scope="row">{{$item->id}}</th>
            <td>{{$item->name}}</td>
            <td>
                <img height="80px" src="{{asset('img/'.$item->src)}}" alt="">
            </td>
            <td>
                <form action="/pokemons/{{$item->id}}" method="POST">
                    @csrf
                    @method('GET')
                    <button class="btn btn-info" type="submit">Details</button>
                </form>
            </td>
        </tr>
      @endforeach
    </tbody>
</table>