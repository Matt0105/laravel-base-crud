@extends('layouts.base')

@section('title')
    {{ $title }}
@endsection

@section('content')
    <main class="myForm">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h1>Insert new Comic</h1>
                    <form action="{{route("comics.store")}}" method="post">
                        @csrf
                        @method("POST")
                        <div class="mb-3">
                          <label for="name" class="form-label">Comic Name</label>
                          <input type="text" class="form-control" id="name" name="name">
                          @error('name')
                          <div class="alert alert-danger">
                              {{$message}}
                          </div>
                          @enderror
                        </div>
                        <div class="mb-3">
                          <label for="brand" class="form-label">Comic Brand</label>
                          <input type="text" class="form-control" id="brand" name="brand">
                          @error('brand')
                          <div class="alert alert-danger">
                              {{$message}}
                          </div>
                          @enderror
                        </div>
                        <div class="mb-3">
                          <label for="editor" class="form-label">Comic Editor</label>
                          <input type="text" class="form-control" id="editor" name="editor">
                          @error('editor')
                          <div class="alert alert-danger">
                              {{$message}}
                          </div>
                          @enderror
                        </div>
                        <div class="mb-3">
                            <label for="artists" class="form-label">Artists: </label>
                            <textarea class="form-control" id="artists" name="artists" rows="3"></textarea>
                            @error('artists')
                          <div class="alert alert-danger">
                              {{$message}}
                          </div>
                          @enderror
                        </div>
                        <div class="mb-3">
                            <label for="authors" class="form-label">Authors: </label>
                            <textarea class="form-control" id="authors" name="authors" rows="3"></textarea>
                            @error('authors')
                            <div class="alert alert-danger">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="price" class="form-label">Comic Price</label>
                            <input type="number" step=0.01 class="form-control" id="price" name="price">
                            @error('price')
                            <div class="alert alert-danger">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="thumb" class="form-label">Comic Thumb</label>
                            <input type="text" class="form-control" id="thumb" name="thumb">
                            @error('thumb')
                            <div class="alert alert-danger">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                        
                        <button type="submit" class="btn btn-primary">save</button>
                    </form>
                      <a style="color: white; text-decoration: none" href="{{route("comics.index")}}"><button class="btn btn-primary">Index Page</button></a>
                </div>
            </div>
        </div>
    </main>
@endsection