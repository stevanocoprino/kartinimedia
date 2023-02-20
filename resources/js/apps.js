'use strict'

require('./bootstrap');

// Functions
require('./functions/global');
require('slick-carousel/slick/slick.min.js');


$( document ).ready(function() {

    "use strict";
    
    $('.slider-home').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 5000,
        arrows: false,
        dots: true,
    });

    $('.slider-video').slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        arrows: false
    });
});