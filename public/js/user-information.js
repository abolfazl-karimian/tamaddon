$(document).ready(function() {

    $(".hamburgerMenu").click(function () {
        $(this).toggleClass("change");
        $(".hamburgerMenuTitles").slideToggle(1000);
    });
    $(".hamburgerMenuTitles div").click(function () {
        $(".hamburgerMenu").removeClass("change");
        $(".hamburgerMenuTitles").css("display","none");
    });
    var btn = $(".sendData");
    $(".nameError").hide();

    btn.click(function () {
        // alert("goh");
        event.preventDefault();
        var minLength = 5;
        var name = $(".nameAndFamily").val();
        var email = $(".email").val();
        var phoneNumber = $(".phoneNumber").val();
        var codePost = $(".codePost").val();
        var address = $(".address").val();
        $(".nameAndFamily").on("change",function () {
            if(name.length== ""){
                $(".nameError").show();
                $(".nameAndFamily").css("border","1px solid red");
                $(".nameError").html("نام خانوادگی خود را وارد کنید.");
                return false;

            }else {
                $(".nameError").hide();
                $(".nameAndFamily").css("border","1px solid green");

            }
            if(name.length < minLength){
                $('.nameError').show();
                $('.nameError').focus();
                $(".nameAndFamily").css("border","1px solid red");
                $(".nameError").html("تعداد حروف وارد شده باید بیشتر از 5 باشد.");
                return false

            }else{
                $(".nameError").hide();
                $(".nameAndFamily").css("border","1px solid green");
            }

        }).change();

        $(".email").on("change",function () {
            if(email.length== ""){
                $(".emailError").show();
                $(".email").css("border","1px solid red");
                $(".emailError").html("ایمیل خود را وارد کنید.");
                return false;

            }else {
                $(".emailError").hide();
                $(".email").css("border","1px solid green");

            }
            if(IsEmail(email)==false){
                $('.emailError').show();
                $(".email").css("border","1px solid red");
                $(".emailError").html("ایمیل وارد شده نادرست است.");
                return false;
            }else {
                $(".emailError").hide();
                $(".email").css("border","1px solid green");
            }

        }).change();
        $(".phoneNumber").on("change",function () {
            if(phoneNumber.length== ""){
                $(".phoneError").show();
                $(".phoneNumber").css("border","1px solid red");
                $(".phoneError").html("شماره تلفن خود را وارد کنید");
                return false;

            }else {
                $(".phoneError").hide();
                $(".phoneNumber").css("border","1px solid green");

            }
            phoneNumber = phoneNumber.replace(/[^0-9]/g,'');
            if (phoneNumber.length != 11)
            {
                $(".phoneNumber").css("border","1px solid red");
                $(".phoneError").html("شماره وارد شده نادرست است");
                $('.phoneNumber').val('');
                return false;
            }
            else {
                $(".emailError").hide();
                $(".email").css("border","1px solid green");
            }

        }).change();
        $(".codePost").on("change",function () {
            if(codePost.length== ""){
                $(".codePostError").show();
                $(".codePost").css("border","1px solid red");
                $(".codePostError").html("کدپستی خود را وارد کنید.");
                return false;

            }else {
                $(".codePostError").hide();
                $(".codePost").css("border","1px solid green");

            }
            if (codePost.length != 10)
            {
                $(".codePostError").show();
                $(".codePost").css("border","1px solid red");
                $(".codePostError").html("کدپستی وارد شده نادرست است");
                return false;
            }
            else {
                $(".codePostError").hide();
                $(".codePost").css("border","1px solid green");
            }

        }).change();
        $(".address").on("change",function () {
            if(address.length== ""){
                $(".addressError").show();
                $(".address").css("border","1px solid red");
                $(".addressError").html("آدرس خود را وارد کنید.");
                return false;

            }else {
                $(".addressError").hide();
                $(".address").css("border","1px solid green");

            }

        }).change();

        if($("select[name=province]").val() == 0) {

            $(".provinceError").show();
            $(".provinceError").html("استان خود را انتخاب کنید.");
            $(".provinces").css("border","1px solid red");
            return false;
        }else{
            $(".provinceError").hide();
            $(".provinces").css("border","1px solid green");
        }
        function IsEmail(email) {
            var regex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
            if (!regex.test(email)) {
                return false;
            } else {
                return true;
            }
        }
    });
});