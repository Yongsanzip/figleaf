<?php
$tab='question';
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
                    <div class="question-wrap">
                        <div class="qna-box question">
                            <div class="qna-header">
                                <p class="qna-title">{{ $data->title }}</p>
                                <p class="qna-date">{{ $data->created_at->format('Y-m-d H:i') }}</p>
                            </div>
                            <div class="qna-contents">
                                <p class="qna-text">
                                    {!! $data->content !!}
                                </p>
                            </div>
                        </div>
                        @if($data->answer_yn == 1)
                        <div class="qna-box answer">
                            <div class="qna-header">
                                <p class="qna-title">관리자의 답변</p>
                                <p class="qna-date">{{ $data->answer_at->format('Y-m-d H:i') }}</p>
                            </div>
                            <div class="qna-contents">
                                <p class="qna-text">
                                    {!! $data->answer !!}
                                </p>
                            </div>
                        </div>
                        @endif
                        <div class="btn-wrap">
                            {{--<a href="" class="btn-black">수정하기</a>--}}
                            <button type="button" class="btn-black" id="delete_btn">삭제하기</button>
                            <a href="{{ $url }}" class="btn-white">목록</a>
                        </div>

                    </div>

                </div>
                <!--// mypage contents -->

            </div>
        </div>

    </main>

    <script>
        document.getElementById('delete_btn').addEventListener('click', function () {
            if (confirm('삭제하시겠습니까?')) {
                var question_id = "{{ $data->id }}";

                var error = function () {
                    alert('오류');
                };

                var success = function () {
                    alert('삭제되었습니다.');
                    location.href = '/mypage_question';
                };

                callAjax('DELETE',true,'/mypage_question/'+question_id,"JSON",'JSON',null,error,success);
            }
        });

    </script>

@endsection
