
<header id="main-header" class="main-header-area header-style-five">
    <div class="container">
        <div class="header-main-menu  clearfix">
            <div class="site-logo float-left">
                <a href="{{ route('main') }}"><img src="/img/logo/logo1.png" alt=""></a>
            </div>
            <div class="main-header-menu-item float-right">
                <nav class="main-navigation-area clearfix ul-li">
                    <ul class="menu-navigation">
                        <li>
                            <a href="{{ route('main') }}">Home</a>
                        </li>
                        <li><a href="{{ route('about') }}">About Us</a></li>
                        <li><a href="{{ route('gallery') }}">Gallery</a></li>

                        <li><a href="{{ route('contact') }}">Contact Us</a></li>
                        <li><a href="{{ route('workshop') }}">Workshop</a></li>
                        <li><a href="{{ route('woodCarving') }}">Wood Carving</a></li>
                    </ul>
                </nav>
                <div class="header-cta-btn text-center float-right">
                    <a href="tel:+97124499887">Get A Quote</a>
                </div>
            </div>
        </div>
        <div class="str-mobile_menu relative-position">
            <div class="str-mobile_menu_button str-open_mobile_menu">
                <i class="flaticon-open-menu"></i>
            </div>
            <div class="str-mobile_menu_wrap">
                <div class="mobile_menu_overlay str-open_mobile_menu"></div>
                <div class="str-mobile_menu_content">
                    <div class="str-mobile_menu_close str-open_mobile_menu">
                        <img src="/img/logo/cls.png" alt="">
                    </div>
                    <div class="m-brand-logo text-center">
                        <a href="index.html"><img src="/img/logo/logo1.png" alt=""></a>
                    </div>
                    <nav class="str-mobile-main-navigation  clearfix ul-li">
                        <ul id="main-nav" class="navbar-nav text-capitalize clearfix">
                            <li>
                                <a href="{{ route('main') }}">Home</a>
                            </li>
                            <li><a href="{{ route('about') }}">About Us</a></li>
                            <li><a href="{{ route('gallery') }}">Gallery</a></li>
                            <li><a href="{{ route('contact') }}">Contact Us</a></li>
                            <li><a href="{{ route('workshop') }}">Workshop</a></li>
                            <li><a href="{{ route('woodCarving') }}">Wood Carving</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <!-- /mobile-menu -->
    </div>
</header>

