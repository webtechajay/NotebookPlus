@extends('layouts.app')


@section('content')

<section>
    <div class="container mt-3">
        <div class="row justify-content-center">
            <div class="col-md-12">
            <div class="card">
            <div class="card-header">
               Images
                <div class="float-right">
                    <center><a href="{{url('image/create')}}" class="btn btn-sm btn-primary">Add Images</a></center>
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



@endsection