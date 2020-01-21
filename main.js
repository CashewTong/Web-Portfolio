$(document).ready(function () {
    $('.menu_toggler').on('click', function(){
        $(this).toggleClass('open');
        $('.top_nav').toggleClass('open');
    })

    $('.top_nav .nav_link').on('click', function(){
        $('menu_toggler').removeClass('open');
        $('.top_nav').removeClass('open');
    })

    $('nav a[href*="#"]').on('click', function(){
        $('html, body').animate({
            scrollTop: $($(this).attr('href')).offset().top - 100
        }, 2000);
    })

    $('#up').on('click', function(){
        $('html, body').animate({
            scrollTop: 0
        }, 2000);
    })


    /*initailize AOS*/
    AOS.init({
        easing: 'ease',
        duration: 1800,
        once: true
    })

});