<div class="contact-box" id="ContactUs">
    <div class="inner-contact-box">
        <div class="contact-title">
            <h4>ارتباط با ما</h4>
        </div>


        @include('Layers.Suggestion')


        <div class="information">
            <div class="publicist">
                <span class="publicist-title">تماس با ناشر</span>
                <span class="publicist-number">{{ $admin->PhoneNumber }}</span>
            </div>
            <div class="author-contact-box">
                <span class="author-contact-title">ارتباط با نویسنده</span>
                <span class="author-email">{{ $admin->Email }}</span>
            </div>
        </div>
    </div>

</div>

