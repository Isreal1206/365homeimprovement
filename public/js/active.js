(function ($) {
    'use strict';

    var $window = $(window);

    // :: 1.0 Masonary Gallery Active Code

    var proCata = $('.amado-pro-catagory');
    var singleProCata = ".single-products-catagory";
    var t_proCata = $('.training-pro-catagory');
    var trainingProCata = ".training-products-catagory";

    if ($.fn.imagesLoaded) {
        proCata.imagesLoaded(function () {
            proCata.isotope({
                itemSelector: singleProCata,
                percentPosition: true,
                masonry: {
                    columnWidth: singleProCata
                }
            });
        });
    }

    if ($.fn.imagesLoaded) {
        t_proCata.imagesLoaded(function () {
            t_proCata.isotope({
                itemSelector: trainingProCata,
                percentPosition: true,
                masonry: {
                    columnWidth: trainingProCata
                }
            });
        });
    }

})(jQuery);