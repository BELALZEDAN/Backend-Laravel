<section id="archf-footer" class="archf-footer-section">
    <div class="archf-footer-content" data-background="img/home/footer.jpg">
        <div class="container">
            <div class="archf-footer-widget-area">
                <div class="row">

                    <div class="col-lg-4">
                        <div class="archf-footer-widget headline pera-content">
                            <div class="archf-footer-about-widget">
                                <div class="footer-logo">
                                    <a href="#"><img src="img/logo/logo2.png" alt=""></a>
                                </div>
                                <div class="contact-icon-text">
                                    <div class="w-contact-icon float-left">
                                        <i class="fas fa-map-marker-alt"></i>
                                    </div>
                                    <div class="w-contact-text">
                                        18 4th St - Musaffah - ICAD I - Abu Dhabi
                                    </div>
                                </div>
                                <div class="contact-icon-text">
                                    <div class="w-contact-icon float-left">
                                        <i class="far fa-envelope-open"></i>
                                    </div>
                                    <div class="w-contact-text">
                                        <span>
                                            <a href="mailto:{{ $contacts->email }}">{{ $contacts->email }}</a>
                                        </span>
                                    </div>
                                </div>
                                <div class="contact-icon-text">
                                    <div class="w-contact-icon float-left">
                                        <i class="fas fa-phone"></i>
                                    </div>
                                    <div class="w-contact-text">
                                        <a href="tel:{{ $contacts->phone }}">{{ $contacts->phone }}</a>
                                    </div>
                                </div>
                                <div class="contact-icon-text">
                                    <div class="w-contact-icon float-left">
                                        <i class="fas fa-phone"></i>
                                    </div>
                                    <div class="w-contact-text">
                                        <a href="tel:{{ $contacts->mobile }}">{{ $contacts->mobile }}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-2">
                        <div class="archf-footer-widget headline pera-content ul-li-block">
                            <div class="archf-footer-menu-widget">
                                <h3 class="widget-title">Links</h3>
                                <ul>
                                    <li><a href="{{ route('about') }}">About us</a></li>
                                    <li><a href="{{ route('gallery') }}">Gallery </a></li>
                                    <li><a href="{{ route('contact') }}">Contact Us</a></li>
                                    <li><a href="{{ route('workshop') }}">Workshop</a></li>
                                    <li><a href="{{ route('woodCarving') }}">Wood Carving</a></li>

                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3">
                    </div>

                    <div class="col-lg-3">
                        <div class="archf-footer-widget headline pera-content ul-li-block">
                            <div class="archf-footer-nl-widget">
                                <h3 class="widget-title">Questions</h3>
                                <p>If you have any question please write it here:</p>
                                <form action="#">
                                    <input type="email" placeholder="Your email Here">
                                    <button type="submit"><i class="fas fa-envelope"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="archf-copyright-content">
                <div class="row">

                    <div class="col-lg-4">
                    </div>

                    <div class="col-lg-4">
                        <div class="copyright-social text-center">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-behance"></i></a>
                            <a href="#"><i class="fab fa-linkedin"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
