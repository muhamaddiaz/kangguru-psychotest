$(function() {
    $('.navbar-custom-menu').localScroll();
    $(window).scroll(function() {
        let tx = $(this).scrollTop();
        let navbar = $('#navbar-custom');
        let intro = $('.intro-centered-content');
        if(tx > 150) {
            navbar.addClass('navbar-fixed-top');
        } else {
            navbar.removeClass('navbar-fixed-top');
        }
        intro.css('transform', 'translateY(' + (tx / 9) + '%)');
        intro.css('opacity', '' + 1 - (tx / 1000) + '');
    });
});