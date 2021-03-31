@extends('admin.layouts.master')

@section('content')
 
  <section class="content mt-3">

    <div class="container">
      <div class="row">
        <div class="col-md-12">
        <div class="card card-primary">
        <div class="card-header">
                <h3 class="card-title">View Movies</h3>
              </div>
             </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Id</th>
                    <th>Movie Title</th>
                    <th>Movie Name</th>
                    <th>Movie photo</th>
                    <th>Movie Desc</th>
                    <th>Movie ss</th>
                    <th>Movie Dawnload Photo</th>
                    <th>Movie Source</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach($viewMovies as $key=>$movies)
                  <tr>
                    <td>{{$key+1}}</td>
                    <td>{{str_limit($movies->movie_title, 5)}}</td>
                    <td>{{$movies->movie_name}}</td>
                    <td>
          @if(!empty($movies->movie_photo))
          <img src="{{asset('/uploads/movie_photo/'.$movies->movie_photo)}}" alt="" style="width:50px;">
          @endif
                    </td>
                    <td>{{str_limit($movies->movie_desc,5)}}</td>
                    <td>
          @if(!empty($movies->movie_screen_short))
          <img src="{{asset('/uploads/movie_screen_short/'.$movies->movie_screen_short)}}" alt="" style="width:50px;">
          @endif
                    </td>
                    <td>
          @if(!empty($movies->movie_dawnload_photo))
          <img src="{{asset('/uploads/movie_dawnload_photo/'.$movies->movie_dawnload_photo)}}" alt="" style="width:50px;">
          @endif
                    </td>
                    <td>{{str_limit($movies->movie_source,5)}}</td>
                    <td>
                      <a href="{{url('admin/edit_movie', $movies->id)}}" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></a>
                      <a href="{{url('admin/delete_movie', $movies->id)}}" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
                      <!-- <a href="" class="btn btn-sm btn-secondary"><i class="fa fa-eye"></i></a> -->
                    </td>
                  </tr>
                  @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
           
        </div>
      </div>
    </div>

</section>


@endsection