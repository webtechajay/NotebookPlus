
<!-- <section>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
            <div class="card">
            <div class="card-header">
                Recently Added Notebook
                <div class="float-right">
                    <center><a href="{{url('/notebooks')}}" class="btn btn-sm btn-primary">Add Notebook</a></center>
                </div>
            </div>
            </div>
            </div>
        </div>
      

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

<section>
    <div class="container mt-3">
        <div class="row justify-content-center">
            <div class="col-md-12">
            <div class="card">
            <div class="card-header">
                Recently Added Images
                <div class="float-right">
                    <center><a href="{{url('image')}}" class="btn btn-sm btn-primary">Add Images</a></center>
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
</section> -->