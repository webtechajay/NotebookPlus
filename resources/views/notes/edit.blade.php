@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Note</h1>

    <form method="post" action="{{route('notes.update', $note->id)}}">
        {{ csrf_field()}}
        {{method_field('PUT')}}
        <div class="form-group">

            <label for="title">Note Title</label>
            <input type="text" name="title" value="{{$note->title}}" class="form-control"
                placeholder="Enter Note Title">

        </div>

            <div class="form-group">
            <label for="body">Desc</label>
            <textarea placeholder="desc" class="form-control" id="body" name="body" rows="3">{{$note->body}}</textarea>
            </div>

        <!-- <input type="hidden" name="notebook_id" value=""> -->

        <input type="submit" value="Update" class="btn btn-primary">

    </form>
</div>

@endsection