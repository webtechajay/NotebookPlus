@extends('layouts.app')


@section('content')



<section>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="card-header">
						Notes
						<div class="float-right">
							<a href="{{route('notes.createNote', $notebook->id)}}" class="btn btn-sm btn-primary">Add Note</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section>
    <div class="container mt-3">
        <div class="row">
            <div class="col-md-12">
	<div class="list-group notes-group">

        @foreach($notes as $note)
        <!--note1 -->
        <div class="card mt-3" style="padding: 10px;">
            <a href="{{route('notes.show', $note->id)}}">
                <h4 class="card-title">
                    {{$note->title}}
                </h4>
            </a>
            <p class="card-text">
                {{str_limit($note->body,150)}}
            </p>
            <div class="">
            <a class="btn btn-sm btn-info pull-xs-left" href="{{route('notes.edit', $note->id)}}">
                Edit
            </a>
            </div>
            <div class="mt-2">
            <form action="{{route('notes.destroy', $note->id)}}" class="pull-xs-right" method="POST">
               {{ csrf_field()}}
                {{ method_field('DELETE')}}
                <input class="btn btn-sm btn-danger" type="submit" value="Delete">
            </form>
            </div>
        </div>

        @endforeach
    </div>
    </div>
    </div>
    </div>
</section>


@endsection