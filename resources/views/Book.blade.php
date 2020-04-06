@extends('Layers.Frame')

@section('Title')
    کتاب عیار تمدنی | صفحه کتاب
@stop


@section('CSS')
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/detail&purchases.css">
@stop

@section('content')

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
                    <td>{{ $book->Name }}</td>

                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>نويسنده</td>
                    <td>{{ $book->Author }}</td>

                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>انتشارات</td>
                    <td>{{ $book->Publisher }}</td>

                </tr>
                <tr>
                    <th scope="row">4</th>
                    <td>سال چاپ</td>
                    <td>{{ $book->Year }}</td>

                </tr>
                <tr>
                    <th scope="row">5</th>
                    <td>نوبت چاپ</td>
                    <td>{{ $book->Edition }}</td>
                </tr>
                <tr>
                    <th scope="row">6</th>
                    <td>تعداد صفحات</td>
                    <td>{{ $book->Pages }}</td>
                </tr>
                <tr>
                    <th scope="row">7</th>
                    <td>شابك</td>
                    <td>{{ $book->ISBN }}</td>
                </tr>
                <tr>
                    <th scope="row">8</th>
                    <td>قیمت</td>
                    <td> {{ $book->Price }} </td>
                </tr>
                </tbody>
            </table>

           @include('Layers.AddToBasket')

        </div>
    </div>

        @include('Layers.Comments')
    <!--<button type="button"class="btn">افزودن نظر جدید</button>-->
    <!-- Button trigger modal -->


    <!-- Modal -->
    @include('Layers.CommentModal')
{{--{{ dd('dd') }}--}}


@stop


@section('JS')
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/detail&purchases.js"></script>
@stop
