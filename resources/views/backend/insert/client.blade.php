@extends('backend.master')

@section('content')

   <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Add New Client</h1>
          </div><!-- /.col -->
          <div class="col-sm-12">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{url('admin')}}">Home</a></li>
              <li class="breadcrumb-item active">Add New Client</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->

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
    	<form method="post" action="{{URL('addClient')}}" enctype="multipart/form-data">
        {{ csrf_field() }}
        <input type="hidden" name="tbl" value="{{encrypt('clients')}}">
        <div class="form-group">
    			<p><input type="file"  accept="image/*" name="image" id="file"  onchange="loadFile(event)" style="display: none;"></p>
          <p><label for="file" style="cursor: pointer;">Featured Image</label></p>
          <p><img id="output"/></p>
          </div>
          <div class="form-group">
    			<label>Link</label>
    			<input type="text" name="link"  class="form-control">
    		</div>
        <div class="form-group">

        <label>Status</label>
          <select class="form-control" name="status">
            <option>on</option>
            <option>off</option>
          </select> 
        </div>
        <div class="form-group">
          <button class="btn btn-success">Add Client</button>
          
        </div>




    	</form>


      </div>

    	

      <div class="col-sm-6">
        <table class="table table-bordered">
          <p><strong> View All Client</strong></p>
          <thead>
            <tr>
              <th>Sl</th>
              <th>Image</th>
              <th>Link</th>
              <th>Status</th>
              <th>Active</th>
            </tr>
          </thead>

          <tbody>
          @if(count($data) > 0)
            @foreach($data as $key=>$client)
            <tr>
              <td>{{++$key}}</td>
              <td><img src="{{url('public/clients')}}/{{$client->image}}"></td>
              <td>{{$client->link}}</td>
              <td>{{$client->status}}</td>
              <td><a href="{{url('editclient')}}/{{$client->clid}}" class="btn btn-sm btn-success"><i class="fa fa-edit"></i></a>
              <a href="{{url('deleteclient')}}/{{$client->clid}}" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a> </td>
            </tr>
            @endforeach
            @else
              <tr>
                 <td colspan="4">No Clients Founds</td>
              </tr>
              @endif
          </tbody>
          
        </table>
        
      </div>
      </div>
      </div>
      </div>
      </section>

 <script>
        var loadFile = function(event){
        var image = document.getElementById('output');
        image.src = URL.createObjectURL(event.target.files[0]);
      };
     
    </script>

    <style>
     .table{
       background: #808000;
       color: #FFFF00;
     }
    </style>

    	
    

@endsection