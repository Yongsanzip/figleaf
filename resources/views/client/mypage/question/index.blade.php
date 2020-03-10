<?php
// url : /mypage_question
// 1:1문의하기
$tab = 'question';
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
                    <table class="question-table">
                        <thead>
                        <tr>
                            <th style="text-align: center">no.</th>
                            <th style="text-align: center">제목</th>
                            <th style="text-align: center">내용</th>
                            <th style="text-align: center">등록일</th>
                            <th style="text-align: center">답변여부</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($datas as $key=>$data)
                        <tr onclick="location.href='/mypage_question/{{ $data->id }}'">
                            <td>{{ $datas->total() - ($datas->perPage()* ($datas->currentPage()-1)) - $key }}</td>
                            <td>
                                <p class="question-title">
                                    {{ $data->title }}
                                </p>
                            </td>
                            <td>
                                <p class="question-text">
                                    {{ $data->content }}
                                </p>
                            </td>
                            <td>
                                {{ $data->created_at->format('Y-m-d') }}
                            </td>
                            <td>
                                @if($data->answer_yn == 0)
                                    <div class="badge badge-grey">no</div>
                                @else
                                    <div class="badge badge-black">yes</div>
                                @endif
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <div class="question-row">
                            @if($datas->count())
                            <nav class="pagination-wrap">
                            {!! $datas->appends(request()->except('page'))->render() !!}
                            </nav>
                            @endif
                        <a href="/mypage_question/create" class="btn-white">1:1 문의하기</a>
                    </div>


                </div>
                <!--// mypage contents -->


            </div>
        </div>

    </main>


@endsection
