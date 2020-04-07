@extends('user.layouts.template')

@section('Title')
    کتاب عیار تمدنی | تکمیل اطلاعات
@stop

@section('CSS')
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/user-information.css">
@stop

@section('content')

    <div class="container">
        <div class="form-box">
            <form class="form3" action="" method="post">
                <div class="firstLastName">
                    <label class="nameLabel">نام و نام خانوادگی</label>
                    <input type="text" name="full_name" class=" nameAndFamily" id="nameAndFamily" placeholder="نام و نام خانوادگی" >
                    <span class="error nameError" id="nameError"></span>
                </div>
                <div class="emailBox">
                    <label class="emailLabel">ایمیل</label>
                    <input type="email" name="email" class="email" id="email" placeholder="example@gmail.com" >
                    <span class="error emailError" id="emailError"></span>
                </div>
                <div class="phoneBox">
                    <label class="phoneLabel">شماره تلفن</label>
                    <input type="text" name="phone_number" class="phoneNumber" id="phoneNumber" placeholder="تلفن همراه(*********09)">
                    <span class="error phoneError" id="phoneError"></span>
                </div>
                <div class="codeposti">
                    <label class="codePosti">کدپستی </label>
                    <input type="text" name="postal_code" id="codePost" class="codePost">
                    <span class="error codePostError" id="codePostError"></span>
                </div>
                <div class="province">
                    <label for="province">استان </label>
                    <select id="province" class="provinces" name="province">
                        <option data-style="azgharbi" value="azgharbi" class="azgharbi">آذربایجان شرقی</option>
                        <option data-style="azsharghi" value="azsharghi" class="azsharghi">آذربایجان غربی</option>
                        <option data-style="ardbil" value="ardbil" class="ardbil">اردبیل</option>
                        <option data-style="esfahan" value="esfahan" class="esfahan">اصفهان</option>
                        <option data-style="alborz" value="alborz" class="alborz">البرز</option>
                        <option data-style="ilam" value="ilam" class="ilam">ایلام</option>
                        <option data-style="boushehr" value="boushehr" class="boushehr">بوشهر</option>
                        <option data-style="tehran" value="tehran" class="tehran">تهران</option>
                        <option data-style="chaharmahal" value="chaharmahal" class="chaharmahal">چهارمحال و بختیاری</option>
                        <option data-style="khjnoubi" value="khjnoubi" class="khjnoubi">خراسان جنوبی</option>
                        <option data-style="khrazavi" value="khrazavi" class="khrazavi">خراسان رضوی</option>
                        <option data-style="khshomali" value="khshomali" class="khshomali">خراسان شمالی</option>
                        <option data-style="khouzestan" value="khouzestan" class="khouzestan">خوزستان</option>
                        <option data-style="zanjan" value="zanjan" class="zanjan">زنجان</option>
                        <option data-style="semnan" value="semnan" class="semnan">سمنان</option>
                        <option data-style="sistan" value="sistan" class="sistan">سیستان و بلوچستان</option>
                        <option data-style="fars" value="fars" class="fars">فارس</option>
                        <option data-style="ghazvin" value="ghazvin" class="ghazvin">قزوین</option>
                        <option data-style="ghom" value="ghom" class="ghom">قم</option>
                        <option data-style="kordestan" value="kordestan" class="kordestan">کردستان</option>
                        <option data-style="kerman" value="kerman" class="kerman">کرمان</option>
                        <option data-style="kermanshah" value="kermanshah" class="kermanshah">کرمانشاه</option>
                        <option data-style="kohkolie" value="kohkolie" class="kohkolie">کهگیلویه و بویراحمد</option>
                        <option data-style="golstan" value="golstan" class="golstan">گلستان</option>
                        <option data-style="gilan" value="gilan" class="gilan">گیلان</option>
                        <option data-style="lorestan" value="lorestan" class="lorestan">لرستان</option>
                        <option data-style="mazandaran" value="mazandaran" class="mazandaran">مازندران</option>
                        <option data-style="markazi" value="markazi" class="markazi">مرکزی</option>
                        <option data-style="hormozgan" value="hormozgan" class="hormozgan">هرمزگان</option>
                        <option data-style="hamedan" value="hamedan" class="hamedan">همدان</option>
                        <option data-style="yazd" value="yazd" class="yazd">یزد</option>
                    </select>
                    <span class="error provinceError"></span>
                </div>
                <div class="shahr">
                    <label class="titleCity">شهر</label>
                    <div class="city">
                        <select class="azgharbi" name="azgharbi" id="azgharbi">
                            <option value="ارومیه">ارومیه</option>
                            <option value="خوی">خوی</option>
                            <option value="بوکان">	بوکان</option>
                            <option value="مهاباد">مهاباد</option>
                            <option value="میاندوآب">میاندوآب</option>
                            <option value="سلماس">سلماس</option>
                            <option value="پیرانشهر">پیرانشهر</option>
                            <option value="نقده">نقده</option>
                            <option value="تکاب">تکاب</option>
                            <option value="ماکو">ماکو</option>
                            <option value="سردشت">	سردشت</option>
                            <option value="شاهین‌دژ">شاهین‌دژ</option>
                            <option value="اشنویه">اشنویه</option>
                            <option value="چایپاره">چایپاره</option>
                            <option value="شوط">شوط</option>
                            <option value="چالدران">چالدران</option>
                            <option value="سردشت">سردشت</option>
                            <option value="پلدشت">پلدشت</option>
                        </select>
                        <select class="azsharghi" name="azsharghi" id="azsharghi">
                            <option value="تبریز"> تبریز</option>
                            <option value="آذرشهر"> آذرشهر</option>
                            <option value="اسکو"> اسکو</option>
                            <option value="اهر"> اهر</option>
                            <option value="بستان‌آباد"> بستان‌آباد</option>
                            <option value="بناب"> بناب</option>
                            <option value="جلفا">جلفا</option>
                            <option value="چاراویماق">چاراویماق</option>
                            <option value="سراب"> سراب</option>
                            <option value="شبستر">شبستر</option>
                            <option value="عجب‌شیر">عجب‌شیر</option>
                            <option value="کلیبر"> کلیبر</option>
                            <option value="مراغه"> مراغه</option>
                            <option value="مرند">مرند</option>
                            <option value="ملکان"> ملکان</option>
                            <option value="میانه"> میانه</option>
                            <option value="ورزقان"> ورزقان</option>
                            <option value="هریس"> هریس</option>
                            <option value="هشترود">هشترود</option>
                            <option value="هوراند"> هوراند</option>
                            <option value="خداآفرین">خداآفرین</option>
                        </select>
                        <select class="ardbil" name="ardbil" id="ardbil">
                            <option value="اردبیل">اردبیل</option>
                            <option value="پارس‌آباد">پارس‌آباد</option>
                            <option value="مشگین‌شهر">مشگین‌شهر</option>
                            <option value="خلخال">خلخال</option>
                            <option value="گرمی">گرمی</option>
                            <option value="بیله‌سوار">بیله‌سوار</option>
                            <option value="نمین">	نمین</option>
                            <option value="کوثر">کوثر</option>
                            <option value="نمین">نمین</option>
                            <option value="پارس‌آباد">	پارس‌آباد</option>
                            <option value="سرعین">سرعین</option>
                            <option value="نیر">نیر</option>
                        </select>
                        <select class="esfahan" name="esfahan" id="esfahan">
                            <option value="اصفهان">اصفهان</option>
                            <option value="کاشان">کاشان</option>
                            <option value="شهر">خمینی شهر</option>
                            <option value="آباد">نجف آباد</option>
                            <option value="میمه">شاهین شهر و میمه</option>
                            <option value="شهرضا">شهرضا</option>
                            <option value="تیران">تیران</option>
                            <option value="فولادشهر">فولادشهر</option>
                            <option value="گلپایگان">گلپایگان</option>
                            <option value="زرین">زرین شهر</option>
                            <option value="فریدون">فریدون شهر</option>
                            <option value="دولت">دولت آباد</option>
                            <option value="خوانسار">خوانسار</option>
                            <option value="گز">گز</option>
                            <option value="نطنز">نطنز</option>
                        </select>
                        <select class="alborz" name="alborz" id="alborz">
                            <option value="کرج">کرج</option>
                            <option value="فردیس">فردیس</option>
                            <option value="طالقان">طالقان</option>
                            <option value="نظرآباد">نظرآباد</option>
                            <option value="هشتگرد">هشتگرد</option>
                            <option value="گرمدره">گرمدره</option>
                            <option value="گلسار">گلسار</option>
                            <option value="کوهسار">کوهسار</option>
                        </select>
                        <select class="ilam" name="ilam" id="ilam">
                            <option value="ایلام">ایلام</option>
                            <option value="شهر">دره شهر</option>
                            <option value="ایوان">ایوان</option>
                            <option value="دهلران">دهلران</option>
                            <option value="آبدانان">آبدانان</option>
                            <option value="مهران">مهران</option>
                        </select>
                        <select class="boushehr" name="boushehr" id="boushehr">
                            <option value="بوشهر">بوشهر</option>
                            <option value="دشتستان">دشتستان</option>
                            <option value="گناوه">	گناوه</option>
                            <option value="کنگان">کنگان</option>
                            <option value="دشتی">دشتی</option>
                            <option value="جم">	جم</option>
                            <option value="دیر">دیر</option>
                            <option value="دیلم">دیلم</option>
                            <option value="عسلویه">عسلویه</option>
                            <option value="تنگستان">تنگستان</option>
                        </select>
                        <select class="tehran" name="tehran" id="tehran">
                            <option value="تهران">تهران</option>
                            <option value="اسلام‌شهر">اسلام‌شهر</option>
                            <option value="شهریار">شهریار</option>
                            <option value="قدس">قدس</option>
                            <option value="ملارد">ملارد</option>
                            <option value="بهارستان">بهارستان</option>
                            <option value="پاکدشت">پاکدشت</option>
                            <option value="قرچک">قرچک</option>
                            <option value="ورامین">ورامین</option>
                            <option value="رباط">رباط کریم</option>
                            <option value="ری">ری</option>
                            <option value="پیشوا">پیشوا</option>
                            <option value="دماوند">دماوند</option>
                            <option value="فیروزکوه">فیروزکوه</option>
                            <option value="شمیرانات">شمیرانات</option>
                        </select>
                        <select class="chaharmahal" name="chaharmahal" id="chaharmahal">
                            <option value="شهرکرد">شهرکرد</option>
                            <option value="بروجن">بروجن</option>
                            <option value="لردگان">لردگان</option>
                            <option value="فارسان">فارسان</option>
                            <option value="سامان">سامان</option>
                            <option value="بروجن">بروجن</option>
                            <option value="بن">بن</option>
                            <option value="اردل">اردل</option>
                            <option value="کیار">کیار</option>
                            <option value="کوهرنگ">کوهرنگ</option>
                        </select>
                        <select class="khjnoubi" name="khjnoubi" id="khjnoubi">
                            <option value="بیرجند">بیرجند</option>
                            <option value="قائنات">قائنات</option>
                            <option value="طبس">طبس</option>
                            <option value="فردوس">فردوس</option>
                            <option value="نهبندان">نهبندان</option>
                            <option value="بشرویه">بشرویه</option>
                            <option value="سرایان">سرایان</option>
                            <option value="زیرکوه">زیرکوه</option>
                            <option value="خوسف">خوسف</option>
                        </select>
                        <select class="khrazavi" name="khrazavi" id="khrazavi">
                            <option value="مشهد">مشهد</option>
                            <option value="نیشابور">نیشابور</option>
                            <option value="سبزوار">سبزوار</option>
                            <option value="تربت حیدریه">تربت حیدریه</option>
                            <option value="کاشمر">کاشمر</option>
                            <option value="قوچان">قوچان</option>
                            <option value="تربت جام">تربت جام</option>
                            <option value="تایباد">تایباد</option>
                            <option value="چناران">چناران</option>
                            <option value="سرخس">سرخس</option>
                            <option value="گناباد">گناباد</option>
                            <option value="فریمان">فریمان</option>
                            <option value="درگز">درگز</option>
                            <option value="خواف">خواف</option>
                            <option value="جوین">جوین</option>
                            <option value="بردسکن">بردسکن</option>
                            <option value="بینالود">بینالود</option>
                            <option value="مه‌ولات">مه‌ولات</option>
                            <option value="خلیل‌آباد">خلیل‌آباد</option>
                            <option value="تایباد">تایباد</option>
                            <option value="زاوه">زاوه</option>
                            <option value="کلات">کلات</option>
                            <option value="فیروزه">فیروزه</option>
                            <option value="خوشاب">خوشاب</option>
                            <option value="بجستان">بجستان</option>
                            <option value="داورزن">داورزن</option>
                        </select>
                        <select class="khshomali" name="khshomali" id="khshomali">
                            <option value="بجنورد">بجنورد</option>
                            <option value="شیروان">شیروان</option>
                            <option value="اسفراین">اسفراین</option>
                            <option value="مانه و سملقان">مانه و سملقان</option>
                            <option value="جاجرم">جاجرم</option>
                            <option value="فاروج">فاروج</option>
                            <option value="گرمه">گرمه</option>
                            <option value="راز">راز</option>
                        </select>
                        <select class="khouzestan" name="khouzestan" id="khouzestan">
                            <option value="اهواز">اهواز</option>
                            <option value="آبادان">	آبادان</option>
                            <option value="دزفول">دزفول</option>
                            <option value="خرمشهر">خرمشهر</option>
                            <option value="ماهشهر">ماهشهر</option>
                            <option value="اندیمشک">اندیمشک</option>
                            <option value="ایذه">ایذه</option>
                            <option value="بهبهان">بهبهان</option>
                            <option value="شوشتر">شوشتر</option>
                            <option value="مسجدسلیمان">	مسجدسلیمان</option>
                            <option value="رامهرمز">رامهرمز</option>
                            <option value="امیدیه">امیدیه</option>
                            <option value="شوش">شوش</option>
                            <option value="شادگان">شادگان</option>
                            <option value="دشت آزادگان">دشت آزادگان</option>
                            <option value="هندیجان">هندیجان	</option>
                            <option value="باوی">باوی</option>
                            <option value="باغ‌ملک">باغ‌ملک</option>
                            <option value="رامشیر">رامشیر</option>
                            <option value="گتوند">گتوند</option>
                            <option value="لالی">لالی</option>
                            <option value="هویزه">هویزه</option>
                            <option value="گتوند">گتوند</option>
                        </select>
                        <select class="zanjan" name="zanjan" id="zanjan">
                            <option value="زنجان">	زنجان</option>
                            <option value="ابهر">ابهر</option>
                            <option value="خرمدره">خرمدره</option>
                            <option value="خدابنده">خدابنده</option>
                            <option value="طارم">طارم</option>
                            <option value="سلطانیه">سلطانیه</option>
                            <option value="ماهنشان">ماهنشان</option>
                            <option value="ایجرود">ایجرود</option>
                        </select>
                        <select class="semnan" name="semnan" id="semnan">
                            <option value="سمنان">سمنان</option>
                            <option value="شاهرود">	شاهرود</option>
                            <option value="دامغان">دامغان</option>
                            <option value="گرمسار">گرمسار</option>
                            <option value="مهدی‌شهر">	مهدی‌شهر</option>
                            <option value="سرخه">سرخه</option>
                            <option value="آرادان">آرادان</option>
                            <option value="میامی">میامی</option>
                        </select>
                        <select class="sistan" name="sistan" id="sistan">
                            <option value="زاهدان">زاهدان</option>
                            <option value="زابل">زابل</option>
                            <option value="ایرانشهر">ایرانشهر</option>
                            <option value="چابهار">چابهار</option>
                            <option value="سراوان">سراوان</option>
                            <option value="خاش">خاش</option>
                            <option value="نیک‌شهر">نیک‌شهر</option>
                            <option value="کنارک">کنارک</option>
                            <option value="میرجاوه">میرجاوه</option>
                            <option value="قصرقند">قصرقند</option>
                            <option value="فنوج">فنوج</option>
                            <option value="مهرستان">مهرستان</option>
                            <option value="زهک">زهک</option>
                            <option value="دلگان">دلگان</option>
                            <option value="سرباز">سرباز</option>
                            <option value="هیرمند">هیرمند</option>
                            <option value="سیب و سوران">سیب و سوران</option>
                            <option value="نیمروز">نیمروز</option>
                        </select>
                        <select class="fars" name="fars" id="fars">
                            <option value="شیراز">شیراز</option>
                            <option value="مرودشت">مرودشت</option>
                            <option value="کازرون">کازرون</option>
                            <option value="جهرم">جهرم</option>
                            <option value="لار">لار</option>
                            <option value="فسا">فسا</option>
                            <option value="داراب">داراب</option>
                            <option value="فیروزآباد">فیروزآباد</option>
                            <option value="نورآباد">نورآباد</option>
                            <option value="نی‌ریز">نی‌ریز</option>
                            <option value="آباده">آباده</option>
                            <option value="اقلید">اقلید</option>
                            <option value="لامرد">لامرد</option>
                        </select>
                        <select class="ghazvin" name="ghazvin" id="ghazvin">
                            <option value="قزوین">قزوین</option>
                            <option value="تاکستان">تاکستان</option>
                            <option value="الوند">الوند</option>
                            <option value="آبیک">آبیک</option>
                            <option value="بویین‌زهرا">بویین‌زهرا</option>
                            <option value="آبگرم">آبگرم</option>
                            <option value="آوج">آوج</option>پ
                        </select>
                        <select class="ghom" name="ghom" id="ghom">
                            <option value="قم">	قم</option>
                            <option value="قنوات">قنوات</option>
                            <option value="جعفریه">جعفریه</option>
                            <option value="کهک">کهک</option>
                            <option value="دستجرد">دستجرد</option>
                            <option value="سلفچگان">سلفچگان</option>
                        </select>
                        <select class="kordestan" name="kordestan" id="kordestan">
                            <option value="سنندج">	سنندج</option>
                            <option value="بانه">بانه</option>
                            <option value="سقز">سقز</option>
                            <option value="قروه">	قروه</option>
                            <option value="مریوان">مریوان</option>
                            <option value="بانه">بانه</option>
                            <option value="کامیاران">کامیاران</option>
                            <option value="بیجار">بیجار</option>
                            <option value="دیواندره">دیواندره</option>
                            <option value="دهگلان">دهگلان</option>
                        </select>
                        <select class="kerman" name="kerman" id="kerman">
                            <option value="کرمان">کرمان</option>
                            <option value="سیرجان">سیرجان</option>
                            <option value="رفسنجان">رفسنجان</option>
                            <option value="جیرفت">جیرفت</option>
                            <option value="بم">بم</option>
                            <option value="زرند">زرند	</option>
                            <option value="کهنوج">کهنوج</option>
                            <option value="شهربابک">شهربابک</option>
                            <option value="بافت">بافت</option>
                            <option value="بردسیر">بردسیر</option>
                            <option value="راور">راور</option>
                            <option value="عنبرآباد">عنبرآباد</option>
                            <option value="منوجان">منوجان</option>
                            <option value="قلعه">قلعه گنج</option>
                            <option value="رودبار">رودبار</option>
                            <option value="ارزوئیه">ارزوئیه</option>
                        </select>
                        <select class="kermanshah" name="kermanshah" id="kermanshah">
                            <option value="کرمانشاه">کرمانشاه</option>
                            <option value="اسلام‌آباد">اسلام‌آباد</option>
                            <option value="کنگاور">کنگاور</option>
                            <option value="جوانرود">جوانرود</option>
                            <option value="هرسین">هرسین</option>
                            <option value="سنقر">سنقر</option>
                            <option value="صحنه">صحنه</option>
                            <option value="سرپل ذهاب">سرپل ذهاب</option>
                            <option value="پاوه">پاوه	</option>
                            <option value="روانسر">روانسر</option>
                            <option value="گیلانغرب">	گیلانغرب</option>
                            <option value="گیلانغرب">	گیلانغرب</option>
                            <option value="ثلاث">ثلاث باباجانی</option>
                            <option value="دالاهو">	دالاهو</option>
                        </select>
                        <select class="kohkolie" name="kohkolie" id="kohkolie">
                            <option value="یاسوج">یاسوج</option>
                            <option value="دوگنبدان">دوگنبدان</option>
                            <option value="دهدشت">دهدشت</option>
                            <option value="لیکک">لیکک</option>
                            <option value="کهگیلویه">کهگیلویه</option>
                            <option value="بویراحمد">بویراحمد</option>
                            <option value="دنا">دنا</option>
                        </select>
                        <select class="golstan" name="golstan" id="golstan">
                            <option value="گرگان">گرگان</option>
                            <option value="گنبد ">گنبد کاووس</option>
                            <option value="	بندر ترکمن">	بندر ترکمن</option>
                            <option value="	علی‌آباد کتول">	علی‌آباد کتول</option>
                            <option value="آزادشهر">	آزادشهر</option>
                            <option value="کردکوی">کردکوی</option>
                            <option value="کلاله">	کلاله</option>
                            <option value="آق‌قلا">	آق‌قلا</option>
                            <option value="مینودشت">مینودشت</option>
                            <option value="گالیکش">گالیکش</option>
                            <option value="بندر">	بندر گز</option>
                            <option value="فاضل‌آباد">	فاضل‌آباد</option>
                            <option value="گمیشان">گمیشان</option>
                            <option value="مراوه">مراوه	</option>
                        </select>
                        <select class="gilan" name="gilan" id="gilan">
                            <option value="رشت">رشت</option>
                            <option value="	بندر انزلی">	بندر انزلی</option>
                            <option value="لاهیجان">لاهیجان</option>
                            <option value="لاهیجان">لاهیجان</option>
                            <option value="تالش">	تالش</option>
                            <option value="آستارا">آستارا</option>
                            <option value="صومعه‌سرا">صومعه‌سرا</option>
                            <option value="آستانه اشرفیه">آستانه اشرفیه</option>
                            <option value="رودسر">	رودسر</option>
                            <option value="فومن">فومن</option>
                            <option value="سیاهکل">سیاهکل</option>
                            <option value="رضوانشهر">رضوانشهر</option>
                            <option value="ماسال">ماسال</option>
                            <option value="رودبار">رودبار</option>
                            <option value="کلاچای">	کلاچای</option>
                            <option value="شفت">	شفت</option>
                            <option value="لنگرود">	لنگرود</option>
                            <option value="ماسال">ماسال</option>
                        </select>
                        <select class="lorestan" name="lorestan" id="lorestan">
                            <option value="خرم‌آباد">خرم‌آباد</option>
                            <option value="بروجرد">بروجرد</option>
                            <option value="دورود">دورود</option>
                            <option value="کوهدشت">کوهدشت</option>
                            <option value="الیگودرز">الیگودرز</option>
                            <option value="نورآباد">نورآباد</option>
                            <option value="الشتر">الشتر</option>
                            <option value="پل‌دختر">پل‌دختر</option>
                            <option value="ازنا">ازنا</option>
                        </select>
                        <select class="mazandaran" name="mazandaran" id="mazandaran">
                            <option value="ساری">ساری</option>
                            <option value="بابل">بابل</option>
                            <option value="آمل">آمل</option>
                            <option value="قائم ">قائم شهر</option>
                            <option value="بهشهر">بهشهر</option>
                            <option value="چالوس">چالوس</option>
                            <option value="نکا">نکا</option>
                            <option value="بابلسر">بابلسر</option>
                            <option value="تنکابن">تنکابن</option>
                            <option value="نوشهر">نوشهر</option>
                            <option value="فریدونکنار">فریدونکنار</option>
                            <option value="رامسر">رامسر</option>
                            <option value="جویبار">جویبار</option>
                            <option value="محمودآباد">محمودآباد</option>
                            <option value="نور">نور</option>
                            <option value="گلوگاه">گلوگاه</option>
                            <option value="سوادکوه">سوادکوه</option>
                            <option value="عباس ">عباس آباد</option>
                            <option value="کلا">کلاردشت</option>
                            <option value="ع">عباس آباد</option>
                        </select>
                        <select class="markazi" name="markazi" id="markazi">
                            <option value="اراک">اراک</option>
                            <option value="ساوه">ساوه</option>
                            <option value="خمین">خمین</option>
                            <option value="محلات">محلات</option>
                            <option value="دلیجان">دلیجان</option>
                            <option value="شازند">شازند</option>
                            <option value="زرندیه">زرندیه</option>
                            <option value="تفرش">تفرش</option>
                            <option value="کمیجان">کمیجان</option>
                            <option value="آشتیان">آشتیان</option>
                            <option value="خنداب">خنداب</option>
                        </select>
                        <select class="hormozgan" name="hormozgan" id="hormozgan">
                            <option value="بندرعباس">بندرعباس</option>
                            <option value="میناب">میناب</option>
                            <option value="رودان">رودان</option>
                            <option value="بندر لنگه">بندر لنگه</option>
                            <option value="قشم">قشم</option>
                            <option value="حاجی آباد">حاجی آباد</option>
                            <option value="بندر ">بندر لنگه</option>
                            <option value="خمیر">خمیر</option>
                            <option value="جاسک">جاسک</option>
                            <option value="پارسیان">پارسیان</option>
                            <option value="بستک">بستک</option>
                            <option value="ابوموسی">ابوموسی</option>
                            <option value="بشاگرد">بشاگرد</option>
                        </select>
                        <select class="hamedan" name="hamedan" id="hamedan">
                            <option value="همدان">همدان</option>
                            <option value="ملایر">ملایر</option>
                            <option value="نهاوند">نهاوند</option>
                            <option value="اسدآباد">اسدآباد</option>
                            <option value="تویسرکان">تویسرکان</option>
                            <option value="بهار">بهار</option>
                            <option value="کبودرآهنگ">کبودرآهنگ</option>
                            <option value="رزن">رزن</option>
                            <option value="تویسرکان">تویسرکان</option>
                        </select>
                        <select class="yazd" name="yazd" id="yazd">
                            <option value="یزد">یزد</option>
                            <option value="میبد">میبد</option>
                            <option value="اردکان">اردکان</option>
                            <option value="بافق">بافق</option>
                            <option value="مهریز">مهریز</option>
                            <option value="ابرکوه">ابرکوه</option>
                            <option value="تفت">تفت</option>
                            <option value="اشکذر">اشکذر</option>
                            <option value="هرات">هرات</option>
                            <option value="مروست">مروست</option>
                        </select>
                    </div>
                    <span class="error cityError"></span>
                </div>
                <div class="addressPost">
                    <label>آدرس پستی </label>
                    <textarea name="addressPost" id="address" class="address" rows="4" cols="20"></textarea>
                    <span class="error addressError" id="addressError"> </span>
                </div>
                <button type="submit" class="btn sendData" id="sendData">ارسال اطلاعات و تکمیل فرایند خرید</button>
            </form>
        </div>
    </div>


@stop


@section('JS')
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/user-information.js"></script>
@stop
