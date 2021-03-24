@extends('layouts.app')

@section('content')

<div class="container">
	
    <div class="row">
        <div class="col-md-12">
    	<div class="card card-header">
        <h3 class="display-3">

            {{$note->title}}
        </h3>

        <p>
            {{$note->body}}
        </p>
        </div>
        </div>
    </div>
</div>

@endsection