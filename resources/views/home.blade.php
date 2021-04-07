@extends('layouts.app')
   
@section('content')


     

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="jumbotron" style="background-color: black;">
               <!-- <img src="{{asset('images/wlc.jpg')}}" width="20%" height="1%"> -->
               <center><strong style="font-size:40px;font-weight:1500;color: white;"><marquee>NoteBookPlus</marquee></strong></center>
            </div>
        </div>
    </div>
</div>

<section>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
            <div class="card">
            <div class="card-header" style="background-color:black;color: white;">
                Recently Added Notebook
                <div class="float-right">
                    <center><a href="{{url('/notebooks/create')}}" class="btn btn-sm btn-primary">Add Notebook</a></center>
                </div>
                <div class="float-right" style="margin-right: 10px;">
                    <center><a href="{{url('/notebooks')}}" class="btn btn-sm btn-primary">Show Notebook</a></center>
                </div>
            </div>
            </div>
            </div>
        </div>
      

        <div class="row">
            @foreach($notebooks as $notebook)
    <div class="col-sm-6 col-md-3 mt-3">
        <div class="card" style="padding: 10px;">
            <div class="card-block">
                <a href="{{route('notebooks.show', $notebook->id)}}">
                    <h4 class="card-title">
                        {{$notebook->notebook_name}}
                    </h4>
                </a>
            </div>
            <a href="{{route('notebooks.show', $notebook->id)}}">
                <img alt="Responsive image" class="img-fluid" src="{{asset('images/notebook.jpg')}}" />
            </a>
            <div class="card-block">
                <div class="mt-2">
                <a class="card-link btn btn-sm btn-primary" href="{{route('notebooks.edit',$notebook->id)}}">
                    Edit Notebook
                </a>
                </div>
                <div class="mt-2">
                <form action="{{route('notebooks.destroy', $notebook->id)}}" class="pull-xs-right5 card-link" method="POST"
                    style="display:inline">
                     {{ csrf_field()}}
                    {{ method_field('DELETE')}}
              
                    <input class="btn btn-sm btn-danger" type="submit" value="Delete">
                    </input>
                </form>
                </div>
            </div>
        </div>
    </div>
    @endforeach
        </div>

</div>
</section>

<section>
    <div class="container mt-3">
        <div class="row justify-content-center">
            <div class="col-md-12">
            <div class="card">
            <div class="card-header" style="background-color:black;color: white;">
                Recently Added Images
                <div class="float-right">
                    <center><a href="{{url('image/create')}}" class="btn btn-sm btn-primary">Add Images</a></center>
                </div>
                <div class="float-right" style="margin-right: 10px;">
                    <center><a href="{{url('image')}}" class="btn btn-sm btn-primary">Show Images</a></center>
                </div>
            </div>
            </div>
            </div>
        </div>
        <div class="row">
                @foreach($images as $image)
             <div class="col-sm-6 col-md-3 mt-3">
             <div>

        <a href="{{route('image.show', $image->id)}}"><img src="{{url('profile_images', $image->photo_name)}}" alt="Image"/ width="200"></a>
      
            </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<section>
    <div class="container mt-3">
        <div class="row justify-content-center">
            <div class="col-md-12">
            <div class="card">
            <div class="card-header" style="background-color:black;color: white;">
                Recently Added Movies
                <div class="float-right">
                    <center><a href="{{url('admin/show_recently_add_movies')}}" class="btn btn-sm btn-primary">Show More</a></center>
                </div>
            </div>
            </div>
            </div>
        </div>
        <div class="row justify-content-center">
                @foreach($moviesImages as $movies)
             <div style="margin:10px;width:150px;height:330px;" class="card">
             <div class="row" >
                <div class="col-sm-2">
        <a href="{{route('movie.show', $movies->id)}}"><img src="{{url('uploads/movie_photo', $movies->movie_photo)}}" alt="Image"/ width="150"></a>
      </div>
            </div>
            <div class=" col-sm-8 mt-2">
            <strong style="font-style:italic;display:flex;flex-wrap:wrap;">{{$movies->movie_name}}</strong>
            </div>
            </div>
            @endforeach
        </div>
    </div>
