@extends('layouts.app')


@section('content')

<section>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="card-header" style="background-color:black;color: white;">
						Notebooks
						<div class="float-right">
							<a href="{{url('/notebooks/create')}}" class="btn btn-sm btn-primary">Add NoteBook</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section>
	<div class="container text-center">
		<div class="row">
			@foreach($notebooks as $notebook)
    <div class="col-sm-6 col-md-3 mt-3">
        <div class="card" style="padding: 10px;">
            <div class="card-block">
                <a href="{{route('notebooks.show', $notebook->id)}}">
                    <h4 class="card-title">
                        {{$notebook->notebook_name}}
                    </h4>
                </a>
            </div>
            <a href="{{route('notebooks.show', $notebook->id)}}">
                <img alt="Responsive image" class="img-fluid" src="{{asset('images/notebook.jpg')}}" />
            </a>
            <div class="card-block">
                <div class="mt-2">
                <a class="card-link btn btn-sm btn-primary" href="{{route('notebooks.edit',$notebook->id)}}">
                    Edit Notebook
                </a>
                </div>
                <div class="mt-2">
                <form action="{{route('notebooks.destroy', $notebook->id)}}" class="pull-xs-right5 card-link" method="POST"
                    style="display:inline">
                     {{ csrf_field()}}
                    {{ method_field('DELETE')}}
              
                    <input class="btn btn-sm btn-danger" type="submit" value="Delete">
                    </input>
                </form>
                </div>
            </div>
        </div>
    </div>
    @endforeach
		</div>
	</div>
</section>

@endsection