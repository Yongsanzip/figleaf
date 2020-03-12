<?php
// url : /search
// a href 각각의 더보기로 이동
?>
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

            <p class="search-result-text">{{ $datas->total() }} 개의 브랜드가 있습니다.</p>

            <!-- brand -->
            <section class="con-search">

                <div class="card-list">
                    <!-- card * 20 -->
                    @foreach($datas as $data)
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

                <nav class="pagination-wrap">
                    @if($datas->count())
                        {!! $datas->appends(request()->except('page'))->render() !!}
                    @endif
                </nav>
            </section>
            <!--// brand-->
        </div>


    </main>
@endsection
