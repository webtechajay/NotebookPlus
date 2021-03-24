@extends('admin.layouts.master')

@section('content')
 
<section class="content mt-3">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Show Industry</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="post" action="">
                {{ csrf_field() }}
                <div class="card-body">
                  <div class="form-group">
                    <label for="industry_name">Industry Name</label>
                    <input type="text" value="{{$showIndustries->industry_name}}" class="form-control" id="industry_name" name="industry_name" placeholder="Enter Industry Name" readonly="">
                  </div>
                </div>
                <!-- /.card-body -->

               <!--  <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div> -->
                
              </form>
            </div>
      </div>
    </div>
  </div>
</section>


@endsection