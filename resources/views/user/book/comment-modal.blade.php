<div class="modal fade" id="modalCenter" tabindex="-1" role="dialog" aria-labelledby="modalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>


            <div class="modal-body">
                <form class="form1" action="{{ url('comment') }}" method="post">
                    {{ csrf_field() }}
                    <div class="formUp">
                        <input type="text" placeholder="نام" minlength="3" maxlength="30" name="first_name"
                               value="{{ old('first_name') }}" class="name" required
                               oninvalid="setCustomValidity('نام خود را به درستی وارد کنید')" oninput="setCustomValidity('')" >
                        <input type="text" placeholder="نام خانوادگی" minlength="3" maxlength="30" maxlength="30"
                               class="name" name="last_name" value="{{ old('last_name') }}" required
                               oninvalid="setCustomValidity('نام خانوادگی خود را به درستی وارد کنید')"
                               oninput="setCustomValidity('')" >
                    </div>
                    <textarea class="form-textarea" name="body" rows="8" cols="80" maxlength="500" placeholder="پیام شما"
                              required oninvalid="setCustomValidity('متن خود را وارد وارد کنید')"
                              oninput="setCustomValidity('')">{{ old('body') }}</textarea>
                    <button type="submit" class="btn btn3" >ارسال دیدگاه</button>

                    <div class="modal-footer">

                    </div>
                </form>
            </div>


        </div>
    </div>
</div>
