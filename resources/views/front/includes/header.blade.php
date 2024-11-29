<header class="ec-header">
        <!--Ec Header Top Start -->
        <div class="header-top">
            <div class="container">
                <div class="row align-items-center">
                    <!-- Header Top Category Toggle Start -->
                    <a href="#ec-mobile-sidebar" class="ec-header-btn ec-sidebar-toggle d-lg-none">
                        <i class="fi fi-rr-apps"></i>
                    </a>
                   
                    <div class="col text-center header-top-center">
                        <div class="header-top-message">
                            100% secure delivery without contacting the courier
                        </div>
                    </div>
                 
                    <div class="col d-lg-none ">
                        <div class="ec-header-bottons">

                            <a href="#ec-mobile-menu" class="ec-header-btn ec-side-toggle d-lg-none">
                                <i class="fi-rr-menu-burger"></i>
                            </a>
                            <!-- Header menu End -->
                        </div>
                    </div>
                    <!-- Header Top responsive Action -->
                </div>
            </div>
        </div>
        <!-- Ec Header Top  End -->
        <!-- Ec Header Bottom  Start -->
        <div class="ec-header-bottom d-none d-lg-block">
            <div class="container position-relative">
                <div class="row">
                    <div class="ec-flex">
                        <!-- Ec Header Logo Start -->
                        <div class="align-self-center">
                            <div class="header-logo">
                                <a href="{{url('/')}}"><img src="assets/images/logo/rs.png" alt="Site Logo" /><img class="dark-logo" src="assets/images/logo/rs.png" alt="Site Logo" style="display: none;" /></a>
                            </div>
                        </div>
                        <!-- Ec Header Logo End -->

                        <!-- EC Main Menu Start -->
                        <div id="ec-main-menu-desk" class="d-none d-lg-block sticky-nav">
                            <div class="container position-relative">
                                <div class="row">
                                    <div class="col-md-12 align-self-center">
                                        <div class="ec-main-menu">
                                            <ul>
                                                <li><a href="{{url('/')}}">Home</a></li>
                                                <li><a href="{{url('/about')}}">About</a></li>
                                                <li><a href="{{url('/product')}}">Products</a></li>
                                                <li><a href="{{url('/contact_us')}}">Contact</a></li>
                                                @if(Auth::check())
  
                                            <li><a href="{{ url('/profile') }}">Profile</a></li>
                                             @else
    
                                            <li><a href="{{ url('/login') }}">Login</a></li>
                                             <li><a href="{{ url('/register') }}">Register</a></li>
                                             @endif

                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Ec Main Menu End -->

                        <!-- Ec Header Button Start -->
                        <div class="align-self-center">
                            <div class="ec-header-bottons">
                                <!-- Header User Start -->
                                <div class="ec-header-user dropdown">
                                    <a href="{{url('/contact_us')}}" class="dropdown-toggle button"><span>Contact Us
                                            </span></a>
        
                                </div>
                                <!-- Header User End -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
     

        <!-- ekka Mobile Menu Start -->
        <div id="ec-mobile-menu" class="ec-side-cart ec-mobile-menu">
            <div class="ec-menu-title">
                <span class="menu_title">My Menu</span>
                <button class="ec-close">×</button>
            </div>
            <div class="ec-menu-inner">
                <div class="ec-menu-content">
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="about.php">About</a></li>
                        <li><a href="product.php">Products</a></li>
                        <li><a href="contact_us.php">Contact</a></li>
                    </ul>
                </div>
             
            </div>
        </div>
        <!-- ekka mobile Menu End -->
    </header>