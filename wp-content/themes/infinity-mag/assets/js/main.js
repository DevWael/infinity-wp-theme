jQuery(document).ready(function ($) {
    "use strict";
    //Loading bar
    var nanobar = new Nanobar();
    nanobar.go(100);

    //Top header posts carousel
    var header_posts = $(".top-header-posts .posts-carousel");
    var header_bool = header_posts.children().length > 1 ? !0 : !1;
    header_posts.owlCarousel({
        autoplay: true,
        loop: header_bool,
        nav: false,
        dots: false,
        autoplayHoverPause: !0,
        responsive: {
            0: {
                items: 1
            },
            500: {
                items: 2
            },
            768: {
                items: 3
            },
            1000: {
                items: 5
            }
        }
    });

    //Sticky Navbar
    $('header.main-header').imagesLoaded(
        function () {
            if ($('.main-menu').hasClass('sticky-nav')) {
                var $navbar = $(".main-menu.sticky-nav"),
                    y_pos = $navbar.offset().top,
                    height = $navbar.height(),
                    top_pos = '';

                if ($('body').hasClass('admin-bar')) {
                    top_pos = '32px';
                } else {
                    top_pos = 0;
                }
                $(document).scroll(function () {
                    var scrollTop = $(this).scrollTop();
                    if (scrollTop > y_pos + height && $(window).width() > 768) {
                        $navbar.addClass("navbar-fixed").animate({
                            top: top_pos
                        });
                        $('.header-block').css({'margin-top': height});
                    } else if (scrollTop <= y_pos) {
                        $navbar.removeClass("navbar-fixed").clearQueue().animate({
                            top: '-45px'
                        }, 0);
                        $('.header-block').css({'margin-top': '0'});
                    }
                });
            }
        }
    );

    //Mobile menu
    $("#navbar .menu,#navbar .navbar-alert").slicknav({prependTo: ".menu-mobile", label: "", allowParentLinks: !0});

    /**
     * Show / Hide Search box in navbar
     */
    (function () {
        var toggle_btn = $('.search-toggle');
        toggle_btn.on('click', function (e) {
            e.preventDefault();
            $('.search-box').toggleClass('show');
            toggle_btn.toggleClass('opened');
            if ($('.search-box').hasClass('show')) {
                $('.search-box').find('.search-input').focus();
                toggle_btn.find('i').removeClass('fa-search');
                toggle_btn.find('i').addClass('fa-close');
            } else {
                toggle_btn.find('i').removeClass('fa-close');
                toggle_btn.find('i').addClass('fa-search');
            }
        })
    })();

    //Top news ticker carousel --> Since V1.2
    var ticker_posts = $(".news-ticker .posts-carousel");
    var ticker_bool = ticker_posts.children().length > 1 ? !0 : !1;
    ticker_posts.owlCarousel({
        autoplay: true,
        loop: ticker_bool,
        nav: true,
        dots: false,
        paginationSpeed: 400,
        mouseDrag: false,
        touchDrag: false,
        pullDrag: false,
        animateIn: 'fadeInDown',
        animateOut: 'fadeOutRight',
        items: 1,
        autoplayHoverPause: !0
    });

    //Main 3 carousels
    var center_slide = $("#center-slide");
    var center_box = center_slide.children().length > 1 ? !0 : !1;
    center_slide.owlCarousel({
        loop: center_box,
        nav: center_box,
        dots: false,
        center: true,
        autoWidth: true,
        autoplay: !0,
        autoplayHoverPause: !0,
        animateIn: "fadeIn",
        animateOut: "fadeOut",
        responsive: {
            0: {
                items: 1,
                autoWidth: false,
                nav: false
            },
            500: {
                items: 1,
                center: false,
                autoWidth: false
            },
            768: {
                items: 3
            }
        }
    });

    var double = $("#double-slides");
    var double_box = double.children().length > 1 ? !0 : !1;
    double.owlCarousel({
        loop: double_box,
        nav: 0,
        dots: double_box,
        autoplay: true,
        margin: 3,
        autoplayHoverPause: true,
        animateIn: "fadeIn",
        animateOut: "fadeOut",
        responsive: {
            0: {
                items: 1,
                dots: 0
            },
            500: {
                items: 1
            },
            768: {
                items: 2
            }
        }
    });

    var many_slides = $("#many-slides");
    var many_box = many_slides.children().length > 1 ? !0 : !1;
    many_slides.owlCarousel({
        loop: many_box,
        nav: many_box,
        dots: many_box,
        items: 1,
        autoplay: !0,
        autoplayHoverPause: !0,
        animateIn: "fadeIn",
        animateOut: "fadeOut",
        responsive: {
            0: {
                items: 1,
                dots: 0
            },
            600: {
                items: 2
            },
            900: {
                items: 3
            },
            1100: {
                items: 4
            }
        }
    });

    //Tool top for images posts
    $('.img-grid li a, .pictures-posts a').tooltip();

    //Sticky Sidebar
    var margin_top = '';
    if ($('body').hasClass('admin-bar') && $('.main-menu').hasClass('sticky-nav')) {
        margin_top = 100;
    }
    else if (!$('body').hasClass('admin-bar') && $('.main-menu').hasClass('sticky-nav')) {
        margin_top = 70;
    }
    else {
        margin_top = 30;
    }
    $('.sticky-sidebar').theiaStickySidebar({
        minWidth: 992,
        additionalMarginTop: margin_top
    });

    //Masonry Block
    var a = $(".masonry-grid").imagesLoaded(function () {
        a.masonry({itemSelector: ".item", percentPosition: true, isAnimated: true})
    });

    //Gallery post format carousel
    var b = $(".single-slide"),
        i = b.children().length > 1 ? !0 : !1;
    b.owlCarousel({
        loop: i,
        nav: i,
        dots: i,
        items: 1,
        autoplay: !0,
        autoplayHoverPause: !0,
        animateIn: "fadeIn",
        animateOut: "fadeOut"
    });

    //Magazine slider block
    var carouselCount = 0;
    $(".carousel-box").each(function () {
        $(this).addClass("carousel-" + carouselCount);
        $('.carousel-' + carouselCount + ' .carousel-block').owlCarousel({
            loop: false,
            margin: 15,
            responsiveClass: true,
            autoplay: true,
            navContainer: '.carousel-' + carouselCount + ' .block-name',
            animateIn: "fadeIn",
            animateOut: "fadeOut",
            responsive: {
                0: {
                    items: 1,
                    nav: false
                },

                750: {
                    items: 2,
                    nav: true
                },
                1000: {
                    items: 3,
                    nav: true
                }
            }
        });
        carouselCount++;
    });

    //Second Magazine slider
    var sliderCount = 0;
    $(".slides-box").each(function () {
        $(this).addClass("slide-" + sliderCount);
        $('.slide-' + sliderCount + ' .carousel-slides').owlCarousel({
            loop: true,
            margin: 15,
            responsiveClass: true,
            items: 1,
            autoplay: true,
            animateIn: "fadeIn",
            animateOut: "fadeOut"
        });
        sliderCount++;
    });

    $(".singular-post").fitVids();

    //Widget Slider
    var widget_carousel = 0;
    $(".widget-carousel").each(function () {
        $(this).addClass("wid-carousel-" + widget_carousel);
        var widget_carousel_selector = $('.wid-carousel-' + widget_carousel + '.widget-carousel');
        var widget_box = widget_carousel_selector.children().length > 1 ? !0 : !1;
        widget_carousel_selector.owlCarousel({
            loop: widget_box,
            nav: widget_box,
            dots: widget_box,
            responsiveClass: true,
            autoplay: true,
            autoplayHoverPause: !0,
            items: 1,
            animateIn: "fadeIn",
            animateOut: "fadeOut"
        });
        widget_carousel++;
    });

    $(".magnific-gallery").magnificPopup({
        type: "image",
        image: {
            markup: '<div class="mfp-figure"><div class="mfp-close"></div><div class="mfp-img"></div><div class="mfp-bottom-bar"><div class="mfp-title"></div></div></div>',
            cursor: "mfp-zoom-out-cur",
            titleSrc: "title",
            verticalFit: !0,
            tError: '<a href="%url%">The image</a> could not be loaded.'
        },
        gallery: {enabled: !0},
        removalDelay: 300,
        mainClass: "mfp-fade"
    });

    if ($('body').hasClass('window-code')) {
        $("pre code").each(function (e, a) {
            hljs.highlightBlock(a)
        });
    }

    //Scroll to top
    $(window).scroll(function () {
        $(this).scrollTop() > 250 ? $("#scroll").fadeIn() : $("#scroll").fadeOut();
    });
    $("#scroll").click(function () {
        return $("html, body").animate({scrollTop: 0}, 800), !1
    });

    //Top footer posts carousel --> Since V1.2
    var footer_posts = $(".footer-posts-carousel .posts-carousel");
    var footer_bool = footer_posts.children().length > 1 ? !0 : !1;
    footer_posts.owlCarousel({
        autoplay: true,
        loop: footer_bool,
        nav: false,
        dots: false,
        margin: 30,
        autoplayHoverPause: !0,
        responsive: {
            0: {
                items: 1
            },
            500: {
                items: 2
            },
            768: {
                items: 3
            },
            1000: {
                items: 5
            }
        }
    });

    var insta = $(".insta-carousel"),
        insta_ii = insta.children().length > 1 ? !0 : !1;
    insta.owlCarousel({
        loop: insta_ii,
        nav: false,
        dots: false,
        items: 1,
        autoplay: !0,
        autoplayHoverPause: !0,
        responsive: {
            0: {
                items: 2
            },
            500: {
                items: 3
            },
            768: {
                items: 4
            },
            900: {
                items: 5
            },
            1000: {
                items: 6
            }
        }
    });

    //Post Fly Box & Reading Position Indicator
    /**
     * Save Cookie in browser
     * @param key
     * @param value
     */
    function bbioon_setCookie(key, value) {
        var expires = new Date();
        expires.setTime(expires.getTime() + ("1" * 24 * 60 * 60 * 1000));
        document.cookie = key + '=' + value + ';expires=' + expires.toUTCString();
    }

    /**
     * Get saved Cookie from browser
     * @param key
     * @returns string Cookie value
     */
    function bbioon_getCookie(key) {
        var keyValue = document.cookie.match('(^|;) ?' + key + '=([^;]*)(;|$)');
        return keyValue ? keyValue[2] : null;
    }

    var reading_content = $('.blog-column').find('.post-box-content');
    if (reading_content.length > 0) {
        reading_content.imagesLoaded(function () {
            var content_height = reading_content.height();
            var window_height = $(window).height();
            $(window).scroll(function () {
                var percent = 0, content_offset = reading_content.offset().top;
                var window_offest = $(window).scrollTop();
                if (window_offest > content_offset) {
                    percent = 100 * (window_offest - content_offset) / (content_height - window_height);
                }
                //Reading Position Indicator
                $('.reading-indicator').css('width', percent + '%');

                //Post Fly Box
                if ((bbioon_getCookie('bbioon_fly_box') !== '1')) {
                    if (percent >= 80) {
                        $('.bbioon-fly-box').stop().animate({right: "0px"}, 600);
                    } else {
                        $('.bbioon-fly-box').stop().animate({right: '-' + '360', easing: "linear"}, 600);
                    }
                }
            });
        });
    }

    //Fly box will not be visible to current user any more...
    if (bbioon_getCookie('bbioon_fly_box') === '1') {
        $('.bbioon-fly-box').css('display', 'none');
    }
    $('.delete-fly-box').click(function () {
        $('.bbioon-fly-box').stop().animate({right: '-' + '360', easing: "linear"}, 300);
        bbioon_setCookie('bbioon_fly_box', '1');
    });

    //Close Fly box temporarily
    $('.close-fly-box').click(function () {
        $('.bbioon-fly-box').stop().animate({right: '-' + '360', easing: "linear"}, 300).css('display', 'none');
    });

});