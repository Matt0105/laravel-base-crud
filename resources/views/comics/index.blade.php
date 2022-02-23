@extends('layouts.base');

@section('title')
    {{ $title }}
@endsection

@section('content')
<main>
    <div class="container">
        <table class="table table-primary">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Brand</th>
                <th scope="col">Editor</th>
                <th scope="col">Price</th>
                <th scope="col">Thumb</th>
                <th scope="col">Info</th>
              </tr>
            </thead>

            @foreach ($comics as $comic)
                
                <tbody>
                    <tr>
                        <th scope="row">{{$comic->id}}</th>
                        <td>{{$comic->name}}</td>
                        <td>{{$comic->brand}}</td>
                        <td>{{$comic->editor}}</td>
                        <td>{{$comic->price}}&euro;</td>
                        <td style="width: 30px"><img class="img-fluid" src="{{$comic->thumb}}" alt="{{$comic->name}}"></td>
                        <td><a href="{{route("comics.show", $comic)}}"><button class="btn btn-primary">More Info</button></a></td>
                    </tr>
                </tbody>

            @endforeach
          </table>
          <div style="width: 100%; display: flex; flex-direction: column; justify-content: center; align-items: center">
            {{$comics->links()}}
            <a href="{{route("comics.create")}}"><button class="btn btn-dark mb-3">Add Comic</button></a>
          </div>
          
    </div>
</main>

@endsection