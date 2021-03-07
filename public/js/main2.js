"use strict";
document.addEventListener('DOMContentLoaded', init);

function init() {
    const scrolOn = document.querySelectorAll(".nav-menu a, .mobile-nav a, .scrollto");
    for (let i = 0 ; i < scrolOn.length; i++) {
        scrolOn[i].addEventListener("click", SmoothScroll);
    }
    window.onscroll = function() {scrollFunction()};

    !(function($) {

// Testimonials carousel (uses the Owl Carousel library)
        $(".testimonials-carousel").owlCarousel({
            autoplay: true,
            dots: true,
            loop: true,
            responsive: {
                0: {
                    items: 1
                },
                768: {
                    items: 2
                },
                900: {
                    items: 3
                }
            }
        });

        // Mobile Navigation
        if ($('.nav-menu').length) {
            var $mobile_nav = $('.nav-menu').clone().prop({
                class: 'mobile-nav d-lg-none'
            });
            $('body').append($mobile_nav);
            $('body').prepend('<button type="button" class="mobile-nav-toggle d-lg-none" aria-label="Right Align"><i class="icofont-navigation-menu"></i></button>');
            $('body').append('<div class="mobile-nav-overly"></div>');

            $(document).on('click', '.mobile-nav-toggle', function(e) {
                $('body').toggleClass('mobile-nav-active');
                $('.mobile-nav-toggle i').toggleClass('icofont-navigation-menu icofont-close');
                $('.mobile-nav-overly').toggle();
            });

            $(document).on('click', '.mobile-nav .drop-down > a', function(e) {
                e.preventDefault();
                $(this).next().slideToggle(300);
                $(this).parent().toggleClass('active');
            });

            $(document).on('click', '.mobile-nav .drop-down > p', function(e) {
                e.preventDefault();
                $(this).next().slideToggle(300);
                $(this).parent().toggleClass('active');
            });

            $(document).click(function(e) {
                var container = $(".mobile-nav, .mobile-nav-toggle");
                if (!container.is(e.target) && container.has(e.target).length === 0) {
                    if ($('body').hasClass('mobile-nav-active')) {
                        $('body').removeClass('mobile-nav-active');
                        $('.mobile-nav-toggle i').toggleClass('icofont-navigation-menu icofont-close');
                        $('.mobile-nav-overly').fadeOut();
                    }
                }
            });
        } else if ($(".mobile-nav, .mobile-nav-toggle").length) {
            $(".mobile-nav, .mobile-nav-toggle").hide();
        }
    })(jQuery);
}

function SmoothScroll(e) {
    if(location.pathname.replace(/^\//, '') === this.pathname.replace(/^\//, '') && location.hostname === this.hostname) {
        e.preventDefault();
        const yOffset = -190;
        const element = document.getElementById(this.hash.substring(1));
        const y = element.getBoundingClientRect().top + window.pageYOffset + yOffset;

        window.scrollTo({top: y});
    }
}

function scrollFunction() {
    const mybutton = document.querySelectorAll(".back-to-top")[0];
    if (document.body.scrollTop > 200 || document.documentElement.scrollTop > 200) {
        mybutton.style.display = "block";
    } else {
        mybutton.style.display = "none";
    }
}


