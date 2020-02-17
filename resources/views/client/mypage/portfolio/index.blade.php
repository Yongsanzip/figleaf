<?php
$tab = 'portfolio';
?>
@extends('client.layouts.app')
@section('content')
    <link rel="stylesheet" href="{{asset('/css/swiper.min.css')}}">


    <main class="container">

        <div class="inner">
            <div class="con-mypage">
                <h2 class="title">my page</h2>

                <!-- menu list -->
            @include('client.mypage.partial.navi')
            <!--// menu list -->
            @if(isset($datas))
                    @include('client.mypage.portfolio.partial.show')
                @else
                <!-- mypage contents -->
                    <div class="mypage-contents">
                        <div class="btn-wrap">
                            <a href="{{route('mypage_portfolio.create')}}" class="btn-black">포트폴리오 생성</a>
                        </div>
                    </div>
                    <!--// mypage contents -->
            @endif
            </div>
        </div>

    </main>



@endsection
