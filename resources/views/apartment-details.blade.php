@extends('master')
@section('content')

    <!-- ====== Page Header ====== -->
    <div class="page-header default-template-gradient">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="page-title">Apartment</h2>
                    <p class="page-description">More Details About Apartment</p>
                </div><!-- /.col-md-12 -->
            </div><!-- /.row-->
        </div><!-- /.container-fluid -->
    </div><!-- /.page-header -->

   <!-- ====== Breadcrumbs Area====== -->
   <div class="breadcrumbs-area">
       <div class="container">
           <div class="row">
               <div class="col-md-12">
                   <div class="breadcrumbs">
                       <span class="first-item">
                        <a href="/home">Home</a></span>
                       <span class="separator">&gt;</span>
                       <span class="first-item">
                        <a href="/booking">Apartments</a></span>
                       <span class="separator">&gt;</span>
                       <span class="last-item">Apartment Details</span>
                   </div>
               </div><!-- /.col-md-12 -->
           </div><!-- /.row -->
       </div><!-- /.container -->
   </div><!-- /.breadcrumbs-area -->

   <!-- ====== Apartments-Single-Area ======= -->
	<div class="apartment-single-area">
        <div class="container">
            <div class="row">
              <div class="col-md-8">
                  <div class="corousel-gallery-content">
                        <div class="gallery">
                             <div class="full-view owl-carousel"> 
                                <a class="item image-pop-up"  href="{{ asset('uploads/'.$apartment->image) }}">
                                    <img style="width: 750px; height: 549px;" src="{{ asset('uploads/'.$apartment->image) }}" alt="corousel">
                                </a>
                                @foreach ($details as $detail)

                                    <a class="item image-pop-up"  href="{{ asset('uploads/'.$detail->image) }}">
                                        <img style="width: 750px; height: 549px;" src="{{ asset('uploads/'.$detail->image) }}" alt="corousel">
                                    </a>

                                @endforeach

                             </div>

                            <div class="list-view owl-carousel">
                                <img class="item" src="{{ asset('uploads/'.$apartment->image) }}" alt="corousel-image" />
                                @foreach ($details as $detail)
                                    <div class="item"> 
                                        <img src="{{ asset('uploads/'.$detail->image) }}"alt="corousel-image">
                                    </div> 
                                @endforeach
                            </div>
                        </div> <!-- /.gallery-two -->
                  </div> <!-- /.corousel-gallery-content -->

                  <div class="family-apartment-content mobile-extend">
                      <div class="tb">
                          <div class="tb-cell">
                             <h3 class="apartment-title">{{$apartment->title}}</h3>
                          </div><!-- /.tb-cell -->
                          <div class="tb-cell">
                             <p class="pull-right rent">Rent/Month: {{$apartment->price}}</p>
                          </div><!-- /.tb-cell -->
                      </div><!-- /.tb -->
                      <div class="clearfix"></div><!-- /.clearfix -->
                      <p class="apartment-description default-gradient-before">{{$apartment->details}}</p>
                       
                      <br>
                      <div class="apartment-overview">
                          <div class="row">
                              <div class="col-md-12">
                                  <h3>Apartment Overview</h3>
                                  <div class="overview">
                                      <ul>
                                          <li>Deposit / Bond <span class="pull-right">{{$apartment->deposit}}</span></li>
                                          <li>Area <span class="pull-right">{{$apartment->location}}</span></li>
                                          <li>Bathroom <span class="pull-right">{{$apartment->bathroom}}</span></li>
                                          <li>Bedrooms <span class="pull-right">{{$apartment->bedroom}}</span></li>
                                          <li>Status <span class="pull-right">{{$apartment->status}}</span></li>
                                          <li>Category <span class="pull-right">{{$apartment->category}}</span></li> 
                                      </ul>
                                  </div><!-- /.apartment-overview -->
                              </div><!-- /.col-md-12 -->
                          </div><!-- /.row -->
                      </div><!-- /.overview --> 
                  </div><!-- /.family-apartment-content -->
                  <div class="hidden-md hidden-lg text-center extend-btn">
                      <span class="extend-icon">
                          <i class="fa fa-angle-down"></i>
                      </span>
                  </div>
              </div> <!-- /.col-md-8 -->

              <div class="col-md-4">
                  <div class="apartment-sidebar">
                      <div class="widget_rental_search clerafix">
                          <div class="form-border gradient-border">
                                <form action="/saveBooking" method="POST" class="advance_search_query booking-form">
                                    @csrf
                                    <div class="form-bg seven">  
                                        <div class="form-content">
                                          <h2 class="form-title">Book This Apartment</h2>
                                          <input name="apartment_id" type="hidden" value="{{ $apartment->id }}" />
                                          <div class="form-group">
                                             <label>Full Name</label>
                                             <input type="text" name="fullname" placeholder="Full name">
                                          </div><!-- /.form-group -->
                                          <div class="form-group">
                                              <label>Phone Number</label>
                                              <input type="tel" name="contact" placeholder="+(90)05324-34664">
                                          </div><!-- /.form-group -->
                                          <div class="form-group">
                                              <label>Email Address</label>
                                              <input type="email" name="email" placeholder="example@domain.com">
                                          </div><!-- /.form-group --> 
                                          <div class="form-group">
                                              <label>Number of Occupant</label>
                                              <input type="number" min="1" max="100" name="occupant" class="input-text">
                                          </div><!-- /.form-group -->
                                          <div class="form-group">
                                              <label>Your Message</label>
                                              <textarea name="message" placeholder="Message" class="form-controller"></textarea>
                                          </div><!-- /.form-group -->
                                          <div class="form-group">
                                              <button type="submit" class="button default-template-gradient button-radius">Request Booking</button>
                                          </div><!-- /.form-group -->
                                        </div><!-- /.form-content --> 
                                  </div><!-- /.form-bg -->
                              </form> <!-- /.advance_search_query -->
                          </div><!-- /.form-border -->
                      </div><!-- /.widget_rental_search -->

                      <div class="apartments-content seven post clerafix">
                          <div class="image-content">
                              <a href="#"><img class="overlay-image"style="width: 464px; height: 360px;" src="{{ asset('uploads/'.$apartment->image) }}" alt="about" /></a>
                          </div><!-- /.image-content -->
                      </div><!-- /.partments-content -->
                  </div><!-- /.apartment-sidebar -->
              </div> <!-- .col-md-4 -->
            </div> <!-- /.row -->
        </div> <!-- /.container -->
    </div> <!-- /.appartment-single-area -->


    <!-- ====== Apartments-Related-area ====== --> 
	<div class="apartments-related-area bg-gray-color">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="heading-content-one">
					    <h2 class="title default-text-gradient">Related apartments</h2>
					</div><!-- /.Apartments-heading-content -->
				</div><!-- /.col-md-12 -->
			</div><!-- /.row -->
			<div class="row"> 

				<div class="container">
                    <div class="card-group ">
                        @foreach ($apartmentCategory as $apt)
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
		</div><!-- /.container -->
	</div><!-- /.Apartments-Related-area-->

@endsection
