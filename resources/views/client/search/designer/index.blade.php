<?php
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

            <p class="search-result-text">{{ $datas->total() }} 명의 디자이너가 있습니다.</p>

            <!-- designer -->
            <section class="con-search">

                <div class="card-list">
                    <!-- card * 20 -->
                    @foreach($datas as $data)
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

                <nav class="pagination-wrap">
                    @if($datas->count())
                        {!! $datas->appends(request()->except('page'))->render() !!}
                    @endif
                </nav>
            </section>
            <!--// designer-->

        </div>



    </main>
@endsection
