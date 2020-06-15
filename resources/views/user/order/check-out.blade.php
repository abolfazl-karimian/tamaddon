@extends('user.layouts.template')

@section('Title')
    کتاب عیار تمدنی | تکمیل اطلاعات
@stop

@section('CSS')
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/user-information.css">
@stop

@section('content')

    @include('user.order.form')

@stop


@section('JS')
    <script src="/js/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
    <script src="/js/bootstrap.bundle.min.js"></script>
    <script src="/js/user-information.js"></script>
    <script type="text/javascript">
        $('#province').change(function(){
            var provinceID = $(this).val();
            if(provinceID){
                $.ajax({
                    type:"GET",
                    url:"{{url('get-cities')}}/"+provinceID,
                    success:function(res){
                        if(res){
                            $("#city").empty();
                            $("#city").append('<option>- شهر خود را انتخاب کنید -</option>');
                            $.each(res,function(key,value){
                                $("#city").append('<option value="'+key+'">'+value+'</option>');
                            });

                        }else{ 
                            $("#city").empty();
                        }
                    }
                });
            }else{
                $("#city").empty();
            }
        });
    </script>
    <script>
        $(document).ready(function(){
            var provinceID = $("#slctdp").attr("value");

            if(provinceID != 0){
                // alert("Image width: "+$("#slctd").attr("value"));
                // document.getElementById(slctdc).selected = "true";
                $.ajax({
                    type:"GET",
                    url:"{{url('get-cities')}}/"+provinceID,
                    success:function(res){
                        if(res){
                            $("#city").empty();
                            $("#city").append('<option>- شهر خود را انتخاب کنید -</option>');
                            $.each(res,function(key,value){
                                $("#city").append('<option value="'+key+'">'+value+'</option>');
                            });
                        }else{
                            $("#city").empty();
                        }
                    }
                });

            }else {
                $("#city").empty();
            }

            });
    </script>
@stop
