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
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('scss/reset.css')}}">
    <link rel="stylesheet" href="{{asset('scss/layout.css')}}">
    <link rel="stylesheet" href="{{asset('scss/client.css')}}">
    <link rel="stylesheet" href="{{asset('scss/client.css')}}">
    <link rel="stylesheet" href="{{asset('scss/responsive.css')}}">
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
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script>
    $('#flash-overlay-modal').modal();
    $('div.alert').not('.alert-important').delay(3000).fadeOut(350);
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $(document).ready(function () {
        $('.datepickers').datepicker({
            changeMonth: true,
            changeYear : true,
            yearRange: 'c-50:c+0',
            dayNames: ['월요일', '화요일', '수요일', '목요일', '금요일', '토요일', '일요일'],
            dayNamesMin: ['월', '화', '수', '목', '금', '토', '일'],
            monthNamesShort: ['1','2','3','4','5','6','7','8','9','10','11','12'],
            monthNames: ['1월','2월','3월','4월','5월','6월','7월','8월','9월','10월','11월','12월'],
            dateFormat: "yy-mm-dd",
            showMonthAfterYear: true,
        });

        $('.today_datepicker').datepicker({
            minDate: 0,
            changeMonth: true,
            changeYear : true,
            yearRange: 'c-0:c+50',
            dayNames: ['월요일', '화요일', '수요일', '목요일', '금요일', '토요일', '일요일'],
            dayNamesMin: ['월', '화', '수', '목', '금', '토', '일'],
            monthNamesShort: ['1','2','3','4','5','6','7','8','9','10','11','12'],
            monthNames: ['1월','2월','3월','4월','5월','6월','7월','8월','9월','10월','11월','12월'],
            dateFormat: "yy-mm-dd",
            showMonthAfterYear: true,
        });

            $('.year_datepicker').datepicker({
                format: " yyyy", // Notice the Extra space at the beginning
                viewMode: "years",
                minViewMode: "years"
            });
    });
</script>
@yield('script')
</body>
</html>
