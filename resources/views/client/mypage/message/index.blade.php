<?php
// url : /mypage_message
// message
$tab='message';
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
                    <div class="mypage-tab-list">
                        @if(auth()->user()->is_designer())
                            <a href="" class="mypage-tab on">만든 프로젝트</a>
                            @else
                            <a href="" class="mypage-tab on">문의/후원한 프로젝트</a>
                        @endif


                    </div>
                    <div class="project-message-list">
                        @forelse($datas as $data)
                            <div class="project-message-card">
                                <div class="card-image">
                                    <img src="../images/dummy/img-dummy-01.png" alt="">
                                </div>
                                <div class="card-contents">
                                    <div class="card-header">
                                        <h3 class="card-title">
                                            <a href="{{route('mypage_message.show',['id'=>$data->id])}}">
                                                {{$data->project->title}}
                                            </a>
                                        </h3>
                                        <div class="new">new</div>
                                        <p class="card-date">{{$data->latest_time()->created_at}}</p>
                                    </div>
                                    <p class="card-name">{{$data->user->name}}</p>
                                    <p class="card-message">
                                        {{$data->latest_time()->content}}
                                    </p>
                                </div>
                            </div>
                            @empty
                            <div class="project-message-card">
                                    <div class="card-image">
                                        <img src="../images/common/img-empty-mail.png" alt="" width="100px">
                                    </div>
                                    <div class="card-contents">
                                        <div class="card-header">
                                            <h3 class="card-title">
                                                <a href="">
                                                    받은 메세지가 존재하지 않습니다.
                                                </a>
                                            </h3>
                                        </div>
                                        <p class="card-name">받은 메세지가 존재하지 않습니다.</p>
                                        <p class="card-message">
                                        </p>
                                    </div>
                                </div>
                        @endforelse
                    </div>
                    <div class="btn-wrap">
                        <button class="btn-black">더보기</button>
                    </div>
                </div>
                <!--// mypage contents -->


            </div>
        </div>

    </main>


@endsection
