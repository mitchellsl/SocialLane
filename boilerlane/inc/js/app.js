var $=jQuery.noConflict();

// Add Class when the element is on screen
function isScrolledIntoView(elem) {
    var docViewTop = $(window).scrollTop();
    var docViewBottom = docViewTop + $(window).height();

    var elemTop = $(elem).offset().top;
    var elemBottom = elemTop + $(elem).height();

    return ((elemBottom <= docViewBottom) && (elemTop >= docViewTop));
}
$(window).scroll(function () {
    if ($(window).scrollTop() > 1) {
        $("header").addClass("scrolled", $(window).scrollTop() > 1);
    } else  {
        $("header").removeClass("scrolled", $(window).scrollTop() < 1);
    }

    $('section').each(function () {
        if (isScrolledIntoView(this) === true) {
            $(this).addClass('active');
        } else {

        }
    });

});

