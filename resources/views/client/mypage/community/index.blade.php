<?php
$tab='community';
?>

@extends('client.layouts.app')
@section('content')
    <link rel="stylesheet" href="{{asset('/css/swiper.min.css')}}">

    <main class="container">

        <div class="inner">
            <div class="con-mypage">
                <h2 class="title">my page</h2>

            @include('client.mypage.partial.navi')

                <!-- mypage contents -->
                <div class="mypage-contents">
                    <table class="community-table">
                        <colgroup>
                            <col width="200px">
                            <col width="200px">
                            <col width="">
                        </colgroup>
                        <thead>
                        @if(count($datas) > 0)
                        <tr>
                            <th style="text-align: center">등록일</th>
                            <th style="text-align: center">프로젝트명</th>
                            <th style="text-align: center">내용</th>
                        </tr>
                        @endif
                        </thead>
                        <tbody>
                        <!-- tr * 10 -->
                        @foreach($datas as $data)
                        <tr onclick="location.href='/project/{{ $data->project->id }}'">
                            <td>{{ $data->created_at->format('Y-m-d') }}</td>
                            <td>{{ $data->project->title }}</td>
                            <td>{!! $data->contents !!}</td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>

                    <nav class="pagination-wrap">
                        @if($datas->count())
                            {!! $datas->appends(request()->except('page'))->render() !!}
                        @endif
                    </nav>
                </div>
                <!--// mypage contents -->


            </div>
        </div>

    </main>


@endsection

