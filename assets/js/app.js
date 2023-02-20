let navOuterHeight = $('nav').outerHeight();

$(window).scroll(function(){
    if ($(window).scrollTop() > 10) {
        $('nav').addClass('navbar-shadow');
    } else {
        $('nav').removeClass('navbar-shadow');
    }
});

function renderTooltip() {
    $('[data-toggle="tooltip"]').tooltip()
}

$(function(){
    renderTooltip();
});

$('a[href*="#"]').not('[href="#"]').not('[href="#0"]').click(function(event){
    if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname){
        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
        if (target.length){
            event.preventDefault();
            $('html, body').animate({
                scrollTop: target.offset().top-navOuterHeight+25
            }, 1000);
        }
    }
});