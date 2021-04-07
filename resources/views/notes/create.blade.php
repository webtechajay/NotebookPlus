@extends('layouts.app')

@section('content')

<section>
	<div class="container">
		<div class="row">
			@if(count($errors)>0)
			<ul>
			@foreach($errors->all() as $error)
			<li class="alert alert-danger">{{$error}}</li>
			@endforeach
			</ul>

			@endif

			<div class="col-md-12">

				<div class="card">
					<div class="card-header" style="background-color:black;color: white;">
						Add Note
					</div>
				</div>

				<form action="{{route('notes.store')}}" method="post">
					{{ csrf_field()}}
				<div class="form-group mt-3">
				<label for="title">Title</label>
            	<input type="text" name="title" class="form-control" placeholder="Enter Title">
				</div>

					<div class="form-group">
					<label for="body">Desc</label>
					<textarea placeholder="desc" class="form-control" id="body" name="body" rows="3"></textarea>
					</div>
					<input type="hidden" name="notebook_id" value="{{$id}}">

				<button type="submit" class="btn btn-primary">Submit</button>
				</form>
			</div>
		</div>
	</div>
</section>

@endsection