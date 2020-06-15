<div class="container">
    <div class="form-box">
        <form class="form3" action="{{ route('order.store') }}" method="post">
            {{ csrf_field() }}
            <div class="firstLastName">
                <label class="nameLabel">نام و نام خانوادگی</label>

                <input type="text" name="full_name" id="nameAndFamily" placeholder="نام و نام خانوادگی" required
                       class=" nameAndFamily @error('full_name') errorColor @enderror" value="{{ old('full_name') }}"
                       oninvalid="setCustomValidity('نام و نام خانوادگی خود را به درستی وارد کنید')"
                       oninput="setCustomValidity('')" >

                <span class="error nameError" id="nameError"></span>
                @error('full_name')
                <div class="text-danger small">{{ $message }}</div>
                @enderror
            </div>
            <div class="emailBox">
                <label class="emailLabel">ایمیل</label>

                <input type="email" name="email" id="email" placeholder="example@gmail.com" required
                       class="email @error('email') errorColor @enderror" value="{{ old('email') }}"
                       oninvalid="setCustomValidity('پست الکترونیکی خود را به درستی وارد کنید')"
                       oninput="setCustomValidity('پست الکترونیکی خود را به درستی وارد کنید')" >

                <span class="error emailError" id="emailError"></span>
                @error('email')
                <div class="text-danger small">{{ $message }}</div>
                @enderror
            </div>
            <div class="phoneBox">
                <label class="phoneLabel">شماره تلفن همراه</label>

                <input type="number" name="phone_number" id="phoneNumber" placeholder="تلفن همراه(*********09)" required
                       class="phoneNumber @error('phone_number') errorColor @enderror"
                       value="{{ old('phone_number') }}"
                       oninvalid="setCustomValidity('شماره تلفن همراه خود را به درستی وارد کنید')"
                       oninput="setCustomValidity('')" >

                <span class="error phoneError" id="phoneError"></span>
                @error('phone_number')
                <div class="text-danger small">{{ $message }}</div>
                @enderror
            </div>
            <div class="codeposti">
                <label class="codePosti">کد پستی</label>
                <input type="number" name="postal_code" id="codePost"  placeholder="کد پستی 10 رقمی"  required
                       class="codePost @error('postal_code') errorColor @enderror" value="{{ old('postal_code') }}"
                       oninvalid="setCustomValidity('کد پستی خود را به درستی وارد کنید')"
                       oninput="setCustomValidity('')" >
                <span class="error codePostError" id="codePostError"></span>
                @error('postal_code')
                <div class="text-danger small">{{ $message }}</div>
                @enderror
            </div>
            <div class="PC">
                <div class="province">
                    <label for="province">استان </label>
                    <select id="province" name="province" required
                            class="provinces @error('province') errorColor @enderror"
                            oninvalid="setCustomValidity('استان خود را انتخاب کنید')"
                            oninput="setCustomValidity('')" >{{ old('address') }}>

                        @if (old('province'))
                            <option id="slctdp" value="{{ old('province') }}" selected>
                                {{ $provinces[old('province')-1]->name }}</option>
                            @else
                            <option id="slctdp" value="0" selected disabled >- استان خود را انتخاب کنید -</option>
                        @endif

                        @foreach($provinces as $province)
                            <option id="{{ $province->id }}" value="{{ $province->id }}"> {{ $province->name }}</option>
                        @endforeach
                    </select>
                    <span class="error provinceError"></span>
                    @error('province')
                    <div class="text-danger small">{{ $message }}</div>
                    @enderror
                </div>
                <div class="shahr">
                    <label class="titleCity">شهر</label>
                    <class class="city ">
                        <select name="city" id="city" required class="@if($errors->any()) errorColor @endif "
                                oninvalid="setCustomValidity('ابتدا استان و سپس شهر خود را انتخاب کنید')"
                                oninput="setCustomValidity('')" >
{{--                            @if (old('city'))--}}
{{--                                <option id="slctdc" value="{{ old('city') }}" selected>--}}
{{--                                    {{ $provinces[old('province')-1]->name }}</option>--}}
{{--                            @else--}}
{{--                                <option id="slctdc" value="0" disabled>- استان خود را انتخاب کنید -</option>--}}
{{--                            @endif--}}
                        </select>
                    </class>
                    <span class="error cityError"></span>
                    @error('city')
                    <div class="text-danger small">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="addressPost">
                <label>آدرس پستی </label>
                <textarea name="address" id="address" rows="5" cols="20" placeholder="خیابان - کوچه و..." required
                          class="address @error('address') errorColor @enderror"
                          style="font-size: smaller"
                          oninvalid="setCustomValidity('آدرس خود را وارد کنید')"
                          oninput="setCustomValidity('')" >{{ old('address') }}</textarea>
                <span class="error addressError" id="addressError"> </span>
                @error('address')
                <div class="text-danger small">{{ $message }}</div>
                @enderror
            </div>
            {{--            @if ($errors->any())--}}
            {{--                <div class="alert alert-danger">--}}
            {{--                    <ul>--}}
            {{--                        @foreach ($errors->all() as $error)--}}
            {{--                            <li>{{ $error }}</li>--}}
            {{--                        @endforeach--}}
            {{--                    </ul>--}}
            {{--                </div>--}}
            {{--            @endif--}}
            <button type="submit" class="btn sendData" id="sendData">ارسال اطلاعات و تکمیل فرایند خرید</button>
        </form>

    </div>

</div>





