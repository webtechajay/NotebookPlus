@extends('layouts.app')

@section('content')

<div class="container-fluid">
        <div class="row ">
            
          <center>  <div class="col-md-8">
        <div class="card card-header" style="background-color: black;color: white;">
        <h2>{{$showMovies->movie_title}}</h2>
        </div>
        <hr>
            <div>
                <img src="{{url('uploads/movie_photo', $showMovies->movie_photo)}}" width="200">
            </div>
        <div>
            <div class="row justify-content-center">
                <div class="col-md-4">
            <h4 class="mt-2 card" style="background-color: black;color: white;font-style: italic;">Desc:</h4>
            </div>
            </div>
            <!-- <hr> -->
            <div class=" row justify-content-center card card-header">
                <div class="col-md-12">
            <strong>{{$showMovies->movie_desc}}</strong>
            </div>
            </div>
        </div>
        <!-- <hr> -->
         <div class="row justify-content-center">
                <div class="col-md-6">
            <h4 class="mt-2 card" style="background-color: black;color: white;font-style: italic;">Screen Short Movie Clip:</h4>
            </div>
            </div>
        <div class="mt-2">
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