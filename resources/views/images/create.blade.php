@extends('layouts.app')


@section('content')

<section>
    <div class="container mt-3">
      
      @if(count($errors)>0)
      <ul>
      @foreach($errors->all() as $error)
      <li class="alert alert-danger">{{$error}}</li>
      @endforeach
      </ul>

      @endif
        <div class="row justify-content-center">
            <div class="col-md-12">
            <div class="card">
            <div class="card-header">
               Images
                <div class="float-right">
                    <center><a href="{{url('image')}}" class="btn btn-sm btn-primary">Add Images</a></center>
                </div>
            </div>
            </div>
            </div>
        </div>
        <div class="row">
          
            <div class="col-md-12 mt-3">
        <form method="post" action="{{url('image')}}" enctype="multipart/form-data">
        {{ csrf_field()}}
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
          <input type="file" name="profileImage[]" class="form-control" multiple="" style="padding:3px;">
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
          <button type="submit" class="btn btn-success" style="margin-top:10px">Upload Image</button>
          </div>
        </div>
        
  </form>
            </div>
        </div>
    </div>
</section>



@endsection