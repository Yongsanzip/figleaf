<?php
// url : /news
?>
@extends('client.layouts.app')
@section('content')
    <main class="container con-main">
    <!-- hero -->
    @include('client.layouts.partial.hero')
    <!-- //hero -->

        <div class="inner">
            <!-- news -->
            <section class="con-news">
                <div class="section-title-wrap">
                    <h2 class="section-title">news</h2>
                    <span class="caption">뉴스</span>
                    <a href="" class="more">전체보기</a>
                </div>

                <div class="news-list">
                    <!-- card * 20 -->
                    {{--<div class="card">
                        <div class="card-image">
                            <img src="{{asset('/images/dummy/img-dummy-01.png')}}" alt="">
                        </div>
                        <div class="card-contents">
                            <p class="card-title">
                                천고에 이상의 듣기만 이성은 밝은 그들의 따뜻한 피다. 주며, 살았으며, 얼마나 얼마나 얼마나 거선의 위하여서 이성은 밝은 그들의 따뜻한.
                            </p>
                        </div>
                        <div class="card-footer">
                            <p class="card-name">프레시안</p>
                            <p class="card-date">2019.08.22</p>
                        </div>
                        <a href="" class="link"></a>
                    </div>--}}
                    <!-- //card -->
                </div>


                <div class="btn-wrap">
                    {{--<div class="btn-more">View More News</div>--}}
                </div>
            </section>
            <!--//news -->
        </div>

    </main>
@endsection
