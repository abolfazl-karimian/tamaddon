@extends('user.layouts.template')

@section('Title')
    کتاب عیار تمدنی | صفحه کتاب
@stop


@section('CSS')
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/detail&purchases.css">
    <link rel="stylesheet" href="/css/detail&purchases1.css">
@stop

@section('content')
    <a href="#" >
        <div class="scrollToTop">
            <img src="/icon/multimedia-option%20(3).svg" >
        </div>
    </a>
    <div class="details-purchase container">
        <h4>جزییات کتاب</h4>
        <div class="bookPic">
            <img class="detailsBookImg" src="images/book.jpeg">
        </div>
        <div class="bookDetails">
            <table class="table table-striped">
                <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>نام کتاب</td>
                    <td>{{ $book->name }}</td>

                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>مولف</td>
                    <td>{{ $book->author }}</td>

                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>ناشر</td>
                    <td>{{ $book->publisher }}</td>

                </tr>
                <tr>
                    <th scope="row">4</th>
                    <td>سال چاپ</td>
                    <td>{{ $book->year }}</td>

                </tr>
                <tr>
                    <th scope="row">5</th>
                    <td>نوبت چاپ</td>
                    <td>{{ $book->edition }}</td>
                </tr>
                <tr>
                    <th scope="row">6</th>
                    <td>تعداد صفحات</td>
                    <td>{{ $book->pages }}</td>
                </tr>
                <tr>
                    <th scope="row">7</th>
                    <td>شابك</td>
                    <td>{{ $book->isbn }}</td>
                </tr>
                <tr>
                    <th scope="row">8</th>
                    <td>قیمت</td>
                    <td> {{ $book->price }} </td>
                </tr>
                </tbody>
            </table>

            <a href="https://bookroom.ir/book/79636/%D8%B9%DB%8C%D8%A7%D8%B1-%D8%AA%D9%85%D8%AF%D9%86%DB%8C-%D8%AC%D9%85%D9%87%D9%88%D8%B1%DB%8C-%D8%A7%D8%B3%D9%84%D8%A7%D9%85%DB%8C-%D8%A7%DB%8C%D8%B1%D8%A7%D9%86">
                <button type="button" class="btn btn1"><img src="icon/shopping-bag.svg">ورود به صفحه خرید</button></a>

        </div>
    </div>

        @include('user.book.comments')
    <!--<button type="button"class="btn">افزودن نظر جدید</button>-->
    <!-- Button trigger modal -->


    <!-- Modal -->
    @include('user.book.comment-modal')



@stop


@section('JS')
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/detail&purchases.js"></script>
@stop

