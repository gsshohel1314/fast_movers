$(function () {
    /*--------------------------
	 Global Variable
	---------------------------- */
    var patsala = $(window);
    var page = $('html, body');

    /*--------------------------
    scroll to top active
    ---------------------------- */
    $(".scrolltop").on('click', function () {
        $("html,body").animate({
            scrollTop: 0
        }, 1000)
    });

    /*--------------------------
     Menu Scroll Fix Function
    ---------------------------- */
    patsala.on('scroll', function () {
        if (patsala.scrollTop() > 100) {
            $('.header_part').addClass('animated slideInDown fix')
        } else {
            $('.header_part').removeClass('animated slideInDown fix ')
        }
    })

    $('.banner_slide').owlCarousel({
        loop: true,
        margin: 0,
        nav: true,
        navText: ['<i class="fas fa-angle-left aroow_bn_lft"></i>', '<i class="fas fa-angle-right aroow_bn_rt"></i>'],
        smartSpeed: 1000,
        autoplay: true,
        mouseDrag: true,
        responsive: {
            0: {
                items: 1
            },
            576: {
                items: 1
            },
            768: {
                items: 1
            },
            1000: {
                items: 1
            }
        }
    });

    $('.latest_video_slide').owlCarousel({
        loop: true,
        margin: 30,
        nav: true,
        navText: ['<i class="fas fa-angle-left aroow_lft"></i>', '<i class="fas fa-angle-right aroow_rt"></i>'],
        smartSpeed: 1000,
        autoplay: true,
        mouseDrag: true,
        responsive: {
            0: {
                items: 1
            },
            576: {
                items: 2
            },
            768: {
                items: 2
            },
            992: {
                items: 3
            },
            1000: {
                items: 3
            }
        }
    });



    $('.client_slide').owlCarousel({
        loop: true,
        margin: 30,
        nav: false,
        smartSpeed: 1000,
        autoplay: true,
        mouseDrag: true,
        responsive: {
            0: {
                items: 1
            },
            576: {
                items: 2
            },
            768: {
                items: 3
            },
            1000: {
                items: 5
            }
        }
    });



    $('.counter_ad').counterUp({
        delay: 10,
        time: 8000
    });
    
   $('.venobox').venobox(); 

})