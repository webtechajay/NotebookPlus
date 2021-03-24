@extends('admin.layouts.master')

@section('content')
 
  <section class="content mt-3">

    <div class="container">
      <div class="row">
        <div class="col-md-12">
        <div class="card card-primary">
        <div class="card-header">
                <h3 class="card-title">View Company</h3>
              </div>
             </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Id</th>
                    <th>Industry Name</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach($viewIndustries as $key=>$industry)
                  <tr>
                    <td>{{$key+1}}</td>
                    <td>{{$industry->industry_name}}</td>
                    <td>
                      <a href="{{url('admin/edit_industry', $industry->id)}}" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></a>
                      <a href="{{url('admin/delete_industry', $industry->id)}}" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
                      <a href="{{url('admin/show_industry', $industry->id)}}" class="btn btn-sm btn-secondary"><i class="fa fa-eye"></i></a>
                    </td>
                  </tr>
                  @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
           
        </div>
      </div>
    </div>

</section>


@endsection