@extends('backend.master')

@section('content')

   <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">
            <h1 class="m-0 text-dark">Add New Portfolio</h1>
          </div><!-- /.col -->
          <div class="col-sm-12">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{url('admin')}}">Home</a></li>
              <li class="breadcrumb-item active">Add New Portfolio</li>
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
    	<form method="post" action="{{URL('addPortfolio')}}" enctype="multipart/form-data">
        {{ csrf_field() }}
        <input type="hidden" name="tbl" value="{{encrypt('portfolios')}}">
    		

    		<div class="form-group">
    			<label>Title</label>
    			<input type="text" name="title"  class="form-control">
    		</div>
        
        <div class="form-group">
    			<p><input type="file"  accept="image/*" name="image" id="file"  onchange="loadFile(event)" style="display: none;"></p>
          <p><label for="file" style="cursor: pointer;">Featured Image</label></p>
          <p><img id="output"/></p>
        </div>

    		<div class="form-group">
        <label>Category</label>
          <select class="form-control" name="category">
          @foreach($cats as $cat)
            <option>{{$cat->title}}</option>
          @endforeach
          <option>home</option>
          </select> 
        </div>

    
        <div class="form-group">

        <label>Status</label>
          <select class="form-control" name="status">
            <option>on</option>
            <option>off</option>
          </select> 
        </div>
          
        
        <div class="form-group">
          <button class="btn btn-success">Add Portfolio</button>    
        </div>
    	</form>
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

    	
    

@endsection