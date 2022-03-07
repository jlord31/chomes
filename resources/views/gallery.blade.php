@extends('master')
@section('content')

    <!-- ====== Page Header ====== --> 
    <div class="page-header default-template-gradient">
        <div class="container">
            <div class="row">
                <div class="col-md-12">                
                    <h2 class="page-title">Gallery</h2>
                    <p class="page-description">All gallery images</p>        
                </div><!-- /.col-md-12 -->
            </div><!-- /.row-->
        </div><!-- /.container-fluid -->           
    </div><!-- /.page-header -->

    <!-- ====== Breadcrumbs Area======= --> 
    <div class="breadcrumbs-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumbs">
                        <span class="first-item">
                            <a href="/home">Home</a></span>
                        <span class="separator">&gt;</span>
                        <span class="last-item">Gallery</span>
                    </div>
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.breadcrumbs-area -->

    <!-- ====== Photo Gallery Area ====== --> 
	<div class="photo-gallery-area">
	    <div class="container">
	        <div class="col-md-12">
	            <div class="heading-content-two text-center">
	                <h2 class="title default-text-gradient">Photo Gallery</h2>
	            </div><!-- /.photo-heading-content -->
	        </div><!-- /.col-md-12 -->
	        <div class="row">
                @foreach ($gallery as $gall)

                    <div class="col-md-3 col-sm-6 col-xs-6">
                        <div class="gallery-image-content">
                            <img style="width: 269px; height: 234px;" src="{{ asset('uploads/'.$gall->name) }}" alt="blog" />
                            <div class="overlay-background gradient-transparent"> 
                                <a href="{{ asset('uploads/'.$gall->name) }}" class="image-pop-up">
                                    <span><i class="fa fa-picture-o"></i>Apartment</span>
                                </a><!-- /.hover-content -->
                            </div><!-- /.hover-content -->

                        </div><!-- /.image-content -->
                    </div><!-- /.col-md-3 --> 
            
                @endforeach
	            <div class="clearfix"></div>

	        </div><!-- /.row -->    
	    </div><!-- /.container -->
	</div><!-- /.photo-gallery-area-->

@endsection