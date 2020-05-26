<?php
// url : /mypage_message/1
// 메시지 상세보기
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
                <!--// menu list -->

                <!-- mypage contents -->
                <div class="mypage-contents">
                    <div class="message-header">
                        <p class="message-name">{{$project->user->name}}</p>
                        <h2 class="message-title">{{$project->title}}</h2>
                        <a href="{{route('project.show',['id'=>$project->id])}}" class="btn-white">프로젝트로 이동</a>
                    </div>
                    <div class="message-contents" id="scroll_area"  style="overflow:auto" >
                        <ul class="message-list">
                            <!-- 날짜 -->
                            <li class="date">
                                <p>{{\Carbon\Carbon::today()->format('Y-m-d')}}</p>
                            </li>
                            <div id="message_list" class="message-list" >
                            @forelse($datas as $key=>$data)
                                @if($data->user_id == auth()->user()->id)
                                    <!-- 보낸 메세지 -->
                                        <li class="send">
                                            <div class="bubble">
                                                <p class="text">{!! nl2br($data->content)!!}</p>
                                                <span class="time">{{$data->created_at->format('H:i')}}</span>
                                            </div>
                                        </li>
                                @else
                                    <!-- 받은 메세지 -->
                                        <li class="receive">
                                            <div class="bubble">
                                                <p class="text">{!! nl2br($data->content)!!}</p>
                                                <span class="time">{{$data->created_at->format('H:i')}}</span>
                                            </div>
                                        </li>
                                    @endif
                                @if($key+1==$datas->count())
                                        <input type="hidden" id="last_id" value="{{$data->id}}">
                                @endif
                                @empty
                                @endforelse
                            </div>
                        </ul>
                    </div>
                    <div class="message-footer">
                        <input type="hidden" id="designer_name" value="{{$project->user->name}}" />
                        <textarea id="message_content" name="content" class="textarea" placeholder="문의 내용을 입력하세요" spellcheck="false"></textarea>
                        <button onclick="gn_detail_send_message('{{$id}}')" class="btn-black">전송</button>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script type="text/javascript">
        document.addEventListener('DOMContentLoaded',function(){
            document.getElementById('scroll_area').scrollTo(0, document.getElementById('scroll_area').scrollHeight);
            setInterval(function () {
                gn_get_message_list('{{$id}}',document.getElementById('last_id').value);
            },10000);
        })
    </script>
    <!--// mypage contents -->
@endsection
