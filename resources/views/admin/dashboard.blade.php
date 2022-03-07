@extends('admin.master')
@section('content')

    <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-dashboard"></i> Dashboard</h1> 
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><a  href="/admin/dashboard"><i class="fa fa-home fa-lg"></i></a></li> 
        </ul>
      </div>
      <div class="row">
      <div class="col-md-6 col-lg-3">
          <div class="widget-small warning coloured-icon"><i class="icon fa fa-home fa-3x"></i>
            <div class="info">
              <h4>Apartments</h4>
              <p><b>{{$apartment}}</b></p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="widget-small primary coloured-icon"><i class="icon fa fa-users fa-3x"></i>
            <div class="info">
              <h4>Users</h4>
              <p><b>{{$users}}</b></p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="widget-small danger coloured-icon"><i class="icon fa fa-star fa-3x"></i>
            <div class="info">
              <h4>Bookings</h4>
              <p><b>{{$booking}}</b></p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="widget-small info coloured-icon"><i class="icon fa fa-table fa-3x"></i>
            <div class="info">
              <h4>Category</h4>
              <p><b>{{$category}}</b></p>
            </div>
          </div>
        </div> 
         <div class="col-md-6 col-lg-3">
          <div class="widget-small danger coloured-icon"><i class="icon fa fa-image fa-3x"></i>
            <div class="info">
              <h4>Gallery</h4>
              <p><b>{{$gallery}}</b></p>
            </div>
          </div>
        </div>
      </div> 
    </main>

@endsection

