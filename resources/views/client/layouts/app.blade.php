<?php
?>

    <!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="referrer" content="no-referrer" />
    <link rel="stylesheet" href="{{asset('scss/reset.css')}}">
    <link rel="stylesheet" href="{{asset('scss/layout.css')}}">
    <link rel="stylesheet" href="{{asset('scss/client.css')}}">
    <link rel="stylesheet" href="{{asset('scss/bootstrap.css')}}">
    <script src="{{asset('js/common.js')}}"></script>
    <script src="{{asset('js/includeHTML.js')}}"></script>
    <script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('js/jquery-ui.min.js')}}"></script>
    <title>Figleaf</title>
</head>
<body>
<div class="wrap">
    @include('client.layouts.partial.header')
    @include('flash::message')
    @yield('content')
    @include('client.layouts.partial.footer')
</div>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script>
    $('#flash-overlay-modal').modal();
    $('div.alert').not('.alert-important').delay(3000).fadeOut(350);
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
</script>
@yield('script')
</body>
</html>
