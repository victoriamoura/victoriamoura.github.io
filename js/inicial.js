document.write(
    unescape("%3Cscript src='js/owl.carousel2/owl.carousel.min.js' type='text/javascript'%3E%3C/script%3E")
);

$(document).ready(function() {
    $(".pisca").css("opacity", "0.85"); //define opacidade inicial
    setInterval(function() {
        if ($(".pisca").css("opacity") == 0.85) {
            $(".pisca").css("opacity", "1");
        } else {
            $(".pisca").css("opacity", "0.85");
        }
    }, 1000);
});

$(document).ready(function() {
    $(".owl-carousel").owlCarousel({
        loop: true,
        margin: 10,
        autoplay: true,
        autoplayTimeout: 3000,
        dots: false,
        responsiveClass: true,
        nav: true,
        responsive: {
            0: {
                items: 1,
            },
            600: {
                items: 3,
            },
            1000: {
                items: 5,
            }
        }
    });
});