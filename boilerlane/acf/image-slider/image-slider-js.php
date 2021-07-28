<?php
	// Sets the proper content type for javascript
	header("Content-Type: application/javascript");



?>

jQuery(".image-slider .image-slider-container").slick({
            infinite: <?php echo the_field( 'infinite' ); ?>,
            autoplay: <?php the_field( 'autoplay' ); ?>,
            autoplaySpeed: 3e3,
            slidesToShow: <?php the_field( 'slides_to_show' ); ?>,
            dots: <?php the_field( 'dots' ); ?>,
            arrows: <?php the_field( 'arrows' ); ?>,
            mobileFirst: <?php the_field( 'mobile_first' ); ?>,
            centerMode: <?php the_field( 'center_mode' ); ?>,
            centerPadding: '<?php the_field( 'center_padding' ); ?>',
            prevArrow: '<div class="slick-prev slick-arrow" style=""><i class="fas fa-chevron-left" aria-hidden="true"></i></div>',
            nextArrow: '<div class=" slick-next slick-arrow" style=""><i class="fas fa-chevron-right" aria-hidden="true"></i></div>',
            responsive: [
            { breakpoint: 1124, settings: { slidesToShow: 1, slidesToScroll: 1, centerPadding: '20px', } },
            { breakpoint: 1024, settings: { slidesToShow: 1, slidesToScroll: 1, centerPadding: '20px', } },
            { breakpoint: 768, settings: { slidesToShow: 1, slidesToScroll: 1, centerPadding: '20px', } },
            { breakpoint: 567, settings: { slidesToShow: 1, slidesToScroll: 1, centerPadding: '0px', arrows: false, } },
            { breakpoint: 320, settings: { slidesToShow: 1, slidesToScroll: 1, centerPadding: '0px', arrows: false, } },
            ],
        });