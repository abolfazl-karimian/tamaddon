$(document).ready(function() {

    $(".hamburgerMenu").click(function () {
        $(this).toggleClass("change");
        $(".hamburgerMenuTitles").slideToggle(1000);
    });
    $(".hamburgerMenuTitles div").click(function () {
        $(".hamburgerMenu").removeClass("change");
        $(".hamburgerMenuTitles").css("display","none");
    });
});