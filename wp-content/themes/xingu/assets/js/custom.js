(function ($) {

    'use strict';

    var $slides = $('#header-slider');
    var images = $slides.data('slides');
    var count = images.length;

    var slideshow = function () {
        let url = 'url("' + images[Math.floor(Math.random() * count)]+'")';
        $slides
            .fadeOut(1500, function () {
                $slides.css('background-image', url);
                setTimeout(slideshow, 5000);
            })            
            .fadeIn(1000, () => {
                $slides.css('background-image', url);
        });
    };

    slideshow();

}(jQuery));

(function ($) {
    'use strict';

    $(window).scroll(function () {
        if ($(document).scrollTop() > 120) {
            $('#navbar').addClass('navbar-custom-scrolled');
            $('#navbar').removeClass('navbar-custom');
        }
        if ($(document).scrollTop() == 0) {
            $('#navbar').addClass('navbar-custom');
            $('#navbar').removeClass('navbar-custom-scrolled');
        }
    });
}(jQuery));
