
@extends('layouts.app')

@section('content')

<div class="container">
         @if(isset($showMovies))
        
                 @foreach($showMovies as $movies)

                 <div style="margin:10px;">
                    <h3 style="font-style: italic;font-weight:700;tn"> {{$movies->movie_name}} movie search result here:</h3>
                    <hr>
             <div class="row">
                
                <div class="col-md-12">
        <a href="{{route('movie.show', $movies->id)}}"><img src="{{url('uploads/movie_photo', $movies->movie_photo)}}" alt="Image"/ width="150"></a>
      </div>
            </div>
            <div class=" col-sm-8 mt-2">
            <strong style="font-style: italic;">{{$movies->movie_name}}</strong>
            </div>
            <hr>
            <div class=" col-sm-8 mt-2">
            <strong style="font-style: italic;">{{$movies->movie_desc}}</strong>
            </div>
            </div>

                 @endforeach
           
         @elseif(isset($message))
         <p>{{ $message }}</p>
         @endif
     </div>

@endsection