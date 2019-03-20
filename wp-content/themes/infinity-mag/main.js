(function ($) {
    //every thing goes here...

    $(document).on('click','.dw-search-btn',function () {
       $('.search-big-box').addClass('show-search');
    });

    $(document).on('click','.search-big-box .close-button',function () {
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

    $(document).on('click','.nav-btn',function () {
        $('.dw-navbar .dw-menu').toggleClass('opened');
        $('.dw-navbar .overlay').show();
    });

    $(document).on('click','.dw-navbar .overlay',function () {
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
        dots:true,
        autoplaySpeed: 2000,
        navText: ["<i class='fa fa-angle-right'></i>", "<i class='fa fa-angle-left'></i>"],
        responsive: {
            0: {
                items: 1 ,
                dotsEach: 1
            },
            600: {
                items: 1 ,
                dotsEach: 1
            },
            1000: {
                items: 1 ,
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
        dots:true,
        autoplaySpeed: 2000,
        navText: ["<i class='fa fa-angle-up'></i>", "<i class='fa fa-angle-down'></i>"],
        responsive: {
            0: {
                items: 1 ,
                dotsEach: 1
            },
            600: {
                items: 2 ,
                dotsEach: 3
            },
            1000: {
                items: 3 ,
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
        dots:true,
        autoplaySpeed: 2000,
        navText: ["<i class='fa fa-angle-up'></i>", "<i class='fa fa-angle-down'></i>"],
        responsive: {
            0: {
                items: 1 ,
                dotsEach: 1
            },
            600: {
                items: 2 ,
                dotsEach: 1
            },
            1000: {
                items: 2 ,
                dotsEach: 1
            }
        }
    });

    // $(document).on('click','.menu-item-has-children .menu-item-has-children',function () {
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

    $(document).on('click','#menu-main-menu>li.menu-item-has-children>a',function () {
        if($(this).parent().find('.sub-menu').first().is(':visible')){
            $(this).parent().find('.sub-menu').first().slideUp('slow');
        }else{
            $(this).parent().find('.sub-menu').first().slideToggle('slow');
        }
    });

    $(document).on('click','#menu-main-menu>li.menu-item-has-children>ul>.menu-item-has-children>a',function () {
        if($(this).parent().find('.sub-menu').is(':visible')){
            $(this).parent().find('.sub-menu').slideUp('slow');
        }else{
            $(this).parent().find('.sub-menu').slideToggle('slow');
        }
    });

})(jQuery);