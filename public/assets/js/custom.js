jQuery(function($) {
    'use strict';
    $('.banner-slider').owlCarousel({
        items: 1,
        loop: true,
        margin: 0,
        nav: true,
        dots: false,
        smartSpeed: 1000,
        autoplay: true,
        autoplayTimeout: 4000,
        autoplayHoverPause: true,
        animateOut: 'fadeOut',
        animateIn: 'fadeIn',
        navText: ["<i class='icofont-rounded-double-left'></i>", "<i class='icofont-rounded-double-right'></i>"],
    });
    // $('.newsletter-form').ajaxChimp({ url: 'https://envytheme.us20.list-manage.com/subscribe/post?u=60e1ffe2e8a68ce1204cd39a5&amp;id=42d6d188d9', callback: callbackFunction });
}(jQuery));