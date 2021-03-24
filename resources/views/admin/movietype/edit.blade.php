@extends('admin.layouts.master')

@section('content')
 
<section class="content mt-3">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Edit Movie Type</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="post" action="{{url('admin/update_movie_type', $editMovieTypes->id)}}">
                {{ csrf_field() }}
                <div class="card-body">
                  <div class="form-group">
                    <label for="movie_type_name">Movie Type Name</label>
                    <input type="text" class="form-control" value="{{$editMovieTypes->movie_type_name}}" id="movie_type_name" name="movie_type_name" placeholder="Enter Movie Type Name">
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
      </div>
    </div>
  </div>
</section>


@endsection