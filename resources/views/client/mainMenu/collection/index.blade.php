<?php
// url : /women
?>
@extends('client.layouts.app')
@section('content')
    <main class="container">
        <!-- hero -->
        @include('client.layouts.partial.hero')
        <!-- //hero -->


        <div class="inner">
            <section class="con-project">

                <div class="category-title-wrap">
                    <h2 class="category-title">collection</h2>
                </div>

                <div class="card-list">
                @if(count($datas) > 0)
                    @foreach($datas as $data)
                        <!-- card * 20 -->
                            <div class="card">
                                <div class="card-image">
                                    <img src="{{$data->main_image ? asset('storage/'.$data->main_image->image_path)  : asset('/images/common/img_no_image.jpg')}}" alt="">
                                </div>
                                <div class="card-contents">
                                    <div class="text-box">
                                        <p class="card-title">{{$data->title}}</p>
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

                                <a href="/project/{{ $data->id }}" class="link"></a>
                                @if($data->condition == 2)
                                    <div class="badge badge-green">진행중</div>
                                @elseif($data->condition == 4)
                                    <div class="badge badge-grey">실패</div>
                                @elseif($data->condition == 5)
                                    <div class="badge badge-orange">성공</div>
                                @endif

                                <a href="/project/{{ $data->id }}" class="link"></a>
                            </div>
                            <!-- //card -->
                        @endforeach
                    @endif
                </div>

                <div class="btn-wrap">
                    <div class="btn-more">View More Project</div>
                </div>
            </section>
        </div>

    </main>
@endsection
