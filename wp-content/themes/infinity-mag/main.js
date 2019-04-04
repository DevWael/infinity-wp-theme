function dw_toast_type(type, title, message) {
    if (type === 'error') {
        toastr.error(message, title);
    }
    if (type === 'warning') {
        toastr.warning(message, title);
    }
    if (type === 'info') {
        toastr.info(message, title);
    }
    if (type === 'success') {
        toastr.success(message, title);
    }
}

toastr.options.positionClass = 'toast-top-center';
toastr.options.progressBar = true;
toastr.options.toastClass = 'dw_toastr';

(function ($) {
    //every thing goes here...

    $(document).on('click', '.dw-search-btn', function () {
        $('.search-big-box').addClass('show-search');
    });

    $(document).on('click', '.search-big-box .close-button', function () {
        $('.search-big-box').removeClass('show-search');
    });

    // if ($(window).width()< 992) {
    //     $('.dw-navbar .dw-menu .menu ul').slideUp();
    // }

    // $(document).on('click','.parent-item>a',function () {
    //     if($(this).parent().find('.sub-menu').first().is(':visible')){
    //         $(this).parent().find('.sub-menu').first().slideUp();
    //     }else{
    //         $(this).parent().find('.sub-menu').first().slideToggle();
    //     }
    // });
    //
    // $(document).on('click','.child-item>a',function () {
    //     if($(this).parent().find('.sub-menu').first().is(':visible')){
    //         $(this).parent().find('.sub-menu').first().slideUp();
    //     }else{
    //         $(this).parent().find('.sub-menu').first().slideToggle();
    //     }
    // });

    $(document).on('click', '.nav-btn', function () {
        $('.dw-navbar .dw-menu').toggleClass('opened');
        $('.dw-navbar .overlay').show();
    });

    $(document).on('click', '.dw-navbar .overlay', function () {
        $('.dw-navbar .dw-menu').toggleClass('opened');
        $('.dw-navbar .overlay').hide();
    });

    // FULL ARTICLE OWL
    $('.full-article-owl').owlCarousel({
        // rtl: true,
        margin: 0,
        autoplay: true,
        loop: true,
        nav: true,
        dots: true,
        autoplaySpeed: 2000,
        navText: ["<i class='fa fa-angle-right'></i>", "<i class='fa fa-angle-left'></i>"],
        responsive: {
            0: {
                items: 1,
                dotsEach: 1
            },
            600: {
                items: 1,
                dotsEach: 1
            },
            1000: {
                items: 1,
                dotsEach: 1
            }
        }
    });

    // MULTI ARTICLE OWL
    $('.multi-article-owl').owlCarousel({
        margin: 20,
        autoplay: true,
        loop: true,
        nav: true,
        dots: true,
        autoplaySpeed: 2000,
        navText: ["<i class='fa fa-angle-up'></i>", "<i class='fa fa-angle-down'></i>"],
        responsive: {
            0: {
                items: 1,
                dotsEach: 1
            },
            600: {
                items: 2,
                dotsEach: 3
            },
            1000: {
                items: 3,
                dotsEach: 3
            }
        }
    });

    // TWO BLOCKS OWL
    $('.two-block-owl').owlCarousel({
        margin: 20,
        autoplay: true,
        loop: true,
        nav: false,
        dots: true,
        autoplaySpeed: 2000,
        navText: ["<i class='fa fa-angle-up'></i>", "<i class='fa fa-angle-down'></i>"],
        responsive: {
            0: {
                items: 1,
                dotsEach: 1
            },
            600: {
                items: 2,
                dotsEach: 1
            },
            1000: {
                items: 2,
                dotsEach: 1
            }
        }
    });

    // $(document).on('click',' ul.menu > li.menu-item-has-children .menu-item-has-children',function () {
    //     $('.dw-navbar .dw-menu .menu .sub-menu ul').hide();
    //     if($(this).find('.sub-menu').is(':visible')){
    //         $(this).find('.sub-menu').hide();
    //     }else{
    //         $(this).find('.sub-menu').toggle();
    //     }
    // });


    // if ($(window).width()< 992) {
    //     $('.dw-navbar .dw-menu .menu ul').slideUp();
    // }

    $(document).on('click', '#menu-main-menu>li.menu-item-has-children>a', function (e) {
        e.preventDefault();
        if ($(this).parent().find('.sub-menu').first().is(':visible')) {
            $(this).parent().find('.sub-menu').first().slideUp('slow');
        } else {
            $(this).parent().find('.sub-menu').first().slideToggle('slow');
        }
    });

    $(document).on('click', '#menu-main-menu>li.menu-item-has-children>ul>.menu-item-has-children>a', function (e) {
        e.preventDefault();
        if ($(this).parent().find('.sub-menu').is(':visible')) {
            $(this).parent().find('.sub-menu').slideUp('slow');
        } else {
            $(this).parent().find('.sub-menu').slideToggle('slow');
        }
    });


    $(window).scroll(function () {
        let nav_height = $('.top-nav-heder').height();
        //console.log($(this).scrollTop());

        if ($(this).scrollTop() > 200 && $(this).scrollTop() < 300) {
            $('.sticky-nav .top-nav-heder').addClass('translatedTop');
        } else if ($(this).scrollTop() > 300) {
            $('.sticky-nav .top-nav-heder').removeClass('translatedTop').addClass("navbar_fixed_top");
            $('.sticky-nav').css('padding-top', nav_height);
            if ($('body').hasClass('admin-bar')) {
                $('.navbar_fixed_top').css('top', '32px');
            } else {
                $('.navbar_fixed_top').css('top', '0px');
            }
        } else {
            $('.sticky-nav').css('padding-top', '0px');
            $('.sticky-nav .top-nav-heder').removeClass('translatedTop').removeClass("navbar_fixed_top").css('top', '0px');
        }
    });


    let carouselCount = 0;
    $(".posts-carousel").each(function () {
        $(this).addClass("carousel-" + carouselCount);
        $('.carousel-' + carouselCount + ' .carousel-loop').owlCarousel({
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


    // COVER POSTS OWL
    $('.cover-posts-owl').owlCarousel({
        margin: 0,
        autoplay: true,
        loop: true,
        nav: true,
        dots: false,
        autoplaySpeed: 2000,
        navText: ["<i class='fa fa-angle-right'></i>", "<i class='fa fa-angle-left'></i>"],
        responsive: {
            0: {
                items: 1,
                dotsEach: 1
            },
            600: {
                items: 1,
                dotsEach: 1
            },
            1000: {
                items: 1,
                dotsEach: 1
            }
        }
    });

    let coverCount = 0;
    $(".carousel-cover-posts").each(function () {
        $(this).addClass("cover-carousel-" + coverCount);
        $('.cover-carousel-' + coverCount + ' .carousel-loop').owlCarousel({
            loop: false,
            margin: 15,
            responsiveClass: true,
            autoplay: true,
            navContainer: '.cover-carousel-' + coverCount + ' .block-name',
            animateIn: "fadeIn",
            animateOut: "fadeOut",
            items: 1,
        });
        coverCount++;
    });


    let ajax_url = dw_ajax_url.ajax_url;
    $(".dw-add-to-cart-ajax").on('click', function (e) {
        e.preventDefault();
        // console.log($(this).data('id'));
        let cart_selector = $('#dw_cart_count_num'),
            cart_counter = parseInt(cart_selector.html()),
            product_id = $(this).data('product_id'),
            product_sku = $(this).data('product_sku');
        $.ajax({
            type: "post",
            dataType: "json",
            url: ajax_url,
            data: {
                action: 'dw_ajax_add_to_cart',
                product_id: product_id,
                product_sku: product_sku,
                quantity: 1,
                nonce: dw_ajax_url.ajax_nonce,
            },
            success: function (response) {
                dw_toast_type(response.data.type, response.data.title, response.data.message);
                if (response.success) {
                    $('#dw_cart_count_num').text(cart_counter + 1);
                } else {
                    setTimeout(
                        function () {
                            window.location.href = response.data.url;
                        }, 3000
                    );
                }
            }
        });
    });

})(jQuery);