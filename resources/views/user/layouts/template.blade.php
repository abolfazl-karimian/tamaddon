<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('Title', 'Title not found')</title>
    <link rel="icon" type="image/ico" href="icon/logo.ico" />
    @yield('CSS', 'Stylesheet not found')

</head>
<body>

<div class="pageBox">
    @include('user.layouts.flash.flash')

    @include('user.layouts.menu.menu')

    @yield('content', 'Content not found')

    @include('user.layouts.footer.footer')

</div>

@yield('JS', 'JS not found')
<script src="js/jquery.js"></script>

</body>
</html>
