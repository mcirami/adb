jQuery(document).ready(function($){

    var mySwiper = new Swiper('.swiper-container', {
        speed: 3000,
        effect: 'fade',
        loop: true,
        autoplay: true,
        delay: 5000
    });

    $('.mobile_menu_icon').click(function(e){
        e.preventDefault();
        $(this).toggleClass('open');

        if ($('.menu').hasClass('open')) {
            $('.wrapper').removeClass('fixed');
        } else {
            window.setTimeout(function(){$('.wrapper').addClass('fixed');}, 800);
        }

        $('.menu').toggleClass('open');
        //$('body').toggleClass('fixed');
    });

    $(window).on('resize', function(){

        if ($(window).width() > 767) {
            $('.menu').removeClass('open');
            $('.mobile_menu_icon').removeClass('open');
        }

    });

    $('.image_gallery').fancybox({
        loop     : true,
        arrows : true
    });
});
