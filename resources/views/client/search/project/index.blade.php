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

            <p class="search-result-text">{{ count($datas) }} 개의 프로젝트가 있습니다.</p>

            <section class="con-search">
                <div class="card-list">
                    <!-- card * 20 -->
                    @foreach($datas as $data)
                    <div class="card project-card">
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

                <nav class="pagination-wrap">
                    @if($datas->count())
                        {!! $datas->appends(request()->except('page'))->render() !!}
                    @endif
                </nav>
            </section>

        </div>

    </main>
@endsection
