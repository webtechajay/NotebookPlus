@extends('layouts.app')

@section('content')

<div class="container">
        <div class="row">
               
             <div class="col-md-12">
            <div class="mt-2">
            <form action="" class="pull-xs-right" method="POST">
               {{ csrf_field()}}
                
                <input class="btn btn-sm btn-danger" type="submit" value="Delete">
            </form>
            </div>
             <center>
            <div>
                <img src="{{url('uploads/movie_photo', $showMovies->movie_photo)}}" width="200">
            </div>
        <div>
            <strong>{{$showMovies->movie_desc}}</strong>
        </div>
        <div>
           <img src="{{url('uploads/movie_screen_short', $showMovies->movie_screen_short)}}" width="600"> 
        </div>
        <div>
           <a href="{{$showMovies->movie_source}}"><img src="{{url('uploads/movie_dawnload_photo', $showMovies->movie_dawnload_photo)}}" width="100"> </a>
        </div>
        </center>
            
            </div>
        
        </div>
</div>

@endsection