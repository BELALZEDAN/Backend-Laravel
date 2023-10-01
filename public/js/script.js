/* -----------------------------------------------------------------------------



File:           JS Core
Version:        1.0
Last change:    00/00/00
-------------------------------------------------------------------------------- */
(function() {

    "use strict";

    var Itsource = {
        init: function() {
            this.Basic.init();
        },

        Basic: {
            init: function() {

                this.preloader();
                this.Animation();
                this.BackgroundImage();
                this.MobileStickyMenu();
                this.ArchFMainSliderOne();
                this.ArchFProjectSlider();


            },
            preloader: function() {
                jQuery(window).on('load', function() {
                    jQuery('#preloader').fadeOut('slow', function() { jQuery(this).remove(); });
                });
            },
            BackgroundImage: function() {
                $('[data-background]').each(function() {
                    $(this).css('background-image', 'url(' + $(this).attr('data-background') + ')');
                });
            },
            Animation: function() {
                if ($('.wow').length) {
                    var wow = new WOW({
                        boxClass: 'wow',
                        animateClass: 'animated',
                        offset: 0,
                        mobile: true,
                        live: true
                    });
                    wow.init();
                }
            },
            MobileStickyMenu: function() {
                jQuery(window).on('scroll', function() {
                    if (jQuery(window).scrollTop() > 250) {
                        jQuery('.main-header-area').addClass('sticky-on')
                    } else {
                        jQuery('.main-header-area').removeClass('sticky-on')
                    }
                })
                $('.str-open_mobile_menu').on("click", function() {
                    $('.str-mobile_menu_wrap').toggleClass("mobile_menu_on");
                });
                $('.str-open_mobile_menu').on('click', function() {
                    $('body').toggleClass('mobile_menu_overlay_on');
                });
                if ($('.str-mobile_menu li.dropdown ul').length) {
                    $('.str-mobile_menu li.dropdown').append('<div class="dropdown-btn"><span class="fa fa-angle-down"></span></div>');
                    $('.str-mobile_menu li.dropdown .dropdown-btn').on('click', function() {
                        $(this).prev('ul').slideToggle(500);
                    });
                }
            },
            ArchFMainSliderOne: function() {
                jQuery('.archf-slider-wrapper').owlCarousel({
                    items: 1,
                    margin: 0,
                    loop: true,
                    nav: false,
                    dots: true,
                    navSpeed: 800,
                    autoplay: false,
                    smartSpeed: 2000,
                    animateOut: 'fadeOut',
                    animateIn: 'fadeIn',
                })
            },
            ArchFProjectSlider: function() {
                $('.archf-project-slider').owlCarousel({
                    margin: 30,
                    responsiveClass: true,
                    nav: false,
                    dots: true,
                    loop: true,
                    center: true,
                    autoplay: false,
                    smartSpeed: 1000,
                    responsive: {
                        0: {
                            items: 1,
                        },
                        400: {
                            items: 1,
                        },
                        600: {
                            items: 1,
                        },
                        700: {
                            items: 1,
                        },
                        1000: {
                            items: 2,
                        }
                    },
                })
            },

        }
    }
    jQuery(document).ready(function() {
        Itsource.init();
    });

})();