@if (session()->has('message'))
    <div class="alert alert-{{ session('type') }} alert-dismissible d-flex justify-content-center"  dir="rtl" role="alert">
{{--        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>--}}
        <strong>{{ session('message') }}</strong>
{{--            <li>{{ $errors->all() }}</li>--}}

    </div>
{{--    <script src="js/jquery-3.4.1.min.js"></script>

    <script>
        $('div.alert').delay(3000).slideUp(300);
        alert("The slideDown() method is finished!").delay(3000).slideUp(300);
    </script>--}}
@endif


