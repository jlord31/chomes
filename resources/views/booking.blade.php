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
                    <div class="apartment-tab-area">

                        <ul role="tablist" class="nav nav-tabs apartment-menu hidden-xs hidden-sm">

                            <li class="active">
                                {{-- <input /> --}}
                                <a href="#popular-apartment" role="tab" data-toggle="tab">All</a>
                            </li>
                            <li>
                                <a href="#newest-to-oldest" role="tab" data-toggle="tab">Date<span>Newest to oldest</span></a>
                            </li>
                            <li>
                                <a href="#oldest-to-newest" role="tab" data-toggle="tab">Date <span>Older to newest</span> </a>
                            </li>
                            <li>
                                <a href="#price-high-to-low" role="tab" data-toggle="tab">Price<span>Low to high</span></a>
                            </li>
                            <li>
                                <a href="#price-low-to-high" role="tab" data-toggle="tab">Price<span>high to low</span></a>
                            </li>
                            <li class="pull-right">
                                <a href="#" role="tab" class="dropdown-toggle" data-toggle="dropdown">Category<i class="fa fa-angle-down"></i></a>
                             
                                <ul class="dropdown-menu">
                                    @foreach ($category as $cat)
                                        <li><a href="/booking/{{$cat->name}}" id="{{ $cat->name }}" name="{{ $cat->name }}" >{{ $cat->name }}</a></li>
                                    @endforeach
                                </ul>
                            </li><!-- /.pull-right --> 
                        </ul>
                        <form class="hidden-md hidden-lg">
                            <select class="apartment-menu-mobile">
                                <option value='0'>All</option>
                                <option value='1'>Date Newest to oldest</option>
                                <option value='2'>Date Older to newest</option>
                                <option value='3'>Price Low to high </option>
                                <option value='4'>Price high to low</option>
                                <optgroup label="Category">

                                    @foreach ($category as $cat)
                                        <option value='/booking/{{$cat->name}}' onselect="window.location.href=this.value" >{{ $cat->name }} </option>
                                    @endforeach

                                </optgroup>
                            </select>
                        </form>
                        <br>
                        @if (Request::url() === '/booking/*')

                        <div class="tab-content">
                            <div role="tabpanel" id="popular-apartment" class="tab-pane fade in active">
                                <div class="row">

                                    <div class="container">
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
                                                                <a href="#"><i class="fa fa-star-o"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
  

                                        </div>
                                    </div>


                                </div><!-- /.row --> 
                            </div><!-- /.popular-apartment -->

                            <div role="tabpanel" id="newest-to-oldest" class="tab-pane fade in">
                                <div class="row">

                                    <div class="container">
                                        <div class="card-group">
                                            @foreach ($newest as $apt)
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
                                                                <a href="#"><i class="fa fa-star-o"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div><!-- /.row -->
                            </div><!-- /.newest-to-oldest -->

                            <div role="tabpanel" id="oldest-to-newest" class="tab-pane fade in">
                                <div class="row">

                                    <div class="container">
                                        <div class="card-group">
                                            @foreach ($oldest as $apt)
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
                                                                <a href="#"><i class="fa fa-star-o"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div><!-- /.row -->
                            </div><!-- /.oldest-to-newest -->

                            <div role="tabpanel" id="price-high-to-low" class="tab-pane fade in">
                                <div class="row">

                                    <div class="container">
                                        <div class="card-group">
                                            @foreach ($cheapest as $apt)
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
                                                                <a href="#"><i class="fa fa-star-o"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div><!-- /.row -->
                            </div><!-- /.price-high-to-low -->

                            <div role="tabpanel" id="price-low-to-high" class="tab-pane fade in">
                                <div class="row">

                                    <div class="container">
                                        <div class="card-group">
                                            @foreach ($expensive as $apt)
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
                                                                <a href="#"><i class="fa fa-star-o"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div><!-- /.row -->
                            </div><!-- /.price-low-to-high -->





                        </div><!-- /.tab-content -->

                        @else

                        <div class="tab-content">
                            <div role="tabpanel" id="popular-apartment" class="tab-pane fade in active">
                                <div class="row">

                                    <div class="container">
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
                                                                <a href="#"><i class="fa fa-star-o"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach 



                                        </div>
                                    </div>


                                </div><!-- /.row --> 
                            </div><!-- /.popular-apartment -->

                            <div role="tabpanel" id="newest-to-oldest" class="tab-pane fade in">
                                <div class="row">

                                    <div class="container">
                                        <div class="card-group">
                                            @foreach ($newest as $apt)
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
                                                                <a href="#"><i class="fa fa-star-o"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div><!-- /.row -->
                            </div><!-- /.newest-to-oldest -->

                            <div role="tabpanel" id="oldest-to-newest" class="tab-pane fade in">
                                <div class="row">

                                    <div class="container">
                                        <div class="card-group">
                                            @foreach ($oldest as $apt)
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
                                                                <a href="#"><i class="fa fa-star-o"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div><!-- /.row -->
                            </div><!-- /.oldest-to-newest -->

                            <div role="tabpanel" id="price-high-to-low" class="tab-pane fade in">
                                <div class="row">

                                    <div class="container">
                                        <div class="card-group">
                                            @foreach ($cheapest as $apt)
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
                                                                <a href="#"><i class="fa fa-star-o"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div><!-- /.row -->
                            </div><!-- /.price-high-to-low -->

                            <div role="tabpanel" id="price-low-to-high" class="tab-pane fade in">
                                <div class="row">

                                    <div class="container">
                                        <div class="card-group">
                                            @foreach ($expensive as $apt)
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
                                                                <a href="#"><i class="fa fa-star-o"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div><!-- /.row -->
                            </div><!-- /.price-low-to-high -->





                        </div><!-- /.tab-content -->

                        @endif

                    </div><!-- /.apartment-tab-area -->
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.Apartments-area-->

    {{-- <script>
        function get()
        {
           var id = $this.attr('id');
           alert(id);
        }
    </script> --}}

@endsection
