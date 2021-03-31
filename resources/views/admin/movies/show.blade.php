@extends('layouts.app')

@section('content')

<div class="container-fluid">
        <div class="row">
            
          <center>  <div class="col-md-8">
        <div>
        <h2>{{$showMovies->movie_title}}</h2>
        </div>
        <hr>
            <div>
                <img src="{{url('uploads/movie_photo', $showMovies->movie_photo)}}" width="200">
            </div>
        <div>
            <h3 class="mt-2">Desc</h3>
            <hr>
            <strong>{{$showMovies->movie_desc}}</strong>
        </div>
        <hr>
        <div class="mt-3">
           <img src="{{url('uploads/movie_screen_short', $showMovies->movie_screen_short)}}" width="600"> 
        </div>
        <hr>
        <div>
           <a href="{{$showMovies->movie_source}}"><img src="{{url('uploads/movie_dawnload_photo', $showMovies->movie_dawnload_photo)}}" width="100"> </a>
        </div>
        <hr>
        </div>
        </center>
            
          
        
        </div>
</div>

@endsection