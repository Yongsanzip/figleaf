<?php
$tab = 'question';
?>
@extends('client.layouts.app')
@section('content')
    <link rel="stylesheet" href="{{asset('/css/swiper.min.css')}}">


    <main class="container">
        <form action="{{ route('mypage_question.store') }}" method="POST" id="mypageQuestionForm">
            @csrf
        <div class="inner">
            <div class="con-mypage">
                <h2 class="title">my page</h2>
                <!-- menu list -->
                @include('client.mypage.partial.navi')
                <!--// menu list -->

                <!-- mypage contents -->
                <div class="mypage-contents">
                    <form>
                        @if($errors->first('title') || $errors->first('contents'))
                        <p style="color: red; font-size: 14px; padding-bottom: 10px">* 제목과 내용을 다시 확인해주세요</p>
                        @endif
                        <div class="question-form">
                            <input type="text" class="input-field" name="title" value="{{ old('title') }}" placeholder="제목" autofocus>
                            <textarea class="textarea" name="contents" id="contents" placeholder="내용을 입력하세요" spellcheck="false">{{ old('contents') }}</textarea>
                            <div class="btn-wrap">
                                <button type="button" class="btn-black" id="question_btn">문의하기</button>
                                <button type="button" class="btn-white" id="cancel_btn">취소하기</button>
                            </div>
                        </div>
                    </form>

                </div>
                <!--// mypage contents -->


            </div>
        </div>
        </form>
    </main>

    <script>
        document.getElementById('question_btn').addEventListener('click', function () {
            var form = document.getElementById('mypageQuestionForm');
            var str = document.getElementById("contents").value;
            str = str.replace(/(?:\r\n|\r|\n)/g, '<br/>');
            document.getElementById("contents").value = str;
            form.submit();
        });

        document.getElementById('cancel_btn').addEventListener('click', function () {
            if (confirm('취소하시겠습니까?')) {
                location.href = '/mypage_question';
            }
        });

    </script>

@endsection
