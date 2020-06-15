$(document).ready(function(){
    $(window).scroll(function(){
        if ($(this).scrollTop() > 100) {
            $('.scrollToTop').fadeIn();
        } else {
            $('.scrollToTop').fadeOut();
        }
    });

    $('.scrollToTop').click(function(){
        $('html, body').animate({scrollTop : 0},800);
        return false;
    });


    $('.bookImg1').fadeIn(300,function () {
       $('.bookImg1').animate({marginTop:"0"},500)
    });

    $(".hamburgerMenu").click(function () {
       $(this).toggleClass("change");
        $(".hamburgerMenuTitles").slideToggle(1000);
    });

    $(".hamburgerMenuTitles div").click(function () {
       $(".hamburgerMenu").removeClass("change");
        $(".hamburgerMenuTitles").css("display","none");
    });


    $(document).scroll(function() {
        var y = $(this).scrollTop();
        if (y > 400) {
            $('.seMaghoole div').fadeIn(500,function () {
                $(".seMaghoole div").animate({marginTop:"5"},1000);
            });

        }
    });
    $(document).scroll(function() {
        var y = $(this).scrollTop();
        if (y > 2200) {
            $('.articleOwner-information-container').fadeIn(500,function () {
                $(".articleOwner-information-container").animate({marginTop:"-245"},1000);
            });

        }
    });
    console.log(window.pageYOffset);
    window.onscroll = function() {
        if (window.pageYOffset >= 655){
            $('.inner-nav').css({position: 'fixed',top:0,left:-1,'width':100 + "%",'height':59 + 'px',
                'padding-top': 6 +'px','padding-right': 20+ 'px','padding-bottom': 10 +'px','box-shadow':'rgba(123, 122, 122, 0.19) 0px 0px 20px -3px'}).css('background-color','white');
        }
        else {
            $('.inner-nav').css({position: '',top:"",'width': "",'height':"",'padding':""});
            // $('.aboutBook').css('padding-top',50)
        }
    };
    //
    // slider for authors information
    var current = 1;
    var max = $( ".sliderContent" ).length +1;

    $(".sliderContent").hide();
    $(".sliderContent:nth-child(1)").fadeIn("slow");

// function to change to next quote
    function changeUp() {
        $(".sliderContent").hide();
        current += 1;
        if (current === max) {
            current = 1;
        }
        $(".sliderContent:nth-child(" + current + ")").fadeIn("slow");
    }

    function changeDown() {
        $(".sliderContent").hide();
        current -= 1;

        if (current === 0) {
            current = max - 1;
        }

        $(".sliderContent:nth-child(" + current + ")").fadeIn("slow");
    }


    $("#rightArrow").click(function() {

        changeUp();

    });

    $("#leftArrow").click(function() {

        changeDown();

    });
    var slides = $(".inner-wrapper");
    var slides2 = $(".inner-wrapper2");
    var slides3 = $(".inner-wrapper3");
    var slidesTestimonial = $(".inner-wrapper-testimonial");
    var slidesWidth = $('.slide').width();
    var slideWidth2 = $('.slide2').width();
    var slideWidthTestimonial = $(".slide-testimonial ").width();
    var slideWidth3 = $('.slide3').width();
    var nextSlide = $('.arrow-right');
    var nextSlideTestimonial = $('.arrow-right-testimonial');
    var slide = $('.slide');
    var slide2 = $('.slide2');
    var slide3 = $('.slide3');




    var prevSlide = $('.arrow-left');
    var prevSlideTestimonial = $('.arrow-left-testimonial');
    console.log(slidesWidth);
    console.log(slideWidth2);

        // //
        nextSlide.click(function () {

                slides.animate({'margin-left':'-=slidesWidth'},1000,function () {
                     slides.css('margin-left','0px');
                    $('.slide').first().before($('.slide').last());
                });
            slides2.animate({'margin-left':'-=slideWidth2'},1000,function () {
                slides2.css('margin-left','0px');
                $('.slide2').first().before($('.slide2').last());
            });
            slides3.animate({'margin-left':'-=slideWidth3'},1000,function () {
                slides3.css('margin-left','0px');
                $('.slide3').first().before($('.slide3').last());
            });



        });
    nextSlideTestimonial.click(function () {
        slidesTestimonial.animate({'margin-left':'-=slideWidthTestimonial'},1000,function () {
            slidesTestimonial.css('margin-left','0px');
            $('.slide-testimonial').first().before($('.slide-testimonial').last());
        });
    });
    prevSlide.click(function () {

        slides.animate({'margin-right':'-=slidesWidth'},1000,function () {
            slides.css('margin-right','0px');
            $('.slide').first().before($('.slide').last());
        });
        slides2.animate({'margin-right':'-=slideWidth2'},1000,function () {
            slides2.css('margin-right','0px');
            $('.slide2').first().before($('.slide2').last());
        });

    });

    prevSlideTestimonial.click(function () {
        slidesTestimonial.animate({'margin-right':'-=slideWidthTestimonial'},1000,function () {
            slidesTestimonial.css('margin-right','0px');
            $('.slide-testimonial').first().before($(".slide-testimonial").last());
        });
    });
    var modalBtn1 = $('.modalOne div');
    var modalBtn2 = $('.modalTwo div');
    var modalBtn3 = $('.modalThree div');
    var modalBtn4 = $('.modalFour div');
    var modalBtn5 = $('.modalFive div');
    var modalBtn6 = $('.modalSix div');
    var modalBtn7 = $('.modalSeven div');
    var modalBtn8 = $('.modalEight div');
    var modalBtn9 = $('.modalNine div');
    var modalBox1 = $(".modalBoxOne");
    var modalBox2 = $(".modalBoxTwo");
    var modalBox3 = $(".modalBoxThree");
    var modalBox4 = $(".modalBoxFour");
    var modalBox5 = $(".modalBoxFive");
    var modalBox6 = $(".modalBoxSix");
    var modalBox7 = $(".modalBoxSeven");
    var modalBox8 = $(".modalBoxEight");
    var modalBox9 = $(".modalBoxNine");
    var close = $('.close');
    modalBtn1.click(function () {
       modalBox1.css('display','block')

    });
    modalBtn2.click(function () {
        modalBox2.css('display','block')

    });
    modalBtn3.click(function () {
        modalBox3.css('display','block')

    });
    modalBtn4.click(function () {
        modalBox4.css('display','block')

    });
    modalBtn5.click(function () {
        modalBox5.css('display','block')

    });
    modalBtn6.click(function () {
        modalBox6.css('display','block')

    });
    modalBtn7.click(function () {
        modalBox7.css('display','block')

    });
    modalBtn8.click(function () {
        modalBox8.css('display','block')

    });
    modalBtn9.click(function () {
        modalBox9.css('display','block')

    });
    close.click(function () {
        modalBox1.css("display","none")
    });
    close.click(function () {
        modalBox2.css("display","none")
    });
    close.click(function () {
        modalBox3.css("display","none")
    });
    close.click(function () {
        modalBox4.css("display","none")
    });
    close.click(function () {
        modalBox5.css("display","none")
    });
    close.click(function () {
        modalBox6.css("display","none")
    });
    close.click(function () {
        modalBox7.css("display","none")
    });
    close.click(function () {
        modalBox8.css("display","none")
    });
    close.click(function () {
        modalBox9.css("display","none")
    });
    // $(".btnFirstForm").click(function () {
    //     var name = $(".form-name").val();
    //     var email = $(".form-email").val();
    //     var text = $(".form-textarea").val();
    //
    //
    //
    // });



});


