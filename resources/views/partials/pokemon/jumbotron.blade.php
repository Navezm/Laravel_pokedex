<div class="jumbotron">
    <div class="row">
        <div class="col-6">
            <h1 class="display-4">{{$show->name}}</h1>
            <p class="lead">Level : {{$show->lvl}}</p>
            <p class="lead">Type : @foreach ($types->where('pokemon_id', '=', $show->id) as $item)
                <span>{{$item->type}} </span>
            @endforeach</p>
            <hr class="my-4">
            <div class="row">
                <form class="mx-3" action="/pokemons/{{$show->id}}/edit" method="POST">
                    @csrf
                    @method('GET')
                    <button class="btn btn-success" type="submit">Edit</button>
                </form>
                <form class="mx-3" action="/pokemons/{{$show->id}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </div>
        </div>
        <div class="col-6">
            <img class="w-100" src="{{asset('img/'.$show->src)}}" alt="">
        </div>
    </div>
</div>