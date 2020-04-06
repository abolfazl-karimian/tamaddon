// 'use strict';
// var modalBtn = document.getElementById("purchaseProcess");
// var modalBox1 = document.getElementById("modal-box");
// modalBtn.onclick(function () {
//     modalBox1.style.display ="block" ;
//     alert("gooooooohhhh")
//
// });
// document.getElementById("sendData").onclick(function () {
//     alert("goh")
// });
// var name = document.getElementById("nameAndFamily");
// var email = document.getElementById("email");
// var phoneNumber = document.getElementById("phoneNumber");
// var codePost = document.getElementById("codePost");
// var address = document.getElementById("address");
// var province = document.getElementById("province");
//
// var nameError = document.getElementById("nameError");
// var emailError = document.getElementById("emailError");
// var phoneError = document.getElementById("phoneError");
// var addressError = document.getElementById("addressError");
// var provinceError = document.getElementById("provinceError");
//
// name.addEventListener('input',nameValidation ,true);
// email.addEventListener('input',emailValidation ,true);
// phoneNumber.addEventListener('input',phoneNumberValidation ,true);
// codePost.addEventListener('input',codePostValidation ,true);
// address.addEventListener("keydown",addressValidation);
// province.addEventListener("change",provinceValidation,true);
//
// function handler() {
//     event.preventDefault();
//     nameValidation(name);
//     emailValidation(email);
//     provinceValidation(province);
//     addressValidation(address);
//
// }
// function nameValidation() {
//     if(!name.value){
//         name.style.border = "1px solid red";
//         nameError.textContent ="نام و نام خانوادگی خود را وارد کنید.";}
//     else if(!isNaN(name.value)){
//         name.style.border = "1px solid red";
//         nameError.textContent ="ففط حروف فارسی مجاز می باشد.";
//     }else if((userName.value.length < 3) || (userName.value.length >20)){
//         name.style.border = "1px solid red";
//         nameError.textContent ="تعداد حروف مجاز 3-20 می باشد.";
//     } else{
//         userName.style.border = "1px solid green";
//         nameError.innerHTML ="";
//     }
// }
// function emailValidation() {
//     if (!email.value){
//         email.style.border = "1px solid red";
//         emailError.textContent = "ایمیل خود را وارد کنید";
//     }
//     else if (email.value.indexOf('@')<=0){
//         email.style.border = "1px solid red";
//         emailError.textContent = "ایمیل وارد شده صحیح تمی باشد";
//     }
//     else if((email.value.charAt(email.value.length-4)!=='.') && (email.value.charAt(email.value.length-3)!=='.')){
//         email.style.border = "1px solid red";
//         emailError.textContent = "ایمیل وارد شده صحیح تمی باشد";
//     }
//     else{
//         email.style.border = "1px solid green";
//         emailError.innerHTML ="";
//     }
//     }

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

$(document).ready(function () {
    $('.delete').click(function(){
        // $(this).closest('tr').remove();
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


