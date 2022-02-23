@extends('layouts.base');

@section('title')
    {{ $title }}
@endsection

@section('content')
    <main>
        <div class="container">
            <h1>{{$comic->name}}</h1>
            <h2>{{$comic->brand}}</h2>
            <h3>{{$comic->editor}}</h3>
            <div class="row">
                <div class="col-6">
                    <img class="img-fluid" src="{{$comic->thumb}}" alt="{{$comic->name}}">
                </div>
                <div class="col-6">
                    <p>Artists:<br> {{ $comic->artists }}</p> <br>
                    <p>Authors:<br> {{ $comic->authors }}</p> <br>
                    <h2>{{ $comic->price }} &euro;<br></h2>
                    <a style="color: white; text-decoration: none" href="{{route("comics.index")}}"><button class="btn btn-primary">Index Page</button></a>
                </div>
            </div>
        </div>
    </main>
    
@endsection