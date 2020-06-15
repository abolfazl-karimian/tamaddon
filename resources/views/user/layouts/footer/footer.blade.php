<div class="contact-box" id="contacts">
    <div class="inner-contact-box">
        <div class="contact-title">
            <h4>ارتباط با ما</h4>
        </div>

        @include('user.layouts.footer.suggestion')

        <div class="information">
            <div class="publicist">
                <img class="phoneIcon" src="icon/call%20(1).svg" style="width: 22px;height: 22px">
                <span class="publicist-number">{{ $admin->phone_number }}</span>
            </div>
            <div class="author-contact-box">
                <img class="locationIcon" src="icon/pin.svg" style="width: 24px;height: 24px">
                <span class="author-email"style="line-height: 25px">{{ $admin->location }}</span>
            </div>
            <img class="logoE" src="/images/logo_footer3.png">
        </div>
    </div>

</div>
