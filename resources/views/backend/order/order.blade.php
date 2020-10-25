@extends('backend.layouts.master')
@section('content')
 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Manage Order</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">User</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
<section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <section class="col-sm-12">
            <!-- Custom tabs (Charts with tabs)-->
            <div class="card">
              
              <div class="card-body">
              	<table id="example1" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>SL</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Contact</th>
                  <th>Category Select</th>

                  <th>City</th>
                  <th>incoterms</th>
                  <th>weight</th>
                  <th>height</th>
                  <th>width</th>
                  <th>length</th>
                  <th>status</th>
                  
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>

           @foreach($alldata as $key => $order)
                <tr>
                  <td>{{$key+1}}</td>
                  <td>{{ $order->name}}</td>
                  <td>{{ $order->email}}</td>
                  <td>{{ $order->contact}}</td>
                  <td>{{ $order->categoryselect}}</td>
                  <td>{{ $order->city}}</td>
                  <td>{{ $order->incoterms}}</td>
                  <td>{{ $order->weight}}</td>
                  <td>{{ $order->height}}</td>
                  <td>{{ $order->width}}</td>
                  <td>{{ $order->length}}</td>
                  <td>
                    @if($order->status=='0')
                    <span style="background: #FC4236;padding: 5px">Pending</span>
                    @elseif($order->status=='1')
                    <span style="background: #5EAB00;padding: 5px">Approved</span>
                    @endif
                  </td>
                  
                  <td>
                    @if($order->status=='0')
                  	<a href="{{ route('communicate.delete',$order->id)}}" id="delete" class="btn btn-sm btn-danger" title="delete"><i class="fa fa-trash"></i></a>
                    @endif
                  </td>
                </tr>
            @endforeach

                </tbody>
                
              </table>

              </div>
            </div>
            </div>
          </section>
          <!-- /.Left col -->
          <!-- right col (We are only adding the ID to make the widgets sortable)-->
          <section class="col-lg-5 connectedSortable">
               </div>
            </div>
          </section>
          <!-- right col -->
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
@endsection