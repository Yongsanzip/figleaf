<?php
// url : /men
?>
@extends('client.layouts.app')
@section('content')
    <main class="container">
        <div class="inner">
            <section class="con-project">

                <div class="category-title-wrap">
                    <h2 class="category-title">men’s Apparel</h2>
                </div>

                <ul class="category-detail-list category-detail-8">
                    <li class="on">
                        <a href="">view all</a>
                    </li>
                    <li>
                        <a href="">outer</a>
                    </li>
                    <li>
                        <a href="">top</a>
                    </li>
                    <li>
                        <a href="">t-shirts/handie</a>
                    </li>
                    <li>
                        <a href="">pants</a>
                    </li>
                    <li>
                        <a href="">sports</a>
                    </li>
                    <li>
                        <a href="">shoes</a>
                    </li>
                    <li>
                        <a href="">accessories</a>
                    </li>
                </ul>

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
                                            <p class="card-text"> {{$data->user->name}} </p>
                                        </div>

                                        <div class="card-info">
                                            <div class="rating">
                                                <div class="rating-bar" style="width: 80%">80</div>
                                            </div>
                                            <div class="info-box-list">
                                                <div class="info-box amount">
                                                    {{$data->success_count}}개 남음
                                                </div>
                                                <div class="info-box date">
                                                    {{$data->deadline->format('d')}}일 남음
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- 성공할경우 뱃지 출력 -->
                                    <div class="badge badge-orange">성공</div>
                                    <!-- 진행중인 경우 뱃지 출력 -->
                                    <!-- <div class="badge badge-green">진행중</div> -->
                                    <!-- 실패한 경우 뱃지 출력 -->
                                    <!-- <div class="badge badge-grey">실패</div> -->

                                    <a href="/project/{{ $data->id }}" class="link"></a>
                                </div>
                            <!-- //card -->
                        @endforeach
                        @else
                            <div class="card">
                                <div class="card-image">
                                    <img src="{{asset('images/common/img_no_image.jpg')}}" alt="">
                                </div>
                                <div class="card-contents">
                                    <div class="text-box">
                                        <p class="card-title"> 진행중인 프로젝트가 없습니다</p>
                                        <p class="card-text"> - </p>
                                    </div>

                                </div>

                                <a href="" class="link"></a>
                            </div>
                    @endif
                </div>

                <div class="btn-wrap">
                    <div class="btn-more">View More Project</div>
                </div>
            </section>
        </div>

    </main>
@endsection
