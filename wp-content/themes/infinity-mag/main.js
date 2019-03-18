(function ($) {
    //every thing goes here...

    $(document).on('click','.dw-search-btn',function () {
       $('.search-big-box').addClass('show-search');
    });

    $(document).on('click','.search-big-box .close-button',function () {
       $('.search-big-box').removeClass('show-search');
    });


})(jQuery);