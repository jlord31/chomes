<!-- ====== Header Mobile Area ====== -->
<header class="mobile-header-area nevy-blue-bg hidden-md hidden-lg">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 tb">
                <div class="mobile-header-block">
                    <div class="menu-area tb-cell">
                        <!--Mobile Main Menu-->
                        <div class="mobile-menu-main hidden-md hidden-lg">
                            <div class="menucontent overlaybg"></div>
                            <div class="menuexpandermain slideRight">
                                <a id="navtoggole-main" class="animated-arrow slideLeft menuclose">
                                    <span></span>
                                </a>
                                <span id="menu-marker"></span>
                            </div><!--/.menuexpandermain-->
                            <div id="mobile-main-nav" class="main-navigation slideLeft">
                                <div class="menu-wrapper">
                                    <div id="main-mobile-container" class="menu-content clearfix"></div>
                                    <div class="left-content">
                                        <ul>
                                           <li>
                                                <a href="#"><i class="fa fa-phone-square"></i>Call Us - +90 5428578023</a>
                                            </li>
                                            @auth
                                                <li>
                                                    <a href="{{ url('/logout') }}" class="#"><i class="fa fa-logout"></i>logout</a>
                                                </li>

                                            @else
                                                <li>
                                                    <a href="#" class="cd-signin"><i class="fa fa-address-book"></i>Login / Register</a>
                                                </li>
                                            @endauth
                                        </ul>
                                    </div><!-- /.left-content -->
                                </div>
                            </div><!--/#mobile-main-nav-->
                        </div><!--/.mobile-menu-main-->
                    </div><!-- /.menu-area -->
                    <div class="logo-area tb-cell">
                        <div class="site-logo">
                            <a href="/home">
                                <img style="height: 44px; width: 190px; " src="{{ asset('assets/images/logo.png') }}" alt="site-logo" />
                            </a>
                        </div><!-- /.site-logo -->
                    </div><!-- /.logo-area -->

                </div><!-- /.mobile-header-block -->
            </div><!-- /.col-md-12 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</header><!-- /.mobile-header-area -->


<!-- ====== Header Top Area ====== -->
<header class="header-area nevy-blue-bg hidden-xs hidden-sm">
    <div class="container">
        <div class="header-top-content">
            <div class="row">
                <div class="col-md-7 col-sm-7 mobile-center">
                    <div class="site-logo">
                        <a href="/home">
                            <img style="height: 44px; width: 190px; " src="{{ asset('assets/images/logo.png') }}" alt="site-logo" />
                        </a>
                    </div><!-- /.site-logo -->
                </div><!-- /.col-md-8 -->
                <div class="col-md-5 col-sm-5 mobile-center">
                    <div class="left-content">
                        <ul>
                            <li>
                                <a href="#"><i class="fa fa-phone-square"></i>Call Us - +90 5428578023</a>
                            </li>
                             @auth
                                <li>
                                    <a href="{{ url('/logout') }}" class="#"><i class="fa fa-logout"></i>logout</a>
                                </li>
                            @else
                                <li>
                                    <a href="#" class="cd-signin"><i class="fa fa-address-book"></i>Login / Register</a>
                                </li>
                            @endauth

                            {{-- <li>
                                <a href="#" class="main-search"><i class="fa fa-search"></i></a>
                            </li>  --}}
                            {{-- <li>
                                <a href="#" class="trigger-overlay"><i class="fa fa-bars"></i></a>
                            </li> --}}
                        </ul>
                    </div><!-- /.left-content -->
                </div><!-- /.col-md-4 -->
            </div><!-- /.row -->
        </div><!-- /.header-top-content -->
    </div><!-- /.container -->
</header><!-- /.head-area -->

<!-- ====== Header Bottom Content ====== -->
<header class="header-bottom-content nevy-blue-bg hidden-xs hidden-sm">
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-sm-10">
                <nav id="main-nav" class="site-navigation top-navigation">
                    <div class="menu-wrapper">
                        <div class="menu-content">
                            <ul class="menu-list">
                                <li>
                                    <a href="/home">Home</a>
                                </li>
                                <li>
                                    <a href="/booking">Booking</a>
                                </li>
                                <li>
                                    <a href="/gallery">Our Gallery</a>
                                </li>

                                @auth()
                                    @if (Auth::user()->hasRole('agent'))

                                        <li>
                                            <a href="#">Apartment</a>
                                            <ul class="sub-menu">
                                                <li>
                                                    <a href="/addHome">Add Apartments</a>
                                                </li>
                                                <li>
                                                    <a href="/shortlist">Apartment Shortlist</a>
                                                </li>
                                                <li>
                                                    <a href="/shortlist">Pay to TreasurelandTech Homes</a>
                                                </li>
                                            </ul>
                                        </li>

                                    @endif

                                    <li>
                                        <a href="/myFavourite"><i class='fa fa-fav'> My fav </i></a>
                                    </li>
                                @endauth


                                <li>
                                    <a href="/about">About</a>
                                </li>
                                <li>
                                    <a href="/contact">Contact</a>
                                </li>
                            </ul> <!-- /.menu-list -->
                        </div> <!-- /.menu-content-->
                    </div> <!-- /.menu-wrapper -->
                </nav><!-- /.site-navigation -->
            </div><!-- /.col-md-10 -->

            <div class="col-md-2 col-sm-2">
                <div class="booking">
                    <span><a href="/booking">Booking</a></span>
                </div><!-- /.Booking -->
            </div><!-- /.col-md-2 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</header><!-- /.header-bottom-content -->


