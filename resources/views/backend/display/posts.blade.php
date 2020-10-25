@extends('backend.master')

@section('content')

   <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">All Posts</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{url('admin')}}">Home</a></li>
              <li class="breadcrumb-item active">All Post</li>
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
      <div class="col-sm-12">
        <table class="table table-striped table-hover">
          <thead>
            <tr>
              <th>Sl</th>
              <th>Title</th>
              <th>Featured Image </th>
              <th>Category</th>
              <th>Status</th>
              <th>Active</th>
            </tr>
          </thead>

          <tbody>
            @foreach($data as $key=>$post)
            <tr>
              <td>{{++$key}}</td>
              <td>{{$post->title}}</td>
             
               <td>
               @if($post->image)
               <img src="{{url('public/contents')}}/{{$post->image}}" width="50"> 
               @endif
               </td>
              
              <td>{{$post->category}}</td>
              <td>{{$post->status}}</td>
              <td><a href="{{url('editPost')}}/{{$post->conid}}" class="btn btn-sm btn-success"><i class="fa fa-edit"></i></a>
              <a href="{{url('deletePost')}}/{{$post->conid}}" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a> </td>
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