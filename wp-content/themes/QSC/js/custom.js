/**
 * Home main slider
 */
jQuery('.hero-section__slider').slick({
    dots: false,
    infinite: true,
    speed: 300,
    fade: true,
    autoplay: true,
    autoplaySpeed: 8000,
    slidesToShow: 1,
    slidesToScroll: 1,
    draggable: true,
    prevArrow: '.hero_left_nav',
    nextArrow: '.hero_right_nav',
    responsive: [{
        breakpoint: 1024,
        settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
        }
    }, {
        breakpoint: 768,
        settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
        }
    }, {
        breakpoint: 576,
        settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
        }
    }]
});

/**
 * Testimonial slider
 */
jQuery('.testimonial-section__slider').slick({
    dots: false,
    infinite: true,
    speed: 300,
    fade: false,
    autoplay: false,
    autoplaySpeed: 8000,
    slidesToShow: 1,
    slidesToScroll: 1,
    draggable: true,
    adaptiveHeight: true,
    prevArrow: '.testimonial_left_nav',
    nextArrow: '.testimonial_right_nav',
    responsive: [{
        breakpoint: 1024,
        settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
        }
    }, {
        breakpoint: 768,
        settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
        }
    }, {
        breakpoint: 576,
        settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
        }
    }]
});

/**
 * Ask-Me button click for header menu
 */
jQuery('.ask_me_btn').on('click', function () {
    jQuery('#askME').modal('show');
});


