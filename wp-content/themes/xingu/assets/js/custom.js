(function ($) {

    'use strict';

    var $slides = $('#header-slider');
    var images = $slides.data('slides');
    var count = images.length;

    var slideshow = function () {
        let url = 'url("' + images[Math.floor(Math.random() * count)]+'")';
        $slides
            .css('background-image', url)
            .show(0, function () {
                setTimeout(slideshow, 2000);
            });
    };

    slideshow();

}(jQuery));
