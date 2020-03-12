<?php
// url : /search
// a href 각각의 더보기로 이동
?>
{{--<a href="{{ route('search.show', 1) }}">디자이너</a>--}}
{{--<a href="{{ route('search.show', 2) }}">브랜드</a>--}}
{{--<a href="{{ route('search.show', 3) }}">뉴스</a>--}}
{{--<a href="{{ route('search.show', 4) }}">프로젝트</a>--}}

@extends('client.layouts.app')
@section('content')

    <main class="container">


        <div class="inner">

            <!-- headline -->
            <div class="headline-wrap">
                <h2 class="headline">
                    ‘{{ $keyword }}’ 검색결과
                </h2>
            </div>
            <!-- //headline -->

            <!-- designer -->
            <section class="con-designer">
                <div class="section-title-wrap">
                    <h2 class="section-title">designer</h2>
                    <span class="caption">디자이너</span>
                    <span class="count">{{ count($designer) }}</span>
                    <a href="{{ route('search.show', 1) }}" class="more arrow">더보기</a>
                </div>
                @if(count($designer) > 0 )
                <div class="card-list">
                    <!-- card * 4 -->
                    @foreach($designer as $data)
                    <div class="card">
                        <div class="card-image">
                            <img src="{{asset('storage/'.$data->portfolio_images->first()->image_path)}}" alt="">
                        </div>
                        <div class="card-contents">
                            <p class="card-title">{{ $data->user->name }}</p>
                            <p class="card-text">
                                @if( app()->getLocale() =='ko')
                                    {{ $data->content_ko ? $data->content_ko : ''}}
                                @elseif(app()->getLocale() =='en')
                                    {{ $data->content_en ? $data->content_en : ''}}
                                @elseif(app()->getLocale() =='cn')
                                    {{ $data->content_cn ? $data->content_cn : ''}}
                                @else
                                    포트폴리오 내용이 존재하지 않습니다
                                @endif
                            </p>
                        </div>
                        <a href="/designer/{{ $data->id }}" class="link"></a>
                    </div>
                    @endforeach
                    <!-- //card -->
                </div>
                @else
                    <!-- 검색 결과가 없을 경우 -->
                    <div class="search-result-none">
                        <p>검색된 내역이 없습니다.</p>
                    </div>
                    <!-- //검색 결과가 없을 경우 -->
                @endif

            </section>
            <!--// designer-->




            <!-- brand -->
            <section class="con-brand">
                <div class="section-title-wrap">
                    <h2 class="section-title">brand</h2>
                    <span class="caption">브랜드</span>
                    <span class="count">25</span>
                    <a href="{{ route('search.show', 2) }}" class="more arrow">더보기</a>
                </div>
                <div class="card-list">
                    <!-- card * 4 -->
                    <div class="card">
                        <div class="card-image">
                            <img src="{{asset('/images/dummy/img-dummy-01.png')}}" alt="">
                        </div>
                        <div class="card-contents">
                            <p class="card-title">티르티르</p>
                            <p class="card-text">천고에 이상의 듣기만 이성은 밝은 그들의 따뜻한 피다천고에 이상의 듣기만 이성은 밝은 그들의 따뜻한 피다천고에 이상의 듣기만 이성은 밝은 그들의 따뜻한 피다. 주며, 살았으며, 얼마나 얼마나 얼마나 거선의 위하여서. </p>
                        </div>
                        <a href="" class="link"></a>
                    </div>
                    <!-- //card -->
                    <div class="card">
                        <div class="card-image">
                            <img src="{{asset('/images/dummy/img-dummy-01.png')}}" alt="">
                        </div>
                        <div class="card-contents">
                            <p class="card-title">티르티르</p>
                            <p class="card-text">천고에 이상의 듣기만 이성은 밝은 그들의 따뜻한 피다천고에 이상의 듣기만 이성은 밝은 그들의 따뜻한 피다천고에 이상의 듣기만 이성은 밝은 그들의 따뜻한 피다. 주며, 살았으며, 얼마나 얼마나 얼마나 거선의 위하여서. </p>
                        </div>
                        <a href="" class="link"></a>
                    </div>
                    <div class="card">
                        <div class="card-image">
                            <img src="{{asset('/images/dummy/img-dummy-01.png')}}" alt="">
                        </div>
                        <div class="card-contents">
                            <p class="card-title">티르티르</p>
                            <p class="card-text">천고에 이상의 듣기만 이성은 밝은 그들의 따뜻한 피다천고에 이상의 듣기만 이성은 밝은 그들의 따뜻한 피다천고에 이상의 듣기만 이성은 밝은 그들의 따뜻한 피다. 주며, 살았으며, 얼마나 얼마나 얼마나 거선의 위하여서. </p>
                        </div>
                        <a href="" class="link"></a>
                    </div>
                    <div class="card">
                        <div class="card-image">
                            <img src="{{asset('/images/dummy/img-dummy-01.png')}}" alt="">
                        </div>
                        <div class="card-contents">
                            <p class="card-title">티르티르</p>
                            <p class="card-text">천고에 이상의 듣기만 이성은 밝은 그들의 따뜻한 피다천고에 이상의 듣기만 이성은 밝은 그들의 따뜻한 피다천고에 이상의 듣기만 이성은 밝은 그들의 따뜻한 피다. 주며, 살았으며, 얼마나 얼마나 얼마나 거선의 위하여서. </p>
                        </div>
                        <a href="" class="link"></a>
                    </div>
                </div>

                <!-- 검색 결과가 없을 경우 -->
                <!--<div class="search-result-none"> -->
                <!--    <p>검색된 내역이 없습니다.</p> -->
                <!-- </div> -->
                <!-- //검색 결과가 없을 경우 -->
            </section>
            <!-- //brand -->



            <!-- news -->
            <section class="con-news">
                <div class="section-title-wrap">
                    <h2 class="section-title">news</h2>
                    <span class="caption">뉴스</span>
                    <span class="count">102</span>
                    <a href="{{ route('search.show', 3) }}" class="more arrow">더보기</a>
                </div>
                <!-- news list-->
                <div class="news-list">
                    <!-- card -->
                    <div class="card">
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
                    </div>
                    <!-- //card -->
                    <div class="card">
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
                    </div>
                    <div class="card">
                        <div class="card-image">
                            <img src="{{asset('/images/dummy/img-dummy-01.png')}}" alt="">
                        </div>
                        <div class="card-contents">
                            <p class="card-title">
                                거선의 위하여서 이성은 밝은 그들의 따뜻한.
                            </p>
                        </div>
                        <div class="card-footer">
                            <p class="card-name">프레시안</p>
                            <p class="card-date">2019.08.22</p>
                        </div>
                        <a href="" class="link"></a>
                    </div>
                    <div class="card">
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
                    </div>
                </div>
            </section>
            <!-- //news -->

            <!-- project -->
            <section class="con-project">
                <div class="section-title-wrap">
                    <h2 class="section-title">project</h2>
                    <span class="caption">프로젝트</span>
                    <span class="count">5</span>
                    <a href="{{ route('search.show', 4) }}" class="more arrow">더보기</a>
                </div>

                <div class="card-list">
                    <!-- card * 4 -->
                    <div class="card">
                        <div class="card-image">
                            <img src="{{asset('/images/dummy/img-dummy-01.png')}}" alt="">
                        </div>
                        <div class="card-contents">
                            <div class="text-box">
                                <p class="card-title">서울패션위크 참가 패션브랜드에서 선보이는 럭셔리하고 심플한 주얼리 악세사리 모음</p>
                                <p class="card-text"> 강주원 </p>
                            </div>

                            <div class="card-info">
                                <div class="rating">
                                    <div class="rating-bar" style="width: 80%">80</div>
                                </div>
                                <div class="info-box-list">
                                    <div class="info-box amount">
                                        180개 남음
                                    </div>
                                    <div class="info-box date">
                                        6일 남음
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- 성공할경우 뱃지 출력 -->
                        <div class="badge badge-orange">성공</div>
                        <a href="" class="link"></a>
                    </div>
                    <!-- //card -->
                    <div class="card">
                        <div class="card-image">
                            <img src="{{asset('/images/dummy/img-dummy-01.png')}}" alt="">
                        </div>
                        <div class="card-contents">
                            <div class="text-box">
                                <p class="card-title">서울패션위크 참가 패션브랜드에서 선보이는 럭셔리하고 심플한 주얼리 악세사리 모음</p>
                                <p class="card-text"> 강주원 </p>
                            </div>

                            <div class="card-info">
                                <div class="rating">
                                    <div class="rating-bar" style="width: 80%">80</div>
                                </div>
                                <div class="info-box-list">
                                    <div class="info-box amount">
                                        180개 남음
                                    </div>
                                    <div class="info-box date">
                                        6일 남음
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- 성공할경우 뱃지 출력 -->
                        <div class="badge badge-orange">성공</div>
                        <a href="" class="link"></a>
                    </div>
                    <div class="card">
                        <div class="card-image">
                            <img src="{{asset('/images/dummy/img-dummy-01.png')}}" alt="">
                        </div>
                        <div class="card-contents">
                            <div class="text-box">
                                <p class="card-title">서울패션위크 참가 패션브랜드에서 선보이는 럭셔리하고 심플한 주얼리 악세사리 모음</p>
                                <p class="card-text"> 강주원 </p>
                            </div>

                            <div class="card-info">
                                <div class="rating">
                                    <div class="rating-bar" style="width: 80%">80</div>
                                </div>
                                <div class="info-box-list">
                                    <div class="info-box amount">
                                        180개 남음
                                    </div>
                                    <div class="info-box date">
                                        6일 남음
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- 성공할경우 뱃지 출력 -->
                        <div class="badge badge-orange">성공</div>
                        <a href="" class="link"></a>
                    </div>
                    <div class="card">
                        <div class="card-image">
                            <img src="{{asset('/images/dummy/img-dummy-01.png')}}" alt="">
                        </div>
                        <div class="card-contents">
                            <div class="text-box">
                                <p class="card-title">서울패션위크 참가 패션브랜드에서 선보이는 럭셔리하고 심플한 주얼리 악세사리 모음</p>
                                <p class="card-text"> 강주원 </p>
                            </div>

                            <div class="card-info">
                                <div class="rating">
                                    <div class="rating-bar" style="width: 80%">80</div>
                                </div>
                                <div class="info-box-list">
                                    <div class="info-box amount">
                                        180개 남음
                                    </div>
                                    <div class="info-box date">
                                        6일 남음
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- 성공할경우 뱃지 출력 -->
                        <div class="badge badge-orange">성공</div>
                        <a href="" class="link"></a>
                    </div>
                </div>

                <!-- 검색 결과가 없을 경우 -->
                <!--<div class="search-result-none"> -->
                <!--    <p>검색된 내역이 없습니다.</p> -->
                <!-- </div> -->
                <!-- //검색 결과가 없을 경우 -->
            </section>
            <!--// project -->
        </div>



    </main>
@endsection

