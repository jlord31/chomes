<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Specific Meta
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="Cyprus Homes makes it easy for you to get apartments in cyprus.">
    <meta name="keywords" content="Cyprus, Home, Rent, House for rent, Kiralik daire, apartment for rent, room for rent, House rental" />
    <meta name="author" content="">

    <!-- Titles
    ================================================== -->
    <title>Cyprus Homes</title>

    <!-- Favicons
    ================================================== -->
    <link rel="shortcut icon" href="{{ asset('assets/images/house-logo.png') }}">
    <link rel="apple-touch-icon" href="{{ asset('assets/images/apple-touch-icon.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('images/apple-touch-icon-72x72.png') }}" >
    <link rel="apple-touch-icon" sizes="114x114"  href="{{ asset('images/apple-touch-icon-114x114.png') }}">

    <!-- Custom Font
    ================================================== -->
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i,900,900i%7cPoppins:300,400,500,600,700" rel="stylesheet">


    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="{{ asset('assets/css/plugins.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/colors.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <!-- Modernizr
    ================================================== -->
    <script src="{{ asset('assets/js/vendor/modernizr-2.8.3.min.js') }}"></script>


    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

    <style>
        .card{
            width: 370px;
        }

        .card-group{
            margin-top: 10px;
            margin-left: 0px;
            margin-right: 0px;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            grid-gap: .5rem;
        }
        @media only screen and (min-width: 128px) and (max-width: 564px){
                .card-group{
                margin-top: 10px;
                margin-left: 0px;
                margin-right: 0px;
                display: grid;
                grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
                grid-gap: .5rem;
            }
        }
        @media only screen and (min-width: 565px) and (max-width: 1080px){
            .card-group{
                margin-top: 10px;
                margin-left: 0px;
                margin-right: 0px;
                display: grid;
                grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
                grid-gap: .5rem;
            }
        }

        .card-body{
            background-color: #FFFFFF;
        }
        .card-footer{
            background-color: #FFFFFF;
        }

        .top-content h4 {
            font-weight: 800;
            color: #292928;
            font-family: inherit;
            font-size: 20px;
        }

        .icon i{
            font-size: 20px;
            color: #9d9d9d;
            margin-right: 5px;
        }
        .icon span{
            font-size: 14px;
            color: #9d9d9d;
            font-weight: 500;
        }

        .top-content span i {
            font-size: 20px;
            color: #9d9d9d;
            margin-right: 5px;
        }
        .top-content span {
            font-size: 14px;
            color: #9d9d9d;
            font-weight: 500;
        }

        .meta-bed-room {
            margin-right: 30px;
        }
        .rent-price {
            font-size: 20px;
            margin-top: 20px;
            color: #000;
            font-weight: bold;
        }

        .share-meta {
            font-size: 18px;
        }
        .share-meta > ul {
            list-style: none;
            float: right;
            margin-top: 20px;
            margin-bottom: 0;
        }
        .share-meta > ul li {
            float: left;
        }
        .share-meta > ul li a i {
         margin-right: 10px;
        }
        .share-meta > ul li .dropdown-menu li {
            float: none;
        }
        .share-meta .dropdown-menu {
            min-width: 55px;
            right: 0;
            margin: auto;
            left: -20px;
            bottom: 30px;
            box-shadow: 0 0px 8px rgba(0, 0, 0, 0.175);
        }
        .share-meta .dropdown-menu:before {
            content: "";
            position: absolute;
            right: 0;
            left: 0;
            bottom: -10px;
            border-top: 10px solid #a2a1a1;
            border-right: 10px solid transparent;
            border-left: 10px solid transparent;
            width: 15px;
            margin: auto;
        }
        .share-meta .dropdown-menu > li > a {
            padding: 8px 20px;
        }

    </style>
</head>

<body>
    @include('head')
    @yield('content')

    <!-- ====== Footer Area ====== -->
    <footer class="footer-area" style="background-image:url({{ asset('assets/images/footer-bg.png') }})">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="widget widget_about yellow-color">
                        <div class="widget-title-area">
                            <h3 class="widget-title">
                                About TreasurelandTech Homes
                            </h3><!-- /.widget-title -->
                        </div><!-- /.widget-title-area -->
                        <div class="widget-about-content">
                            <img style="height: 44px; width: 190px; " src="{{ asset('assets/images/footer-logo.png') }}" alt="house" />
                            <p> TreasurelandTech Homes provides quality home solutions at cost effective prices. </p>
                            <a href="/about" class="button">More</a>
                        </div><!-- /.widget-content -->
                    </div><!-- /.widget widget_about -->
                </div><!-- /.col-md-4 -->
                <div class="col-md-4">
                    <div class="widget widget_place_category yellow-color">
                        <div class="widget-title-area">
                            <h3 class="widget-title">Latest Category</h3><!-- /.widget-title -->
                        </div><!-- /.widget-title-area -->
                        <ul>
                            @foreach ($category_footer as $cat)
                                <li>{{ $cat->name }} <a href="#"></a></li>
                            @endforeach

                        </ul>
                    </div><!-- /.widget -->
                </div><!-- /.col-md-4 -->
                <div class="col-md-4">
                    <div class="widget widget_instagram yellow-color">
                        <div class="widget-title-area">
                            <h3 class="widget-title">Latest Gallery Image</h3><!-- /.widget-title -->
                        </div><!-- /.widget-title-area -->
                        <div class="instagram-image-content">
                            @foreach ($gallery_footer as $gal)
                                <a href="#"><img src="{{ asset('uploads/'.$gal->name) }}" alt="" /></a>
                            @endforeach
                            {{-- ,compact( 'gallery_footer','category_footer') --}}

                        </div><!-- /.instagram-image-content -->
                    </div><!-- /.widget -->
                </div><!-- /.col-md-4 -->
            </div><!-- /.row -->
            <div class="row">
                <div class="col-md-12">
                    <div class="bottom-content">
                        <p>Copyright  &copy;2021 <a href="#">TreasurelandTech Global solutions</a></p>
                    </div><!-- /.bottom-top-content -->
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </footer><!-- /.footer-area -->

    <!-- All The JS Files
    ================================================== -->
    <script src="{{ asset('assets/js/vendor/jquery-1.12.4.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script> <!-- main-js -->
    <!-- Toastr -->
    {{-- <script src="{{ asset('assets/js/toastr/toastr.min.js') }} "></script> --}}


        @if(Session::has('success'))
            <script>
                toastr.options =
                {
                    "closeButton" : true,
                    "progressBar" : true
                }
                toastr.success("{!! Session::get('success') !!}");
            </script>
        @endif

        @if (count($errors) > 0)
            <script>

                toastr.options =
                {
                    "closeButton" : true,
                    "progressBar" : true
                }
                @foreach ($errors->all() as $error)
                    toastr.error("{{ $error }}");
                @endforeach

            </script>
        @endif


</body>
</html>
