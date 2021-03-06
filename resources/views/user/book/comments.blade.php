<div id="comments">
<div class="testimonialTitle container" ><p>نظرات کاربران</p></div>
<div class="testimonial container">
    @inject('Verta','App\Jalali')

{{--    @if (!$errors->isEmpty())--}}
{{--        {{ dd($errors) }}--}}
{{--    @endif--}}
    @unless ($comments->isEmpty())
        @foreach ($comments as $comment)
            <div class="testimonialBox">
                <div class="userInfo">
                    <img src="icon/user-image-with-black-background.svg">
                    <p>{{ $comment->first_name." ".$comment->last_name}}</p>
                    <span class="date">
                    در تاریخ
                    {{ $Verta->popularFormat($comment->created_at) }}
                </span>
                </div>

                <div class="testimonialTxt">
                    {{ $comment->body }}
                </div>
            </div>

        @endforeach

        @else

        <div class="pbck">
            <p>هیچ نظری ثبت نشده است.شما اولین نفری باشید که نظر می دهید.</p>
        </div>
    @endunless

</div>

<div class="link container">
    <button class="btn btn2" type="button" data-toggle="modal" data-target="#modalCenter">افزودن نظر جدید</button>

</div>
</div>
