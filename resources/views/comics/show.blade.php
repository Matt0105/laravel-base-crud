@extends('layouts.base')

@section('title')
    {{ $title }}
@endsection

@section('content')
    <main class="info">
        <div class="container">
            <h1 class="info-title">{{$comic->name}}</h1>
            <h2 class="info-title">{{$comic->brand}}</h2>
            <h3 class="info-title">{{$comic->editor}}</h3>
            <div class="row">
                <div class="col-6">
                    <img class="img-fluid" src="{{$comic->thumb}}" alt="{{$comic->name}}">
                </div>
                <div class="col-6 desc">
                    <p class="section"><em><b>Artists:</b></em><br> {{ $comic->artists }}</p> <br>
                    <p class="section"><em><b>Authors:</b></em><br> {{ $comic->authors }}</p> <br>
                    <h2 class="price">{{ $comic->price }} &euro;<br></h2>
                    <a style="color: white; text-decoration: none" href="{{route("comics.edit", $comic)}}"><button class="btn btn-success">Edit</button></a>
                    <a style="color: white; text-decoration: none" href="{{route("comics.index")}}"><button class="btn btn-danger">Index Page</button></a>
                </div>
            </div>
        </div>
    </main>
    
@endsection