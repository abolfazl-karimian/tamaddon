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
    @include('Layers.Flash')

    @include('Layers.Menu')

    @yield('content', 'Content not found')

    @include('Layers.Footer')

</div>

@yield('JS', 'JS not found')
<script src="js/jquery.js"></script>

</body>
</html>