<!-- ====== Header Overlay Content ====== -->
<div class="header-overlay-content">
    <!-- overlay-menu-item -->
    <div class="overlay overlay-hugeinc gradient-transparent overlay-menu-item">
        <button type="button" class="overlay-close">Close</button>

    </div> <!-- /.overlay-menu-item -->

    <!-- header-search-content -->
    <div class="gradient-transparent overlay-search">
        <button type="button" class="overlay-close">Close</button>

    </div><!-- /.header-search-content -->

    <!-- Registrar Or Sign In-content -->
    <div id="userModal" class="cd-user-modal">
        <div class="cd-user-modal-container">
            <ul class="cd-switcher">
                <li><a href="#0">Sign in</a></li>
                <li><a href="#0">New account</a></li>
            </ul>

            <!-- log in form -->
            <div id="cd-login">
                <form class="cd-form" method="POST" action="{{ route('login') }}">
                    @csrf
                    <p class="fieldset">
                        <label class="image-replace cd-email" for="signin-email">E-mail</label>
                        <input class="full-width has-padding has-border" type="email" required name="email" placeholder="E-mail">
                        <span class="cd-error-message">Error message here!</span>
                    </p>


                    <p class="fieldset">
                        <label class="image-replace cd-password" for="signin-password">Password</label>
                        <input class="full-width has-padding has-border" id="password" required type="password" name="password" autocomplete="current-password" placeholder="Password">
                        <a href="#0" class="hide-password">Hide</a>
                        <span class="cd-error-message">Error message here!</span>
                    </p>

                    <p class="fieldset">
                        <input type="checkbox" id="remember-me" checked>
                        <label for="remember-me">Remember me</label>
                    </p>

                    <p class="fieldset">
                        <input class="full-width has-padding" type="submit" value="{{ __('Log in') }}">
                    </p>
                </form>

                <p class="cd-form-bottom-message">
                    <a href="#0">Forgot your password?</a>
                </p>
                <a href="#0" class="cd-close-form">Close</a>
            </div> <!-- cd-login -->

            <!-- sign up form -->
            <div id="cd-signup">
                <form class="cd-form" method="POST" action="{{ route('register') }}">
                    @csrf
                    <p class="fieldset">
                        <label class="image-replace cd-username" for="signup-username">Name</label>
                        <input type="text" class="full-width has-padding has-border" id="name" name="name" required autofocus placeholder="Full name">
                        <span class="cd-error-message">Error message here!</span>
                    </p>

                    <p class="fieldset">
                        <label class="image-replace cd-email" for="signup-email">E-mail</label>
                        <input type="email" class="full-width has-padding has-border" id="email" name="email" required placeholder="E-mail">
                        <span class="cd-error-message">Error message here!</span>
                    </p>

                    <p class="fieldset">
                        <label class="image-replace cd-password" for="signup-password">Password</label>
                        <input class="full-width has-padding has-border" type="password" id="password" name="password"  required  placeholder="Password">
                        <a href="#0" class="hide-password">Hide</a>
                        <span class="cd-error-message">Error message here!</span>
                    </p>

                    <p class="fieldset">
                        <label class="image-replace cd-password" for="signup-password">Password</label>
                        <input class="full-width has-padding has-border" type="password" id="password_confirmation" name="password_confirmation"  required  placeholder="Password">
                        <a href="#0" class="hide-password">Hide</a>
                        <span class="cd-error-message">Error message here!</span>
                    </p>
                    <p class="fieldset">
                        <label class="image-replace cd-role_id" for="role_id">Select role</label>
                        <select name="role_id" required class="form-control">
                            <option value="agent"> Agent </option>
                            <option value="user"> User </option>
                        </select>
                        <span class="cd-error-message">Error message here!</span>
                    </p>

                    <p class="fieldset">
                        <input type="checkbox"  checked id="accept-terms">
                        <label for="accept-terms">I agree to the <a href="#0">Terms</a></label>
                    </p>

                    <p class="fieldset">
                        <input class="full-width has-padding" type="submit" value="Create account">
                    </p>
                </form>

                <a href="#0" class="cd-close-form">Close</a>
            </div> <!-- cd-signup -->

            <!-- reset password form -->
            <div id="cd-reset-password">
                <p class="cd-form-message">Lost your password? Please enter your email address. You will receive a link to create a new password.</p>

                <form class="cd-form">
                    <p class="fieldset">
                        <label class="image-replace cd-email" for="reset-email">E-mail</label>
                        <input class="full-width has-padding has-border" id="reset-email" type="email" placeholder="E-mail">
                        <span class="cd-error-message">Error message here!</span>
                    </p>
                    <p class="fieldset">
                        <input class="full-width has-padding" type="submit" value="Reset password">
                    </p>
                </form>

                <p class="cd-form-bottom-message"><a href="#0">Back to log-in</a></p>
            </div> <!-- cd-reset-password -->
            <a href="#0" class="cd-close-form">Close</a>
        </div> <!-- cd-user-modal-container -->
    </div> <!-- cd-user-modal -->
</div><!-- /.header-overlay-content -->
