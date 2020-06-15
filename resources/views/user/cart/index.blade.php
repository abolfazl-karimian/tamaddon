@extends('user.layouts.template')

@section('Title')
    کتاب عیار تمدنی | سبد خرید
@stop

@section('CSS')
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/shopingCart.css">@stop

@section('content')


    <!DOCTYPE html>
    <html>
    <head>
        <title>Ajax dynamic dependent state state city dropdown using jquery ajax in Laravel 5.6</title>
        <link rel="stylesheet" href="http://www.codermen.com/css/bootstrap.min.css">
    </head>
    <body>
    <div class="container">
        <div class="panel panel-default">
            <div class="panel-heading">Ajax dynamic dependent state state city dropdown using jquery ajax in Laravel 5.6</div>
            <div class="panel-body">
                <div class="form-group">
                    <select id="state" name="category_id" class="form-control" style="width:350px" >
                        <option value="" selected disabled>Select</option>
                        @foreach($provinces as $province)
                            <option value="{{ $province->id }}"> {{ $province->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="title">Select State:</label>
                    <select name="city" id="city" class="form-control" style="width:350px">
                    </select>
                </div>

            </div>
        </div>
    </div>

    </body>
    </html>


@stop


@section('JS')
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/shopingCart.js"></script>
{{--    <script src="js/jquery2.js"></script>--}}
    <script src="js/jquery-3.4.1.min.js"></script>

    <script type="text/javascript">
        $('#state').change(function(){
            var stateID = $(this).val();
            if(stateID){
                $.ajax({
                    type:"GET",
                    url:"{{url('get-cities')}}/"+stateID,
                    success:function(res){
                        if(res){
                            $("#city").empty();
                            $("#city").append('<option>Select</option>');
                            $.each(res,function(key,value){
                                $("#city").append('<option value="'+key+'">'+value+'</option>');
                            });

                        }else{
                            $("#state").empty();
                        }
                    }
                });
            }else{
                $("#state").empty();
                $("#city").empty();
            }
        });
    </script>


@stop
