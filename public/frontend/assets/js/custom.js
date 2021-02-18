/*========================================================
    Written:       By Pawon Gurung
    Work Station:  Tech Coderz
    Website:       NGO
================================================================*/
$(document).ready(function($) {

    /*==========================
        Functions Calling
    =============================*/
    bannerSlider();
    causesSlider();
    testimonialSlider();
    clientSlider();
    prodDetailSlider();
    lazyLoad();
    cartFunc();

    /*==========================
        Lazy Load
    =============================*/
    function lazyLoad(){
        $('.lazy-image').unveil(200, function() {
            $(this).on(function() {
                this.style.opacity = 1;
            });
        });
    }

    // ===================================== Sticky header
    $(window).scroll(function(){
      if ($(this).scrollTop() > 80) {
          $('.site-header').addClass('header-stick');
      } else {
          $('.site-header').removeClass('header-stick');
      }
    });

    function cartFunc(){

        $(".site-header .cart-icon .shop-bag").on('click', function() {
           $("body").addClass('cart-has-open');
        });


       $(".close-cart-now").on('click', function() {
           $("body").removeClass('cart-has-open');
        });

       $('.shop-item .option-box li .bag, .product-counter .button-one').click(function(){
            $('body').addClass('cart-has-open');
            setTimeout(function(){
                $('.site-header').removeClass('cart-has-open');
            },5000);
        });

       $('.overlay').click(function(){
            $('body').removeClass('cart-has-open');
       });
   }


   $('.number-plus').on('click', function(){
        var divUpd = $(this).parent().find('.number'), newVal = parseInt(divUpd.text(), 10)+1;
        divUpd.text(newVal);
    });

    $('.number-minus').on('click', function(){
        var divUpd = $(this).parent().find('.number'), newVal = parseInt(divUpd.text(), 10)-1;
        if(newVal>=1) divUpd.text(newVal);
    });

    /*==========================
        Product Slider
    =============================*/
    function prodDetailSlider(){
        var galleryThumbs = new Swiper('.gallery-thumbs', {
          spaceBetween: 10,
          slidesPerView: 4,
          freeMode: true,
          watchSlidesVisibility: true,
          watchSlidesProgress: true,
        });
        var galleryTop = new Swiper('.gallery-top', {
          spaceBetween: 10,
          navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
          },
          thumbs: {
            swiper: galleryThumbs
          }
        });
    }

    /*==========================
        Banner Slider
    =============================*/
    function bannerSlider() {
        var swiper = new Swiper('.slider-section .swiper-container', {
            speed: 900,
            parallax: true,
            loop: true,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });
    }

    /*==========================
        Cause Slider
    =============================*/

    function causesSlider() {
        var swiper = new Swiper('.our-causes-section .swiper-container', {
            speed: 1000,
            loop: true,
            autoplay: true,
            spaceBetween: 30,
            breakpoints: {
                // when window width is <= 499px
                499: {
                    slidesPerView: 1,
                    spaceBetweenSlides: 30
                },
                // when window width is <= 999px
                999: {
                    slidesPerView: 2,
                    spaceBetweenSlides: 40
                }
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });
    }

    /*==========================
        Testimonial Slider
    =============================*/
    function testimonialSlider() {
        var swiper = new Swiper('.testimonial-section .swiper-container', {
            speed: 600,
            loop: true,
            autoplay: true,
            spaceBetween: 30,
            breakpoints: {
                // when window width is <= 499px
                499: {
                    slidesPerView: 1,
                    spaceBetweenSlides: 30
                },
                // when window width is <= 999px
                999: {
                    slidesPerView: 2,
                    spaceBetweenSlides: 40
                }
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
        });
    }

    /*==========================
        Client Slider
    =============================*/

    function clientSlider() {
        var swiper = new Swiper('.client-section .swiper-container', {
            speed: 600,
            loop: true,
            autoplay: true,
            spaceBetween: 30,
            breakpoints: {
                0: {
                    slidesPerView: 3,
                    spaceBetweenSlides: 30
                },
                // when window width is <= 499px
                499: {
                    slidesPerView: 3,
                    spaceBetweenSlides: 30
                },
                // when window width is <= 999px
                999: {
                    slidesPerView: 4,
                    spaceBetweenSlides: 40
                },
                1200: {
                    slidesPerView: 6,
                    spaceBetweenSlides: 40
                }
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
        });
    }

    /*==========================
        Data Counter
    =============================*/
    $("[data-appear-animation]").each(function() {
        var self = $(this);
        var animation = self.data("appear-animation");
        var delay = (self.data("appear-animation-delay") ? self.data("appear-animation-delay") : 0);

        if ($(window).width() > 959) {
            self.html('0');
            self.waypoint(function(direction) {
                if (!self.hasClass('completed')) {
                    var from = self.data('from');
                    var to = self.data('to');
                    var interval = self.data('interval');
                    self.numinate({
                        format: '%counter%',
                        from: from,
                        to: to,
                        runningInterval: 2000,
                        stepUnit: interval,
                        onComplete: function(elem) {
                            self.addClass('completed');
                        }
                    });
                }
            }, { offset: '85%' });
        } else {
            if (animation == 'animateWidth') {
                self.css('width', self.data("width"));
            }
        }
    });


});


