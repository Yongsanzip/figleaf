<?php
// url : /mypage_support
$tab = 'support';
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

                <!-- mypage contents -->
                <div class="mypage-contents">
                    @if(count($datas)>0)
                    <div class="project-list">
                        <!-- card -->
                        @foreach($datas as $data)
                        <div class="project-card">
                            <div class="card">
                                <div class="card-image">
                                    <img src="{{ $data->project->main_image ? asset('storage/'.$data->project->main_image->image_path) : '../images/common/img_no_images.png'}}" alt="">
                                </div>
                                <div class="card-contents">
                                    <div class="project-info">
                                        <p class="project-title">{{$data->project->title}}</p>
                                        <p class="project-name">{{$data->project->user->name}}</p>
                                    </div>
                                    <div class="project-item">
                                        <p>세상을 뮤즈로 한 자켓 (베이지) - S</p>
                                    </div>
                                </div>
                                <!-- 프로젝트 상태에 따른 뱃지 -->
                                <div class="badge badge-green">진행중</div>
                                <!-- <div class="badge badge-grey">실패</div> -->
                                <!-- <div class="badge badge-orange">성공</div> -->
                            </div>
                            <a href="{{route('mypage_support.show',['id'=>$data->support_code])}}" class="btn-white">상세내역</a>
                        </div>
                        @endforeach
                            <div class="btn-wrap">
                                <button class="btn-black">더보기</button>
                            </div>
                    </div>
                    @else
                        <div class="project-notice">
                            <h2 class="notice-title">Support</h2>
                            <ul class="notice-list">
                                <p style="text-align: center;"><strong>후원중인 프젝트가 없습니다.</strong></p>
                            </ul>
                        </div>
                    @endif
                </div>

                <!--// mypage contents -->


            </div>
        </div>

    </main>



@endsection
