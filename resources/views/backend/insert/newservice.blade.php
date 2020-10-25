@extends('backend.master')

@section('content')

   <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">
            <h1 class="m-0 text-dark">Add New Service</h1>
          </div><!-- /.col -->
          <div class="col-sm-12">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{url('admin')}}">Home</a></li>
              <li class="breadcrumb-item active">Add New Service</li>
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
    	<form method="post" action="{{URL('addService')}}">
        {{ csrf_field() }}
        <input type="hidden" name="tbl" value="{{encrypt('services')}}">
    		

    		<div class="form-group">
    			<label>Title</label>
    			<input type="text" name="title"  class="form-control">
    		</div>

    		<div class="form-group">
    			<label>Description</label>
          <textarea name="description" class="form-control" rows="10"></textarea>
    		</div>

        <div class="form-group">
        <label>Icon</label>
              <input type="text" name="icon" class="form-control">
        </div>

        <div class="form-group">

        <label>Status</label>
          <select class="form-control" name="status">
            <option>on</option>
            <option>off</option>
          </select> 
        </div>
          
        
        <div class="form-group">
          <button class="btn btn-success">Add Service</button>
          
        </div>




    	</form>



    	</div>

       
    			
    	</div>


      </div>

  
      
      </div>



      </section>
    

@endsection