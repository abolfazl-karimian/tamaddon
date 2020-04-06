$(document).ready(function(){
    $(".hamburgerMenu").click(function () {
        $(this).toggleClass("change");
        $(".hamburgerMenuTitles").slideToggle(1000);
    });
    $(".hamburgerMenuTitles div").click(function () {
        $(".hamburgerMenu").removeClass("change");
        $(".hamburgerMenuTitles").css("display","none");
    });
    $('.bookPic img').fadeIn(300,function () {
        $('.bookPic img').animate({marginLeft:"0"},1000);});
    $(document).on('click', '.number-spinner button', function () {
        var btn = $(this),
            oldValue = btn.closest('.number-spinner').find('input').val().trim(),
            newVal = 0;

        if (btn.attr('data-dir') === 'up') {
            newVal = parseInt(oldValue) + 1;
        } else {
            if (oldValue > 1) {
                newVal = parseInt(oldValue) - 1;
            } else {
                newVal = 1;
            }
        }
        btn.closest('.number-spinner').find('input').val(newVal);
    });
    $(".show_hide").on("click", function () {
        var txt = $(".content").is(':visible') ? 'نظرات بیشتر' : 'نظرات کمتر';
        $(".show_hide").text(txt);
        $('.content').slideToggle(200);
        // $(".content").css("display","block");
        event.preventDefault();


    });
});