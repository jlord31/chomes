@extends('master')
@section('content')

    <!-- ====== Slider Area ====== -->
    <div class="slider-area">
        <div class="pogoSlider">
            <div class="pogoSlider-slide overlay-gradient" data-transition="expandReveal" data-duration="1000" style="background-image:url(assets/images/2.jpg);">
                <div class="container-slider one">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="slider-text-content">
                                <h3 class="pogoSlider-slide-element" data-in="slideDown" data-out="slideUp" data-duration="500" data-delay="500">Good Service is our passion</h3>
                                <h2 class="pogoSlider-slide-element" data-in="slide-left" data-out="slideUp" data-duration="500" data-delay="500">Awesome apartment Villa</h2>
                                <p class="pogoSlider-slide-element" data-in="slideDown" data-out="slideUp" data-duration="500" data-delay="500">No matter the weather, No matter what the situation , We have the right place for you , in a serene environment and conducive</p>
                                {{-- <a href="#" class="button pogoSlider-slide-element" data-in="slideDown" data-out="slideUp" data-duration="500" data-delay="500">Special Offer</a> --}}
                            </div><!-- /.text-content -->
                        </div><!-- /.col-md-12 -->
                    </div><!-- /.row -->
                </div><!-- /.container-slider -->
            </div>
            <div class="pogoSlider-slide  overlay-gradient" data-transition="expandReveal" data-duration="1000" style="background-image:url(assets/images/5.jpg);">
                <div class="container-slider one">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="slider-text-content">
                                <h3 class="pogoSlider-slide-element" data-in="slideDown" data-out="slideUp" data-duration="500" data-delay="500">Good Service is our passion</h3>
                                <h2 class="pogoSlider-slide-element" data-in="slide-left" data-out="slideUp" data-duration="500" data-delay="500">Awesome apartment Villa</h2>
                                <p class="pogoSlider-slide-element" data-in="slideDown" data-out="slideUp" data-duration="500" data-delay="500">No matter the weather, No matter what the situation , We have the right place for you , in a serene environment and conducive</p>
                                {{-- <a href="#" class="button pogoSlider-slide-element" data-in="slideDown" data-out="slideUp" data-duration="500" data-delay="500">Special Offer</a> --}}
                            </div><!-- /.text-content -->
                        </div><!-- /.col-md-12 -->
                    </div><!-- /.row -->
                </div><!-- /.container-slider -->
            </div>
        </div><!-- .pogoSlider -->
    </div><!-- /.slider-area -->


     <!-- ====== About Us Area ====== -->
    <div class="aboutus-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="heading-content-one">
                        <h2 class="title">About Us</h2>
                        <h5 class="sub-title">Welcome to TreasurelandTech Homes Company</h5>
                    </div><!-- /.heading-content -->
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->

            <div class="row">
                <div class="col-md-2">
                    <div class="tab-list">
                        <ul class="nav nav-tabs about-tab hidden-xs hidden-sm" role="tablist">
                            <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">About Company</a>
                            </li>
                            <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Terms &amp; Condition</a>
                            </li>
                            {{-- <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Our specialty</a>
                            </li>
                            <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Our specialty</a>
                            </li> --}}
                        </ul>
                        <form class="hidden-md hidden-lg">
                            <select class="about-mobile">
                                <option value='0'>About Company</option>
                                <option value='1'>Terms &amp; Condition</option>
                                {{-- <option value='2'>Our specialty</option>
                                <option value='3'>Our specialty</option> --}}
                            </select>
                        </form>
                    </div> <!-- /.tab-list -->
                </div> <!-- /.col-md-2 -->

                <div class="col-md-10">
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active row" id="home">
                            <div class="col-md-6">
                                <div class="text-content">
                                    <p>
                                        TreasurelandTech homes is a technological platform that provides quality home solutions by making the search
                                        , buying or rentage of houses a blissful experience and also seamless and stress free.
                                    </p>
                                    <p>
                                        TreasurelandTech homes makes it possible for house owners and agents to list their peoperties on
                                        TreasurelandTech homes and get a potential client in the fastest and easiest way.
                                    </p>
                                    {{-- <p>
                                        TreasurelandTech homes reserved the right to charge house owners and also agents a 10% commission for
                                        every client that they get matched to on TreasurelandTech homes website.
                                    </p> --}}
                                </div><!-- /.text-content -->
                            </div><!-- /.col-md-6 -->
                            <div class="col-md-6">
                                <div class="image-content">
                                    <img src="assets/images/about.jpg" alt="about" />
                                </div><!-- /.text-content -->
                            </div><!-- /.col-md-6 -->
                        </div> <!-- /.home -->

                        <div role="tabpanel" class="tab-pane fade row" id="profile">
                            <div class="col-md-6">
                                <div class="text-content">

                                    <h2><strong>Terms and Conditions</strong></h2>

                                    <p>Welcome to TreasurelandTech Homes!</p>

                                    <p>These terms and conditions outline the rules and regulations for the use of TreasurelandTech Homes's Website, located at www.treasuretechhomes.com.</p>

                                    <p>By accessing this website we assume you accept these terms and conditions. Do not continue to use TreasurelandTech Homes if you do not agree to take all of the terms and conditions stated on this page.</p>

                                    <p>The following terminology applies to these Terms and Conditions, Privacy Statement and Disclaimer Notice and all Agreements: "Client", "You" and "Your" refers to you, the person log on this website and compliant to the Company’s terms and conditions. "The Company", "Ourselves", "We", "Our" and "Us", refers to our Company. "Party", "Parties", or "Us", refers to both the Client and ourselves. All terms refer to the offer, acceptance and consideration of payment necessary to undertake the process of our assistance to the Client in the most appropriate manner for the express purpose of meeting the Client’s needs in respect of provision of the Company’s stated services, in accordance with and subject to, prevailing law of Netherlands. Any use of the above terminology or other words in the singular, plural, capitalization and/or he/she or they, are taken as interchangeable and therefore as referring to same.</p>

                                    <h3><strong>Cookies</strong></h3>

                                    <p>We employ the use of cookies. By accessing TreasurelandTech Homes, you agreed to use cookies in agreement with the TreasurelandTech Homes's Privacy Policy. </p>

                                    <p>Most interactive websites use cookies to let us retrieve the user’s details for each visit. Cookies are used by our website to enable the functionality of certain areas to make it easier for people visiting our website. Some of our affiliate/advertising partners may also use cookies.</p>

                                    <h3><strong>License</strong></h3>

                                    <p>Unless otherwise stated, TreasurelandTech Homes and/or its licensors own the intellectual property rights for all material on TreasurelandTech Homes. All intellectual property rights are reserved. You may access this from TreasurelandTech Homes for your own personal use subjected to restrictions set in these terms and conditions.</p>

                                    {{-- <p>You must not:</p>
                                    <ul>
                                        <li>Republish material from TreasurelandTech Homes</li>
                                        <li>Sell, rent or sub-license material from TreasurelandTech Homes</li>
                                        <li>Reproduce, duplicate or copy material from TreasurelandTech Homes</li>
                                        <li>Redistribute content from TreasurelandTech Homes</li>
                                    </ul> --}}

                                    <p>This Agreement shall begin on this day 04/03/2021. </p>

                                    <p>Parts of this website offer an opportunity for agents/house owners to post and upload information about house properties in which they wish to rent or sell. TreasurelandTech Homes does not filter, edit, publish or review properties. prior to their presence on the website.  TreasurelandTech Homes shall not be liable for the Properties or for any liability, damages or expenses caused and/or suffered as a result of any use of and/or posting of and/or appearance of the Properties. </p>

                                    <p>TreasurelandTech Homes reserves the right to monitor all Properties and to remove any Comments which can be considered inappropriate, offensive or causes breach of these Terms and Conditions.</p>
                                    <p>
                                        TreasurelandTech homes reserved the right to charge house owners and also agents a 10% commission for
                                        every client that they get matched to on TreasurelandTech homes website.
                                    </p>
                                    <p>You warrant and represent that:</p>

                                    <ul>
                                        <li>You are entitled to post the Property on our website and have all necessary licenses and consents to do so;</li>
                                        {{-- <li>The Comments do not invade any intellectual property right, including without limitation copyright, patent or trademark of any third party;</li>
                                        <li>The Comments do not contain any defamatory, libelous, offensive, indecent or otherwise unlawful material which is an invasion of privacy</li> --}}
                                        <li>The Property will not be used to solicit or promote business or custom or present commercial activities or unlawful activity.</li>
                                    </ul>

                                    <p>You hereby grant TreasurelandTech Homes a non-exclusive license to use, reproduce, promote your properties on our platform. </p>

                                    <h3><strong>Hyperlinking to our Content</strong></h3>

                                    <p>The following organizations may link to our Website without prior written approval:</p>

                                    <ul>
                                        <li>Government agencies;</li>
                                        <li>Search engines;</li>
                                        <li>News organizations;</li>
                                        <li>Online directory distributors may link to our Website in the same manner as they hyperlink to the Websites of other listed businesses; and</li>
                                        <li>System wide Accredited Businesses except soliciting non-profit organizations, charity shopping malls, and charity fundraising groups which may not hyperlink to our Web site.</li>
                                    </ul>

                                    <p>These organizations may link to our home page, to publications or to other Website information so long as the link: (a) is not in any way deceptive; (b) does not falsely imply sponsorship, endorsement or approval of the linking party and its products and/or services; and (c) fits within the context of the linking party’s site.</p>

                                    <p>We may consider and approve other link requests from the following types of organizations:</p>

                                    <ul>
                                        <li>commonly-known consumer and/or business information sources;</li>
                                        <li>dot.com community sites;</li>
                                        <li>associations or other groups representing charities;</li>
                                        <li>online directory distributors;</li>
                                        <li>internet portals;</li>
                                        <li>accounting, law and consulting firms; and</li>
                                        <li>educational institutions and trade associations.</li>
                                    </ul>

                                    <p>We will approve link requests from these organizations if we decide that: (a) the link would not make us look unfavorably to ourselves or to our accredited businesses; (b) the organization does not have any negative records with us; (c) the benefit to us from the visibility of the hyperlink compensates the absence of TreasurelandTech Homes; and (d) the link is in the context of general resource information.</p>

                                    <p>These organizations may link to our home page so long as the link: (a) is not in any way deceptive; (b) does not falsely imply sponsorship, endorsement or approval of the linking party and its products or services; and (c) fits within the context of the linking party’s site.</p>

                                    <p>If you are one of the organizations listed in paragraph 2 above and are interested in linking to our website, you must inform us by sending an e-mail to TreasurelandTech Homes. Please include your name, your organization name, contact information as well as the URL of your site, a list of any URLs from which you intend to link to our Website, and a list of the URLs on our site to which you would like to link. Wait 2-3 weeks for a response.</p>

                                    <p>Approved organizations may hyperlink to our Website as follows:</p>

                                    <ul>
                                        <li>By use of our corporate name; or</li>
                                        <li>By use of the uniform resource locator being linked to; or</li>
                                        <li>By use of any other description of our Website being linked to that makes sense within the context and format of content on the linking party’s site.</li>
                                    </ul>

                                    <p>No use of TreasurelandTech Homes logo or other artwork will be allowed for linking absent a trademark license agreement.</p>

                                    <h3><strong>iFrames</strong></h3>

                                    <p>Without prior approval and written permission, you may not create frames around our Webpages that alter in any way the visual presentation or appearance of our Website.</p>

                                    <h3><strong>Content Liability</strong></h3>

                                    <p>We shall not be hold responsible for any content that appears on your Website. You agree to protect and defend us against all claims that is rising on your Website. No link(s) should appear on any Website that may be interpreted as libelous, obscene or criminal, or which infringes, otherwise violates, or advocates the infringement or other violation of, any third party rights.</p>

                                    <h3><strong>Your Privacy</strong></h3>

                                    <p>Please read Privacy Policy</p>

                                    <h3><strong>Reservation of Rights</strong></h3>

                                    <p>We reserve the right to request that you remove all links or any particular link to our Website. You approve to immediately remove all links to our Website upon request. We also reserve the right to amen these terms and conditions and it’s linking policy at any time. By continuously linking to our Website, you agree to be bound to and follow these linking terms and conditions.</p>

                                    <h3><strong>Removal of links from our website</strong></h3>

                                    <p>If you find any link on our Website that is offensive for any reason, you are free to contact and inform us any moment. We will consider requests to remove links but we are not obligated to or so or to respond to you directly.</p>

                                    <p>We do not ensure that the information on this website is correct, we do not warrant its completeness or accuracy; nor do we promise to ensure that the website remains available or that the material on the website is kept up to date.</p>

                                    <h3><strong>Disclaimer</strong></h3>

                                    <p>To the maximum extent permitted by applicable law, we exclude all representations, warranties and conditions relating to our website and the use of this website. Nothing in this disclaimer will:</p>

                                    <ul>
                                        <li>limit or exclude our or your liability for death or personal injury;</li>
                                        <li>limit or exclude our or your liability for fraud or fraudulent misrepresentation;</li>
                                        <li>limit any of our or your liabilities in any way that is not permitted under applicable law; or</li>
                                        <li>exclude any of our or your liabilities that may not be excluded under applicable law.</li>
                                    </ul>

                                    <p>The limitations and prohibitions of liability set in this Section and elsewhere in this disclaimer: (a) are subject to the preceding paragraph; and (b) govern all liabilities arising under the disclaimer, including liabilities arising in contract, in tort and for breach of statutory duty.</p>

                                    <p>As long as the website and the information and services on the website are provided free of charge, we will not be liable for any loss or damage of any nature.</p>

                                </div><!-- /.text-content -->
                            </div><!-- /.col-md-6 -->
                            <div class="col-md-6">
                                <div class="image-content">
                                    <img src="assets/images/term.jpg" alt="about" />
                                </div><!-- /.text-content -->
                            </div><!-- /.col-md-6 -->
                        </div> <!-- /.profile -->

                    </div> <!-- /.tab-content -->
                 </div><!-- /.col-md-10 -->
            </div><!-- /.row -->
        </div> <!-- /.container -->
    </div> <!-- /.aboutus-area -->


    <!-- ====== Apartments Area ======= -->
    <div class="apartments-area bg-gray-color">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="heading-content-one border">
                        <h2 class="title">Rooms &amp; Apartments</h2>
                        <h5 class="sub-title">Find Your Rooms, for your abaility</h5>
                    </div><!-- /.Apartments-heading-content -->
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->
            <div class="row">

                <div class="container">
                    <div class="card-group"> 
                            
                        @foreach ($apartment as $apt)
                            <div class="card  mb-4">
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
                                                <a href="/addFavourite/{{ $apt->id }}"><i class="fa fa-star-o"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        @endforeach 

                         
                    </div>
                </div>

            </div><!-- /.row -->
            <a href="/booking" class="button nevy-button">All Apartments</a>
        </div><!-- /.container -->
    </div><!-- /.Apartments-area-->



    <!-- ====== Fun Facts Area======= -->
    <div class="fun-fects-area" style="background-image:url(assets/images/1.jpg)">
        <div class="container">
            <div class="stat">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="milestone-counter">
                        {{-- <h3 class="stat-count highlight" data-form="1" data-to="2500" data-speed="3000">2500</h3> --}}
                        <div class="milestone-details">Clients</div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="milestone-counter">
                        {{-- <h3 class="stat-count highlight" data-form="1" data-to="3055" data-speed="3000">3055</h3> --}}
                        <div class="milestone-details">Booking</div>
                    </div>
                </div>
                {{-- <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="milestone-counter">
                        <h3 class="stat-count highlight" data-form="1" data-to="50" data-speed="3000">50</h3>
                        <div class="milestone-details">Swimming</div>
                    </div>
                </div> --}}
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="milestone-counter">
                        {{-- <h3 class="stat-count highlight" data-form="1" data-to="1530" data-speed="3000">1530</h3> --}}
                        <div class="milestone-details">Apartment</div>
                    </div>
                </div>
            </div><!-- stat -->
        </div><!-- /.container -->
    </div><!-- /.fun-fects-area -->




    <!-- ====== Gallery Area ====== -->
    <div class="gallery-area">
        <div class="container-fluid">
            <div class="container-large-device">
                <div class="row">
                    <div class="col-md-7">
                        <div class="gallery-left-content">
                            <div class="row">
                                @foreach ($gallery as $gall)
                                    <div class="col-md-4 col-sm-6 col-xs-6">
                                        <a class="image-pop-up" href="{{ asset('uploads/'.$gall->name) }}">
                                            <img src="{{ asset('uploads/'.$gall->name) }}" alt="gallery" />
                                        </a>
                                    </div><!-- /.col-md-4 -->
                                @endforeach


                            </div><!-- /.row -->
                        </div><!-- /.left-content -->
                    </div><!-- /.col-md-7 -->
                    <div class="col-md-5">
                        <div class="gallery-right-content">
                            <h2>Our<br/> Photo Gallery</h2>
                            <h3>Best of our <br/>  portfolio Photos</h3>
                            <p> Check out some of our gallery images </p>
                            <a href="/gallery" class="button nevy-button">All Photos</a>
                        </div><!-- /.right-content -->
                    </div><!-- /.col-md-5 -->
                </div><!-- /.row -->
            </div><!-- /.container-large-device  -->
        </div><!-- /.container-fluid-->
    </div><!-- /.gallery-area -->


    <!-- ====== Contact Area ======= -->
    <div class="contact-area pd-zero">
        <div class="container-fluid pd-zero">
            <div class="row">
                <div class="col-md-7">
                    <div class="map-left-content">
                        <iframe width="600" height="350" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d52153.507765420625!2d33.3970904116563!3d35.21657478322336!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14de1614896666d1%3A0x5a4e618af0999058!2sHaspolat!5e0!3m2!1sen!2s!4v1628612410260!5m2!1sen!2s" allowfullscreen="allowfullscreen"></iframe>
                    </div><!-- /.mapl-left-content -->
                </div><!-- /.col-md-7 -->
                <div class="col-md-5">
                    <div class="heading-content-two available">
                        <h2 class="title">We Are Available<br/> For You 24/7</h2>
                        <h5 class="sub-title">Our online support service is always 24 Hours</h5>
                    </div><!-- /.testimonial-heading-content -->
                    <div class="map-right-content">
                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <div class="contact">
                                    <h4><i class="fa fa-address-book"></i>Address</h4>
                                    <p>Haspolat - North Cyprus</p>
                                </div><!-- /.contact -->
                            </div><!-- /.col-md-6 -->
                            <div class="col-md-6 col-sm-6">
                                <div class="contact">
                                    <h4><i class="fa fa-envelope"></i>Mail</h4>
                                    <p>info@treasurelandtechhomes.com admin@treasurelandtechhomes.com</p>
                                </div><!-- /.contact -->
                            </div><!-- /.col-md-6 -->
                        </div><!-- /.row -->
                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <div class="contact">
                                    <h4><i class="fa fa-phone-square"></i>Call</h4>
                                    <p>+90 5428578023 <br/> </p>
                                </div><!-- /.contact -->
                            </div><!-- /.col-md-6 -->
                            <div class="col-md-6 col-sm-6">
                                <div class="contact">
                                    <h4><i class="fa fa-user-circle"></i>Social account</h4>
                                    <div class="social-icon">
                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                        <a href="#"><i class="fa fa-instagram"></i></a>
                                        <a href="#"><i class="fa fa-google-plus"></i></a>
                                    </div><!-- /.Social-icon -->
                                </div><!-- /.contact -->
                            </div><!-- /.col-md-6 -->
                        </div><!-- /.row -->
                    </div><!-- /.map-right-content -->
                </div><!-- /.col-md-5 -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div><!-- /.contact-area -->


@endsection
