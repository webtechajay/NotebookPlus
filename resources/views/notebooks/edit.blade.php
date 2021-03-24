@extends('layouts.app')

@section('content')

<section>
	<div class="container">
		<div class="row">
			<div class="col-md-12">

				<div class="card">
					<div class="card-header">
						Edit Notebook
					</div>
				</div>

				<form action="{{route('notebooks.update', $notebook->id)}}" method="post">
					{{ csrf_field()}}
					{{method_field('PUT')}}
				<div class="form-group mt-3">
				<label for="notebookName">Notebook Name</label>
            	<input type="text" name="notebook_name" value="{{$notebook->notebook_name}}" class="form-control" placeholder="Enter Notebook Name">
				
				</div>
				<button type="submit" class="btn btn-primary">Submit</button>
				</form>
			</div>
		</div>
	</div>
</section>

@endsection