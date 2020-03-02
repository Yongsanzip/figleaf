<?php
?>

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>admin</title>
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('html/admin/assets/css/reset.css')}}">
    <link rel="stylesheet" href="{{asset('html/admin/assets/css/style.css')}}">
    <script src="{{asset('html/admin/assets/js/style.js')}}"></script>
    <script src="{{ asset('/js/common.js') }}"></script>
    <script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('/js/adminProject.js') }}"></script>

</head>
<body>
<section id="wrap">
    @include('admin.layouts.partial.header')

    <main class="container">
    @include('admin.layouts.partial.left')
    @yield('content')
    </main>

    @include('admin.layouts.partial.footer')
</section>
</body>
</html>
