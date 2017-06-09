////////////////////////////////////////
//        Mean Menu                   //
////////////////////////////////////////


// you can change the settings in \josh_seed\js\jquery.meanmenu.js

(function ($) {
    $(document).ready(function () {


////////////////////////////////////////
//        Mean Menu                   //
////////////////////////////////////////
        $('header nav').meanmenu();



////////////////////////////////////////
//        Owl Carousel                //
////////////////////////////////////////


        $('.owl-carousel-content').owlCarousel({
            dots: true,
            autoplay: false,
            items: 1
        });

        $('.owl-carousel-hero').owlCarousel({
            dots: true,
            autoplay: false,
            items: 1,
            navText : ["<i class='fa fa-chevron-left'></i>","<i class='fa fa-chevron-right'></i>"]
        });



});
})(jQuery);


////////////////////////////////////////
//        Scroll Reveal               //
////////////////////////////////////////

// https://github.com/jlmakes/scrollreveal
//
// // Changing the defaults
//     window.sr = ScrollReveal({ reset: true });
//
// // Customizing a reveal set
// sr.reveal('.foo', { duration: 200 });
//
// // Basic usage and variations
// window.sr = ScrollReveal();
// sr.reveal('.foo');
// sr.reveal('.bar');
//
// // Is the same as...
// window.sr = ScrollReveal().reveal('.foo, .bar');



