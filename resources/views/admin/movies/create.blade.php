@extends('admin.layouts.master')

@section('content')
 
<section class="content mt-3">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Add Movie</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="post" action="{{url('admin/store_movie')}}" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="card-body">
                  <div class="form-group">
                    <label for="movie_name">Movie Name</label>
                    <input type="text" class="form-control" id="movie_name" name="movie_name" placeholder="Enter Movie Name">
                  </div>
                  <div class="form-group">
                    <label for="movie_photo">Movie Photo</label>
                    <input type="file" class="form-control" id="movie_photo" name="movie_photo" placeholder="Enter Movie Photo">
                  </div>
                  <div class="form-group">
                    <label for="movie_desc">Movie Desc</label>
                    <!-- <input type="file" class="form-control" id="movie_image" name="movie_image" placeholder="Enter Movie Image"> -->
                    <textarea class="form-control" id="movie_desc" name="movie_desc" placeholder="Enter Movie Desc"></textarea>
                  </div>
                  <div class="form-group">
                    <label for="movie_screen_short">Movie Screen Short</label>
                    <input type="file" class="form-control" id="movie_screen_short" name="movie_screen_short" placeholder="Enter Movie SS">
                  </div>
                  <div class="form-group">
                    <label for="movie_dawnload_photo">Movie Dawnload Photo</label>
                    <input type="file" class="form-control" id="movie_dawnload_photo" name="movie_dawnload_photo" placeholder="Enter Movie Dawnload Photo">
                  </div>
                  <div class="form-group">
                    <label for="movie_source">Movie Source</label>
                    <input type="text" class="form-control" id="movie_source" name="movie_source" placeholder="Enter Movie Source">
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