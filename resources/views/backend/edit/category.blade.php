@extends('backend.master')

@section('content')

   <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{url('admin')}}">Home</a></li>
              <li class="breadcrumb-item active">Edit Category</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->

        <section class="content">

          <div class="row">
              @if(Session::has('message'))

              <div class="col-sm-12">
                <div class="alert alert-success alert-dismissable">
                  {{ session::get('message')}}
                  <a class="close" data-dismiss="alert">&times</a>
                </div> 
              </div>
              @endif
    <div class="col-sm-6">
    	<form method="post" action="{{URL('updatecategory')}}/{{$maindata->id}}">
        {{ csrf_field() }}
        <input type="hidden" name="tbl" value="{{encrypt('categories')}}">
        <input type="hidden" name="id" value="{{$maindata->id}}">
    		<div class="form-group">
    			<label>Title</label>
    			<input type="text" name="title" value="{{$maindata->title}}"  class="form-control">
    		</div>
    		<div class="form-group">
    			<label>Status</label>
          <select class="form-control" name="status">
            <option>{{$maindata->status}}</option>
            @if($maindata->status == 'off')
            <option>on</option>
            @else
            <option>off</option>
            @endif
          </select> 
    		</div>
    		
        <div class="form-group">
          <button class="btn btn-success">Add Category</button> 
        </div>
    	</form>
    	</div>
      
      <div class="col-sm-6">
        <table class="table table-striped table-hover">
          <p><strong> View All Categores</strong></p>
          <thead>
            <tr>
              <th>Sl</th>
              <th>Title</th>
              <th>Status</th>
              <th>Active</th>
            </tr>
          </thead>

          <tbody>
            @foreach($data as $key=>$category)
            <tr>
              <td>{{++$key}}</td>
              <td>{{$category->title}}</td>
              <td>{{$category->status}}</td>
              <td><a href="{{url('editCategory')}}/{{$category->id}}" class="btn btn-sm btn-success"><i class="fa fa-edit"></i></a>
              <a href="{{url('deleteCategory')}}/{{$category->id}}" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a> </td>
            </tr>
            @endforeach
          </tbody>
          
        </table>
        
      </div>

    	</div>
      </div>
      </div>
      </section>
@endsection