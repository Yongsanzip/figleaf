<?php
$tab = 'portfolio';
?>
@extends('client.layouts.app')
@section('content')
    <link rel="stylesheet" href="{{asset('/css/swiper.min.css')}}">

    <main class="container">
        <div class="inner">
            <div class="con-portfolio-view">
                <h2 class="portfolio-headline">
                    portfolio
                </h2>
                <!-- designer profile -->
                <div class="designer-headline">
                    <div class="designer-name">
                        {{$datas->user->name}}
                    </div>
                    <div class="designer-type">
                        standard
                    </div>
                </div>
                <!--//designer profile -->

                <!-- project overview-->
                <div class="contents-wrap portfolio-overview">
                    <img src="{{ asset('storage/'.count($datas->portfolio_images) > 0 ? $datas->portfolio_images->first()->image_path : '#')}}" alt="">
                    <p>
                    @if( app()->getLocale() =='ko')
                        {{ $datas->content_ko}}
                    @elseif(app()->getLocale() =='en')
                        {{ $datas->content_en}}
                    @elseif(app()->getLocale() =='cn')
                        {{ $datas->content_cn}}
                    @else
                        포트폴리오 내용이 존재하지 않습니다
                    @endif
                    </p>
                </div>
                <!--//project overview -->

                <!-- designer history -->
                <div class="contents-wrap history-list">
                    <div class="headline-wrap">
                        <h3 class="headline">history</h3>
                    </div>
                    @foreach( $datas->histories() as $history)
                        <!-- history item -->
                            <div class="history-item">
                                <h4 class="year">{{ $history->year }}</h4>
                                <ul class="history">
                                    @if( app()->getLocale() =='ko')
                                        <li>{{ $history->history_cn }}</li>
                                    @elseif(app()->getLocale() =='en')
                                        <li>{{ $history->history_cn }}</li>
                                    @elseif(app()->getLocale() =='cn')
                                        <li>{{ $history->history_cn }}</li>
                                    @else
                                        히스토리 내용이 존재하지 않습니다
                                    @endif
                                </ul>
                            </div>
                            <!-- //history item -->
                    @endforeach
                </div>
                <!--//designer history -->

                <!-- award history-->
                <div class="contents-wrap history-list">
                    <div class="headline-wrap">
                        <h3 class="headline">award history</h3>
                    </div>
                @foreach($datas->awards() as $awards)
                    <!-- history item -->
                        <div class="history-item">
                            <h4 class="year">{{ $awards->year }}</h4>
                            <ul class="history">
                                @if( app()->getLocale() =='ko')
                                    <li>{{ $awards->history_ko }}</li>
                                @elseif(app()->getLocale() =='en')
                                    <li>{{ $awards->history_en }}</li>
                                @elseif(app()->getLocale() =='cn')
                                    <li>{{ $awards->history_cn }}</li>
                                @else
                                    히스토리 내용이 존재하지 않습니다
                                @endif
                            </ul>
                        </div>
                        <!-- //history item -->
                @endforeach
                </div>
                <!--//award history -->

                <!-- association-->
                <div class="contents-wrap association">
                    <div class="headline-wrap">
                        <h3 class="headline">association</h3>
                    </div>
                    <ul class="association-list">
                    @foreach($datas->association_activties() as $association)
                        <!-- history item -->
                            <li>
                                <p class="year">{{$association->start_year}}~{{$association->end_year}}</p>
                            @if( app()->getLocale() =='ko')
                                <p>{{ $association->association_ko }}</p>
                            @elseif(app()->getLocale() =='en')
                                <p>{{ $association->association_en }}</p>
                            @elseif(app()->getLocale() =='cn')
                                <p>{{ $association->association_cn }}</p>
                            @else
                                협회활동이 내용이 존재하지 않습니다
                            @endif
                            </li>
                        @endforeach
                    </ul>
                </div>
                <!--//association -->

                <!-- brand -->
                <div class="contents-wrap brand">
                    <div class="headline-wrap">
                        <h3 class="headline">brand</h3>
                    </div>
                    <div class="contents-overview">
                        <img src="{{ asset('storage/'.count($datas->brand_thumbnail_images) > 0  ? $datas->brand_thumbnail_images->first()->image_path : '#')}}" alt="">
                        @if( app()->getLocale() =='ko')
                            {{ $datas->brand->contents_ko}}
                        @elseif(app()->getLocale() =='en')
                            {{ $datas->brand->contents_en}}
                        @elseif(app()->getLocale() =='en')
                            {{ $datas->brand->contents_cn}}
                        @else
                            브랜드 설명 존재하지 않습니다
                        @endif
                    </div>

                </div>
                <!--//brand -->

                <!-- lookbook -->
                <div class="contents-wrap lookbook">
                    <div class="headline-wrap">
                        <h3 class="headline">lookbook</h3>
                    </div>
                    <div class="lookbook-wrap">
                        <!-- lookbook item -->
                        <div class="lookbook-item">
                            <h4 class="lookbook-title">2019 F/W</h4>
                            <div class="lookbook-list">
                                <div class="image">
                                    <img src="../images/dummy/img-dummy-02.png" alt="">
                                </div>
                                <div class="image">
                                    <img src="../images/dummy/img-dummy-02.png" alt="">
                                </div>
                                <div class="image">
                                    <img src="../images/dummy/img-dummy-02.png" alt="">
                                </div>
                                <div class="image">
                                    <img src="../images/dummy/img-dummy-02.png" alt="">
                                </div>
                                <div class="image">
                                    <img src="../images/dummy/img-dummy-02.png" alt="">
                                </div>
                            </div>
                        </div>
                        <!-- //lookbook item-->
                        <div class="lookbook-item">
                            <h4 class="lookbook-title">2019 F/W</h4>
                            <div class="lookbook-list">
                                <div class="image">
                                    <img src="../images/dummy/img-dummy-02.png" alt="">
                                </div>
                                <div class="image">
                                    <img src="../images/dummy/img-dummy-02.png" alt="">
                                </div>
                                <div class="image">
                                    <img src="../images/dummy/img-dummy-02.png" alt="">
                                </div>
                                <div class="image">
                                    <img src="../images/dummy/img-dummy-02.png" alt="">
                                </div>
                                <div class="image">
                                    <img src="../images/dummy/img-dummy-02.png" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="lookbook-item">
                            <h4 class="lookbook-title">2019 F/W</h4>
                            <div class="lookbook-list">
                                <div class="image">
                                    <img src="../images/dummy/img-dummy-02.png" alt="">
                                </div>
                                <div class="image">
                                    <img src="../images/dummy/img-dummy-02.png" alt="">
                                </div>
                                <div class="image">
                                    <img src="../images/dummy/img-dummy-02.png" alt="">
                                </div>
                                <div class="image">
                                    <img src="../images/dummy/img-dummy-02.png" alt="">
                                </div>
                                <div class="image">
                                    <img src="../images/dummy/img-dummy-02.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- //lookbook -->


                <!-- contact -->
                <div class="contents-wrap contact">
                    <div class="headline-wrap">
                        <h3 class="headline">contact</h3>
                    </div>
                    <div class="contact-wrap">
                        <ul class="contact-list">
                            @if($datas->email_hidden == 0)
                                <li class="contact-item">
                                    <p class="contact-name">이메일</p>
                                    <p class="contact-value">
                                        {{$datas->email}}
                                    </p>
                                </li>
                            @endif
                            @if($datas->phone_hidden == 0)
                                <li class="contact-item">
                                        <p class="contact-name">전화번호</p>
                                        <p class="contact-value">
                                            {{$datas->phone}}
                                        </p>
                                    </li>
                            @endif
                            @if($datas->homepage_hidden == 0)
                                <li class="contact-item">
                                        <p class="contact-name">홈페이지</p>
                                        <p class="contact-value">
                                            <a href="{{$datas->homepage}}">{{$datas->homepage}}</a>
                                        </p>
                                    </li>
                            @endif

                        </ul>
                        <ul class="sns-list">
                            @if($datas->facebook_hidden == 0)
                                <li class="sns-item">
                                    <a href="{{$datas->facebook}}">페이스북</a>
                                </li>
                            @endif
                            @if($datas->twitter_hidden == 0)
                                <li class="sns-item">
                                    <a href="{{$datas->twitter}}">트위터</a>
                                </li>
                            @endif
                            @if($datas->instagram_hidden == 0)
                                <li class="sns-item">
                                    <a href="{{$datas->instgram}}">인스타그램</a>
                                </li>
                            @endif
                        </ul>
                    </div>
                    <div class="btn-wrap btn-edit-wrap">
                        <a class="btn-black">수정하기</a>
                    </div>
                </div>
                <!-- //contact -->

            </div>
        </div>

    </main>

@endsection
