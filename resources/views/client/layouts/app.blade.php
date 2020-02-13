<?php
?>

    <!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('scss/reset.css')}}">
    <link rel="stylesheet" href="{{asset('scss/layout.css')}}">
    <link rel="stylesheet" href="{{asset('scss/client.css')}}">
    <script src="{{asset('js/common.js')}}"></script>
    <script src="{{asset('js/includeHTML.js')}}"></script>
    <script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('js/jquery-ui.min.js')}}"></script>
    <title>Figleaf</title>
</head>
<body>
<div class="wrap">
    @include('client.layouts.partial.header')
    @yield('content')
    @include('flash::message')
    @include('client.layouts.partial.footer')
</div>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script>
    $('div.alert').not('.alert-important').delay(3000).fadeOut(350);
</script>
@yield('script')
</body>
</html>
