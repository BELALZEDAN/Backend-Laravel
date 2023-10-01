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
                this.MobileStickyMenu();
                this.MainSliderOne();
                this.SideInner();
                this.MainSliderTwo();
                this.BeforeAfterImg();
                this.PartnerSlider();
                this.videoBox();
                this.PartnerSlider2();
                this.BackgroundImage();
                this.MemberSlider();
                this.MemberSocial();
                this.bannerParalax();
                this.counterUp();
                this.SkillProgress();
                this.faqShadow();
                this.PortfolioFilterTab();
                this.countDown();
                this.ScrollTop();
                this.ShopItem();
                this.blogSlider();


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
            SideInner: function() {
                $('.open_side_area').on("click", function() {
                    $('.wide_side_inner').toggleClass("wide_side_on");
                });
                $('.open_side_area').on('click', function() {
                    $('body').toggleClass('body_overlay_on');
                });
            },
            MainSliderOne: function() {
                var owl = $('#main-slider-id');
                owl.owlCarousel({
                    loop: true,
                    items: 1,
                    thumbs: true,
                    thumbImage: false,
                    thumbsPrerendered: true,
                    thumbContainerClass: 'm-slider-thumbs',
                    thumbItemClass: 'm-slider-thumb-item'
                })
            },
            MainSliderTwo: function() {
                jQuery('#main-slider-id2').owlCarousel({
                    items: 1,
                    margin: 0,
                    loop: true,
                    nav: true,
                    dots: false,
                    navSpeed: 800,
                    autoplay: false,
                    navText: ["Prev", "Next"],
                    smartSpeed: 2000,
                    animateOut: 'fadeOut',
                    animateIn: 'fadeIn',
                })
            },
            BeforeAfterImg: function() {
                if ($("#beforeafter").length) {
                    $(window).load(function() {
                        $("#beforeafter").twentytwenty();
                    });
                }
            },
            PartnerSlider: function() {
                $('#client-slide').owlCarousel({
                    margin: 105,
                    autoplay: true,
                    loop: true,
                    nav: false,
                    dots: false,
                    autoplay: true,
                    autoplaySpeed: 6000,
                    responsiveClass: true,
                    autoplayTimeout: 6000,
                    autoplayHoverPause: true,
                    slideTransition: 'linear',
                    responsive: {
                        0: {
                            items: 1,
                        },
                        400: {
                            items: 1,
                        },
                        600: {
                            items: 2,
                        },
                        700: {
                            items: 3,
                        },
                        1000: {
                            items: 4,

                        },
                        1400: {
                            items: 5,

                        },
                        1600: {
                            items: 5,
                        },

                    },
                })
            },
            videoBox: function() {
                jQuery('.video_box').magnificPopup({
                    disableOn: 200,
                    type: 'iframe',
                    mainClass: 'mfp-fade',
                    removalDelay: 160,
                    preloader: false,
                    fixedContentPos: false,
                });
            },
            PartnerSlider2: function() {
                $('#client-slide-2').owlCarousel({
                    margin: 30,
                    autoplay: true,
                    loop: true,
                    nav: false,
                    dots: false,
                    autoplay: true,
                    autoplaySpeed: 6000,
                    responsiveClass: true,
                    autoplayTimeout: 6000,
                    autoplayHoverPause: true,
                    slideTransition: 'linear',
                    responsive: {
                        0: {
                            items: 1,
                        },
                        400: {
                            items: 1,
                        },
                        600: {
                            items: 3,
                        },
                        700: {
                            items: 3,
                        },
                        1000: {
                            items: 4,

                        },
                        1300: {
                            items: 5,

                        }
                    },
                })
            },
            MemberSlider: function() {
                $('#team-slider-id').owlCarousel({
                    margin: 40,
                    responsiveClass: true,
                    nav: true,
                    dots: false,
                    loop: true,
                    autoplay: false,
                    navText: ["Prev", "Next"],
                    smartSpeed: 1000,
                    responsive: {
                        0: {
                            items: 1,
                        },
                        400: {
                            items: 1,
                        },
                        600: {
                            items: 2,
                        },
                        700: {
                            items: 2,
                        },
                        1000: {
                            items: 3,

                        },
                        1300: {
                            items: 4,

                        },
                        1600: {
                            items: 5,

                        },
                    },
                })
            },
            MemberSocial: function() {
                $('.mem-social-btn').click(function() {
                    if ($(this).hasClass('current')) {
                        $(this).removeClass('current');
                    } else {
                        $('mem-social-btn.current').removeClass('current');
                        $(this).addClass('current');
                    }
                });
            },
            bannerParalax: function() {
                $('.parallax-bg').jarallax({
                    speed: 0.3,
                });
            },
            counterUp: function() {
                if ($(".odometer").length) {
                    $('.odometer').appear();
                    $(document.body).on('appear', '.odometer', function(e) {
                        var odo = $(".odometer");
                        odo.each(function() {
                            var countNumber = $(this).attr("data-count");
                            $(this).html(countNumber);
                        });
                    });
                }
            },
            SkillProgress: function() {
                if ($(".progress-bar").length) {
                    var $progress_bar = $('.progress-bar');
                    $progress_bar.appear();
                    $(document.body).on('appear', '.progress-bar', function() {
                        var current_item = $(this);
                        if (!current_item.hasClass('appeared')) {
                            var percent = current_item.data('percent');
                            current_item.css('width', percent + '%').addClass('appeared').parent().append('<span>' + percent + '%' + '</span>');
                        }

                    });
                };
            },
            faqShadow: function() {
                $(document).on('click', '.faq_area', function() {
                    $(this).addClass('active').siblings().removeClass('active')
                })
            },
            PortfolioFilterTab: function() {
                jQuery(window).on('load', function() {
                    if ($(".filtr-container").length) {
                        $('.filtr-container').imagesLoaded(function() {});
                        var filterizd = $('.filtr-container');

                        if (filterizd.length) {
                            filterizd.filterizr({});
                            $('.filtr-button').on('click', function() {
                                $('.filtr-button.filtr-active').removeClass('filtr-active');
                                $(this).addClass('filtr-active');
                            });
                        };
                    };
                });
            },
            countDown: function() {
                if ($('.coming-countdown').length > 0) {
                    var deadlineDate = new Date('April 26, 2021 23:59:59').getTime();
                    var countdownDays = document.querySelector('.days .arch-count-down-number');
                    var countdownHours = document.querySelector('.hours .arch-count-down-number');
                    var countdownMinutes = document.querySelector('.minutes .arch-count-down-number');
                    var countdownSeconds = document.querySelector('.seconds .arch-count-down-number');
                    setInterval(function() {
                        var currentDate = new Date().getTime();
                        var distance = deadlineDate - currentDate;
                        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
                        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                        var seconds = Math.floor((distance % (1000 * 60)) / 1000);
                        countdownDays.innerHTML = days;
                        countdownHours.innerHTML = hours;
                        countdownMinutes.innerHTML = minutes;
                        countdownSeconds.innerHTML = seconds;
                    }, 1000);

                };
            },
            ScrollTop: function() {
                $(window).on("scroll", function() {
                    if ($(this).scrollTop() > 200) {
                        $('.scrollup').fadeIn();
                    } else {
                        $('.scrollup').fadeOut();
                    }
                });

                $('.back-top-btn, .scrollup').on("click", function() {
                    $("html, body").animate({
                        scrollTop: 0
                    }, 800);
                    return false;
                });
            },
            blogSlider: function() {
                jQuery('#blod_slide').owlCarousel({
                    items: 1,
                    loop: true,
                    nav: true,
                    dots: false,
                    autoplay: false,
                    navSpeed: 800,
                    smartSpeed: 1000,
                    animateOut: 'fadeOut',
                    navText: ["<i class='fas fa-arrow-left'></i>", "<i class='fas fa-arrow-right'></i>"],
                });
            },
            ShopItem: function() {
                if ($("#slider-range").length) {
                    $("#slider-range").slider({
                        range: true,
                        min: 0,
                        max: 3000,
                        values: [0, 1500],
                        slide: function(event, ui) {
                            $("#amount").val("$" + ui.values[0] + " - $" + ui.values[1]);
                        }
                    });
                };
                if ($("#amount").length) {
                    $("#amount").val("$" + $("#slider-range").slider("values", 0) +
                        " - $" + $("#slider-range").slider("values", 1));
                };
                $('.count').prop('disabled', true);
                $(document).on('click', '.plus', function() {
                    $('.count').val(parseInt($('.count').val()) + 1);
                });
                $(document).on('click', '.minus', function() {
                    $('.count').val(parseInt($('.count').val()) - 1);
                    if ($('.count').val() == 0) {
                        $('.count').val(1);
                    }
                });
            },
        }
    }
    jQuery(document).ready(function() {
        Itsource.init();
    });

})();