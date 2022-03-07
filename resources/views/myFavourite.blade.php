@extends('master')
@section('content')

    <!-- ====== Page Header ====== -->
    <div class="page-header default-template-gradient">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="page-title">Choose Apartment</h2>
                    <p class="page-description">Choose An Apartment For Booking</p>
                </div><!-- /.col-md-12 -->
            </div><!-- /.row-->
        </div><!-- /.container-fluid -->
    </div><!-- /.page-header -->

    <!-- ====== Breadcrumbs Area======= -->
    <div class="breadcrumbs-area bg">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumbs">
                        <span class="first-item">
                         <a href="/home">Home</a></span>
                        <span class="separator">&gt;</span>
                        <span class="last-item">Apartment List For Booking</span>
                    </div>
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.breadcrumbs-area -->

    <!-- ====== Apartments-area ====== -->
    <div class="apartments-area four bg-gray-color">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                     
                    <div class="card-group">
                        @foreach ($apartment as $apt)
                            <div class="card mb-4">
                                <a href="/apartment-details/{{ $apt->id }}"><img style="width: 750px; height: 549px;" class="img img-rounded img-responsive" src="{{ asset('uploads/'.$apt->image) }}" alt="apartment" /></a>
                                <div class="card-body">
                                    <div class="text-center top-content">
                                        <h4 class="card-title"><a href="/apartment-details/{{ $apt->id }}">{{ $apt->title }}</a></h4>
                                        <span>
                                            <i class="fa fa-map-marker"></i>
                                            {{ $apt->location }}
                                        </span>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <p class="justify-content-between mb-10 icon">
                                        <i class="fa fa-bed"></i> <span> {{ $apt->bedroom }} </span>
                                        <span class="meta-bed-room"> </span>
                                        <i class="fa fa-bath"></i> <span> {{ $apt->bathroom }} </span>
                                    </p>
                                    <div class="rent-price pull-left ">
                                        {{ $apt->price }}
                                    </div>
                                    <div class="share-meta dropup pull-right">
                                        <ul>
                                            <li class="dropup">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-share-alt"></i></a>
                                                <ul class="dropdown-menu">
                                                    <li>
                                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="#"><i class="fa fa-instagram"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="#"><i class="fa fa-google-plus"></i></a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                            <a href="/removeFavourite/{{ $apt->id }}"><i class="fa fa-star"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        @endforeach


                    </div>

                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.Apartments-area-->
 

@endsection
