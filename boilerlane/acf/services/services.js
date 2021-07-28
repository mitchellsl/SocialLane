$(window).on('load resize orientationchange', function() {
    $('.card--outer').each(function(){
        var $carousel = $(this);
        if ($(window).width() > 768) {
            if ($carousel.hasClass('slick-initialized')) {
                $carousel.slick('unslick');
            }
        }
        else{
            if (!$carousel.hasClass('slick-initialized')) {
                $carousel.slick({
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    mobileFirst: true,
                    dots: true
                });
            }
        }
    });
});