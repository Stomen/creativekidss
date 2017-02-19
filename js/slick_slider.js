/**
 * Created by admin on 18.02.2017.
 */
$(document).ready(function(){
    $('.main-slider .center').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        accessibility:false,
        arrows: false,
        speed: 2000,
        dots: true,
});
    $('.photo-gallery-slider').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        infinite: true,
        autoplay: true,
        autoplaySpeed: 2000,
        accessibility:false,
        arrows: false,
        speed: 2000,
        responsive: [
            {
                breakpoint: 769,
                settings: {
                    arrows: false,
                    slidesToShow: 2
                }
            },
            {
                breakpoint: 480,
                settings: {
                    arrows: false,
                    slidesToShow: 1
                }
            }
        ]
    });
});