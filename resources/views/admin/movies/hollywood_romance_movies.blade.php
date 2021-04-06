@extends('layouts.app')
   
@section('content')



<section>
    <div class="container mt-3">
        <div class="row justify-content-center">
            <div class="col-md-12">
            <div class="card">
            <div class="card-header">
               Hollywood Romance Movies
               <!--  <div class="float-right">
                    <center><a href="{{url('image')}}" class="btn btn-sm btn-primary">Show More</a></center>
                </div> -->
            </div>
            </div>
            </div>
        </div>
        <div class="row">
                @foreach($hollywoodRomanceMovies as $movies)
             <div style="margin:10px;" class="movie_name">
             <div class="row">
                <div class="col-sm-2">
        <a href="{{route('movie.show', $movies->id)}}"><img src="{{url('uploads/movie_photo', $movies->movie_photo)}}" alt="Image"/ width="150"></a>
      </div>
            </div>
            <div class=" col-sm-8 mt-2">
            <strong style="font-style: italic;">{{$movies->movie_name}}</strong>
            </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

@endsection