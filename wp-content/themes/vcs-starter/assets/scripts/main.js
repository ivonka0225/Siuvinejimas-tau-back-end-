$(document).ready(function () {

    //submenu

    $(".sub").hover(function () {
        $(".sub-menu").slideDown("fast");
        clearTimeout(debounce);
    });

    $(".sub").mouseleave(function () {
        debounce = setTimeout(closeMenu, 400);
    });

    var debounce;
    var closeMenu = function () {
        $(".sub-menu").slideUp("fast");
        clearTimeout(debounce);
    }

    //hamburger menu

    $(".cross").hide();
    $(".bmenu").hide();
    $(".hamburger").click(function () {
        $(".bmenu").slideToggle("slow", function () {
            $(".hamburger").hide();
            $(".cross").show();
        });
    });

    $(".cross").click(function () {
        $(".bmenu").slideToggle("slow", function () {
            $(".cross").hide();
            $(".hamburger").show();
        });
    });

    //slider    

    function htmSlider() {
        var slideWrap = $('.slide-wrap');
        var nextLink = $('.next-slide');
        var prevLink = $('.prev-slide');
        var playLink = $('.auto');
        var is_animate = false;
        var slideWidth = $('.slide-item').outerWidth();
        var scrollSlider = slideWrap.position().left - slideWidth;

        nextLink.click(function () {
            if (!slideWrap.is(':animated')) {
                slideWrap.animate({
                    left: scrollSlider
                }, 500, function () {
                    slideWrap
                        .find('.slide-item:first')
                        .appendTo(slideWrap)
                        .parent()
                        .css({
                            'left': 0
                        });
                });
            }
        });

        prevLink.click(function () {
            if (!slideWrap.is(':animated')) {
                slideWrap
                    .css({
                        'left': scrollSlider
                    })
                    .find('.slide-item:last')
                    .prependTo(slideWrap)
                    .parent()
                    .animate({
                        left: 0
                    }, 500);
            }
        });
    }

    htmSlider();

    // slider resize 

    $(window).resize(function () {
        if ($(window).width() <= 964) {
            $(".slider").css("width", "300px");
        }
    });
    $(window).resize(function () {
        if ($(window).width() >= 965) {
            $(".slider").css("width", "700px");
        }
        
    });




});

