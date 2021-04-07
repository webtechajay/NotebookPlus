@extends('layouts.app')

@section('content')

<section>
	<div class="container">
		<div class="row">
			<div class="col-md-12">

				<div class="card">
					<div class="card-header" style="background-color:black;color: white;">
						Add Notebook
					</div>
				</div>

				<form action="{{url('/notebooks')}}" method="post">
					{{ csrf_field()}}
				<div class="form-group mt-3">
				<label for="notebookName">Notebook Name</label>
            	<input type="text" name="notebook_name" class="form-control" placeholder="Enter Notebook Name">
				
				</div>
				<button type="submit" class="btn btn-primary">Submit</button>
				</form>
			</div>
		</div>
	</div>
</section>

@endsection