</section>


<section>
    <div class="container mt-3">
        <div class="row justify-content-center">
            <div class="col-md-12">
            <div class="card">
            <div class="card-header" style="background-color:black;color: white;">
              Bollywood Action Movies
                <div class="float-right">
                    <center><a href="{{url('admin/show_bollywood_action_movies')}}" class="btn btn-sm btn-primary">Show More</a></center>
                </div>
            </div>
            </div>
            </div>
        </div>
        <div class="row justify-content-center">
                @foreach($BollywoodActionMovies as $movies)
             <div style="margin: 10px;width:150px;height:330px;" class="movie_name card">
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

<section>
    <div class="container mt-3">
        <div class="row justify-content-center">
            <div class="col-md-12">
            <div class="card" >
            <div class="card-header" style="background-color:black;color: white;">
                Bollywood Romance Movies
                <div class="float-right">
                    <center><a href="{{url('admin/show_bollywood_romance_movies')}}" class="btn btn-sm btn-primary">Show More</a></center>
                </div>
            </div>
            </div>
            </div>
        </div>
        <div class="row justify-content-center">
                @foreach($bollywooodRomanceMovies as $movies)
             <div style="margin: 10px;width:150px;height:330px;" class="movie_name card">
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

<section>
    <div class="container mt-3">
        <div class="row justify-content-center">
            <div class="col-md-12">
            <div class="card" >
            <div class="card-header" style="background-color:black;color: white;">
                Bollywood Comedy Movies
                <div class="float-right">
                    <center><a href="{{url('admin/show_bollywood_comedy_movies')}}" class="btn btn-sm btn-primary">Show More</a></center>
                </div>
            </div>
            </div>
            </div>
        </div>
        <div class="row justify-content-center">
                @foreach($BollywoodComedyMovies as $movies)
             <div style="margin: 10px;width:150px;height:330px;" class="movie_name card">
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

<section>
    <div class="container mt-3">
        <div class="row justify-content-center">
            <div class="col-md-12">
            <div class="card">
            <div class="card-header" style="background-color:black;color: white;">
                Hollywood Action Movies
                <div class="float-right">
                    <center><a href="{{url('admin/show_hollywood_action_movies')}}" class="btn btn-sm btn-primary">Show More</a></center>
                </div>
            </div>
            </div>
            </div>
        </div>
        <div class="row justify-content-center">
                @foreach($hollywooodActionMovies as $movies)
             <div style="margin:10px;width:150px;height:330px;" class="movie_name card">
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

<section>
    <div class="container mt-3">
        <div class="row justify-content-center">
            <div class="col-md-12">
            <div class="card">
            <div class="card-header" style="background-color:black;color: white;">
                Hollywood Romance Movies
                <div class="float-right">
                    <center><a href="{{url('admin/show_hollywood_romance_movies')}}" class="btn btn-sm btn-primary">Show More</a></center>
                </div>
            </div>
            </div>
            </div>
        </div>
        <div class="row justify-content-center">
                @foreach($hollywoodRomanceMovies as $movies)
             <div style="margin:10px;width:150px;height:330px;" class="movie_name card">
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

<section>
    <div class="container mt-3">
        <div class="row justify-content-center">
            <div class="col-md-12">
            <div class="card">
            <div class="card-header" style="background-color:black;color: white;">
                Hollywood Comedy Movies
                <div class="float-right">
                    <center><a href="{{url('admin/show_hollywood_comedy_movies')}}" class="btn btn-sm btn-primary">Show More</a></center>
                </div>
            </div>
            </div>
            </div>
        </div>
        <div class="row justify-content-center">
                @foreach($hollywooodComedyMovies as $movies)
             <div style="margin: 10px;width:150px;height:330px;" class="movie_name card">
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
