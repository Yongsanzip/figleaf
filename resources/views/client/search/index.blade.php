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
                    @if(count($designer) > 4)
                    <a href="{{ route('search.show', 1) }}?keyword={{ $keyword }}" class="more arrow">더보기</a>
                    @endif
                </div>
                @if(count($designer) > 0)
                <div class="card-list">
                    <!-- card * 4 -->
                    {{--@for($i = 0; $i < 4; $i++)--}}
                    @foreach($designer as $key=>$data)
                        @if($key > 3)
                            @break
                        @endif
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
                    <span class="count">{{ count($brand) }}</span>
                    @if(count($brand) > 4)
                    <a href="{{ route('search.show', 2) }}?keyword={{ $keyword }}" class="more arrow">더보기</a>
                    @endif
                </div>
                @if(count($brand) > 0)
                <div class="card-list">
                    <!-- card * 4 -->
                    @foreach($brand as $key=>$data)
                        @if($key > 3)
                            @break
                        @endif
                    <div class="card">
                        <div class="card-image">
                            <img src="{{asset('storage/'.$data->brand_thumbnail_images->first()->image_path)}}" alt="">
                        </div>
                        <div class="card-contents">
                            <p class="card-title">
                                @if( app()->getLocale() =='ko')
                                    {{ $data->brand->name_ko}}
                                @elseif(app()->getLocale() =='en')
                                    {{ $data->brand->name_en}}
                                @elseif(app()->getLocale() =='en')
                                    {{ $data->brand->name_cn}}
                                @else
                                    브랜드명이 존재하지 않습니다
                                @endif
                            </p>
                            <p class="card-text">
                                @if( app()->getLocale() =='ko')
                                    {{ $data->brand->contents_ko}}
                                @elseif(app()->getLocale() =='en')
                                    {{ $data->brand->contents_en}}
                                @elseif(app()->getLocale() =='en')
                                    {{ $data->brand->contents_cn}}
                                @else
                                    브랜드명이 존재하지 않습니다
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
            <!-- //brand -->


            <!-- project -->
            <section class="con-project">
                <div class="section-title-wrap">
                    <h2 class="section-title">project</h2>
                    <span class="caption">프로젝트</span>
                    <span class="count">{{ count($project) }}</span>
                    @if(count($project) > 4)
                    <a href="{{ route('search.show', 4) }}?keyword={{ $keyword }}" class="more arrow">더보기</a>
                    @endif
                </div>

                @if(count($project) > 0)
                <div class="card-list">
                    <!-- card * 4 -->
                    {{--@for($i = 0; $i < 4; $i++)--}}
                    @foreach($project as $key=>$data)
                        @if($key > 3)
                            @break
                        @endif
                    <div class="card">
                        <div class="card-image">
                            <img src="{{asset('storage/'.$data->main_image->image_path)}}" alt="">
                        </div>
                        <div class="card-contents">
                            <div class="text-box">
                                <p class="card-title">{{ $data->title }}</p>
                                <p class="card-text">{{ $data->introduction->designer_name }}</p>
                            </div>

                            <div class="card-info">
                                <div class="rating">
                                    <div class="rating-bar" style="width: {{ floor($data->supportCount($data->id)/$data->success_count*100) }}%"></div>
                                </div>
                                <div class="info-box-list">
                                    <div class="info-box amount">
                                        {{ $data->success_count - $data->supportCount($data->id) }}개 남음
                                    </div>
                                    <div class="info-box date">
                                        {{ floor((strtotime($data->deadline) - strtotime("now"))/(60*60 *24)) > 0 ? floor((strtotime($data->deadline) - strtotime("now"))/(60*60 *24)).'일 남음' : '마감' }}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- 성공할경우 뱃지 출력 -->
                        <a href="/project/{{ $data->id }}" class="link"></a>
                        @if($data->condition == 2)
                            <div class="badge badge-green">진행중</div>
                        @elseif($data->condition == 4)
                            <div class="badge badge-grey">실패</div>
                        @elseif($data->condition == 5)
                            <div class="badge badge-orange">성공</div>
                        @endif
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
            <!--// project -->
        </div>



    </main>
@endsection

