$(window).scroll(function(){
    if ($(window).scrollTop() > 10) {
        $('nav').addClass('navbar-shadow');
    } else {
        $('nav').removeClass('navbar-shadow');
    }
});