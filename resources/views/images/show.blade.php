@extends('layouts.app')

@section('content')

<div class="container">
        <div class="row">
               
             <div class="col-md-12">
            <div class="mt-2">
            <form action="{{route('image.destroy', $images->id)}}" class="pull-xs-right" method="POST">
               {{ csrf_field()}}
                {{ method_field('DELETE')}}
                <input class="btn btn-sm btn-danger" type="submit" value="Delete">
            </form>
            </div>
             <center><div>

                <img src="{{url('profile_images', $images->photo_name)}}" width="600">


            </div></center>
            
            </div>
        
        </div>
</div>

@endsection