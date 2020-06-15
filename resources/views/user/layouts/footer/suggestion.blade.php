<div class="post-comment-box">
    <form class="form2" action="{{ url('suggestion') }}" method="post">
        {{ csrf_field() }}
        <input class="input2 form-name" minlength="5" maxlength="50" type="text" name="full_name"
               placeholder="نام و نام خانوادگی"
               value="{{ old('full_name') }}" required
               oninvalid="setCustomValidity('نام و نام خانوادگی خود را به درستی وارد کنید')"
               oninput="setCustomValidity('')">
        <input class="input2 form-email" minlength="5" maxlength="60" type="email" name="email" placeholder="ایمیل"
               value="{{ old('email') }}" required oninvalid="setCustomValidity('ایمیل خود را به درستی وارد کنید')"
               >
        <textarea class="form2-textarea" name="body" rows="8" cols="80" placeholder="پیام شخصی شما به ما"
                  required oninvalid="setCustomValidity('متن پیام خود را وارد کنید')"
                  oninput="setCustomValidity('')">{{ old('body') }}</textarea>
        <button class="button2" type="submit" name="Submit">ارسال</button>
    </form>
    {{--    {{ $errors }}--}}

</div>
