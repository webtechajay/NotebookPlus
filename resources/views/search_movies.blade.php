
@extends('layouts.app')

@section('content')

<div class="container">
         @if(isset($showMovies))
        
                 @foreach($showMovies as $movies)
                    <div class="card card-header" style="margin-top:15px;background-color: black;color: white;">
                    <h3 style="font-style: italic;font-weight:700;"> {{$movies->movie_name}} movie search result here:</h3>
                    </div>
                    
                 <div  class="card card-header" style="border:1px solid lightgrey;">
             <div class="row">
             <div class="col-md-2">
        <a href="{{route('movie.show', $movies->id)}}"><img src="{{url('uploads/movie_photo', $movies->movie_photo)}}" alt="Image"/ width="150"></a>
      </div>
      <div class="col-md-10">
          <h4 style="font-weight:1000;font-style: italic;">Desc:</h4>
            <strong style="font-style: italic;font-size:15px;">{{$movies->movie_desc}}</strong>
      </div>
            </div>

            <div class="row">
            <div class=" col-sm-8 mt-2">
            <strong style="font-style: italic;">{{$movies->movie_name}}</strong>
            </div>
            </div>

            </div>

                 @endforeach
           
         @elseif(isset($message))
         <p>{{ $message }}</p>
         @endif
     </div>

@endsection