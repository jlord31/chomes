@extends('master')
@section('content')

    <!-- ====== Page Header ====== -->
    <div class="page-header default-template-gradient">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="page-title">Contact</h2>
                    <p class="page-description">we love to hear from you </p>
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
                        <span class="last-item">Contact</span>
                    </div>
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.breadcrumbs-area -->

    <!-- ====== Map Area====== -->
    <div class="map-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="heading-content-one">
                       <h5>Find Our location</h5>
                       <h2 class="title default-text-gradient">Map &amp; Directions</h2>
                       <p>Find out how to find us from your current location</p>
                    </div><!-- /.about-heading-content -->
                    <div class="map-content">
                        <iframe height="550" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d52153.507765420625!2d33.3970904116563!3d35.21657478322336!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14de1614896666d1%3A0x5a4e618af0999058!2sHaspolat!5e0!3m2!1sen!2s!4v1628612410260!5m2!1sen!2s" allowfullscreen="allowfullscreen"></iframe>
                    </div><!-- /.map-content -->
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.map-content-area -->

    <!-- ====== Contact Us Area ====== -->
    <div class="contact-us-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="heading-content-one">
                        <h2 class="title default-text-gradient">Contact us<br/> live</h2>
                    </div><!-- /.heading-content-one -->
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->
            <div class="row">
                <div class="col-md-4">
                    <div class="contact-us-content-left">
                        <div class="contact">
                            <h4><i class="fa fa-map-marker"></i>Address</h4>
                            <p>Haspolat -  <br>North Cyprus</p>
                        </div><!-- /.contact -->

                        <div class="contact">
                            <h4><i class="fa fa-envelope"></i>Mail</h4>
                            <p>info@treasurelandtechhomes.com  <br> admin@treasurelandtechhomes.com</p>
                        </div><!-- /.contact -->


                        <div class="contact">
                            <h4><i class="fa fa-volume-control-phone"></i>Call</h4>
                            <p>+90 5428578023 <br>  </p>
                        </div><!-- /.contact -->

                        <div class="contact">
                            <h4><i class="fa fa-user"></i>Social account</h4>
                            <div class="social-icon">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                                <a href="#"><i class="fa fa-google-plus"></i></a>
                            </div><!-- /.Social-icon -->
                        </div><!-- /.contact -->
                    </div><!-- /.contactus-content-left -->
                </div><!-- /.col-md-4 -->

                <div class="col-md-8">
                    <div class="contact-us-content-right">
                        <form action="#">
                            <h3>Have a question</h3>
                            <img src="assets/images/envelope.jpg" alt="envelope" />
                            <div class="input-content clearfix">
                                <h4>Send Us A email</h4>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <input type="text" placeholder="Name*" class="form-control">
                                    </div><!-- /.col-sm-6 -->
                                    <div class="col-sm-6">
                                        <input type="email" placeholder="Email*" class="form-control Email">
                                    </div><!-- /.col-sm-6 -->
                                    <div class="col-md-12">
                                        <input type="search" placeholder="Website*" class="form-control website">
                                    </div><!-- /.col-md-12 -->
                                    <div class="col-md-12">
                                        <textarea rows="2" cols="80">your massage</textarea>
                                    </div><!-- /.col-md-12 -->
                                </div><!-- /.row -->
                                <div class="subimt-button clearfix">
                                    <input type="submit" value="Submit" class="submit default-template-gradient">
                                </div><!-- /.subimt -->
                            </div><!-- /.input-content -->
                        </form>
                    </div><!-- /.contactus-content-right -->
                </div><!-- /.col-md-8 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.contact-us-area -->

@endsection
