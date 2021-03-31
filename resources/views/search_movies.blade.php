
@extends('layouts.app')

@section('content')

<div class="container">
         @if(isset($showMovies))
        
                 @foreach($showMovies as $movies)

                 <div style="margin:10px;">
             <div class="row">
                <div class="col-sm-6">
        <a href="{{route('movie.show', $movies->id)}}"><img src="{{url('uploads/movie_photo', $movies->movie_photo)}}" alt="Image"/ width="150"></a>
      </div>
            </div>
            <div class=" col-sm-8 mt-2">
            <strong style="font-style: italic;">{{$movies->movie_name}}</strong>
            </div>
            </div>

                 @endforeach
           
         @elseif(isset($message))
         <p>{{ $message }}</p>
         @endif
     </div>

@endsection