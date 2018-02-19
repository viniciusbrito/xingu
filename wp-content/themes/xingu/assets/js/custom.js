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
                setTimeout(slideshow, 5003);
            })            
            .fadeIn(1500, () => {
                $slides.css('background-image', url);
            });
    };

    slideshow();

}(jQuery));
