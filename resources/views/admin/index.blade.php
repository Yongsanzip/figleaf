<?php
// url: /admin
?>
@extends('admin.layouts.app')
@section('content')
    <link rel="stylesheet" href="{{asset('/css/swiper.min.css')}}">

    <div class="contents-wrap">
        <!-- contesnts-inner -->
        <div class="contents-inner">

            <!-- headline -->
            <div class="headline">
                <h2>Home</h2>
                <p>{{ $now->format('Y년 m월 d일 H:i') }} 기준</p>
            </div>
            <!-- //headline -->

            <!-- dropdown -->
            <div class="dropdown-group">
                <div class="dropdown-header">
                    <h3>대기중인 프로젝트 수</h3>
                    <p>{{ count($project_1) }}개</p>
                    <div class="btn-drop"></div>
                </div>
                <div class="dropdown-contents">
                    <table class="table-data table-normal">
                        <thead>
                        <tr>
                            <th>제목</th>
                            <th>디자이너명</th>
                            <th>수량</th>
                            <th>시작일</th>
                            <th>종료일</th>
                        </tr>
                        </thead>
                        <tbody>
                        @if(count($project_1) > 0)
                        @foreach($project_1 as $project)
                        <tr>
                            <td>{{ $project->title }}</td>
                            <td>{{ $project->user->name }}</td>
                            <td>{{ $project->success_count }}</td>
                            <td>{{ $project->start_date ? $project->start_date->format('Y-m-d') : '-'}}</td>
                            <td>{{ $project->deadline ? $project->deadline->format('Y-m-d') : '-'}}</td>
                        </tr>
                        @endforeach
                            @else
                            <tr>
                                <td colspan="5">프로젝트가 존재하지 않습니다.</td>
                            </tr>
                        @endif
                        </tbody>
                    </table>
                    <a href="/admin_project?status=1" class="more">더보기</a>
                </div>
            </div>
            <!-- //dropdown -->

            <!-- dropdown -->
            <div class="dropdown-group">
                <div class="dropdown-header">
                    <h3>진행중인 프로젝트 수</h3>
                    <p>{{ count($project_2) }}개</p>
                    <div class="btn-drop"></div>
                </div>
                <div class="dropdown-contents">
                    <table class="table-data table-normal">
                        <thead>
                        <tr>
                            <th>제목</th>
                            <th>디자이너명</th>
                            <th>수량</th>
                            <th>시작일</th>
                            <th>종료일</th>
                        </tr>
                        </thead>
                        <tbody>
                        @if(count($project_2)>0)
                        @foreach($project_2 as $project)
                            <tr>
                                <td>{{ $project->title }}</td>
                                <td>{{ $project->user->name }}</td>
                                <td>{{ $project->success_count }}</td>
                                <td>{{ $project->start_date ? $project->start_date->format('Y-m-d') : '-'}}</td>
                                <td>{{ $project->deadline ? $project->deadline->format('Y-m-d') : '-'}}</td>
                            </tr>
                        @endforeach
                            @else
                            <tr>
                                <td colspan="5">존재하는 프로젝트가 없습니다.</td>
                            </tr>
                        @endif
                        </tbody>
                    </table>
                    <a href="/admin_project?status=2" class="more">더보기</a>
                </div>
            </div>
            <!-- //dropdown -->

            <!-- dropdown -->
            <div class="dropdown-group">
                <div class="dropdown-header">
                    <h3>오늘 하루 펀딩 참여 수</h3>
                    <p>{{ count($supports) }}개</p>
                    <div class="btn-drop"></div>
                </div>
                <div class="dropdown-contents">
                    <table class="table-data table-normal">
                        <thead>
                        <tr>
                            <th>제목</th>
                            <th>후원자명</th>
                            <th>후원자 이메일</th>
                            <th>후원금액</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($supports as $support)
                        <tr>
                            <td>{{ $support->project->title }}</td>
                            <td>{{ $support->user->name }}</td>
                            <td>{{ $support->user->email }}</td>
                            <td>{{ $support->total_amount }}원</td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <a href="/admin_support" class="more">더보기</a>
                </div>
            </div>
            <!-- //dropdown -->

            <!-- dropdown -->
            <div class="dropdown-group">
                <div class="dropdown-header">
                    <h3>오늘 가입한 유저 수</h3>
                    <p>{{ count($users) }}명</p>
                    <div class="btn-drop"></div>
                </div>
                <div class="dropdown-contents">
                    <table class="table-data table-normal">
                        <thead>
                        <tr>
                            <th>이메일</th>
                            <th>이름</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($users as $user)
                        <tr>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->name }}</td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <a href="/admin_information" class="more">더보기</a>
                </div>
            </div>
            <!-- //dropdown -->

            <!-- dropdown -->
            <div class="dropdown-group">
                <div class="dropdown-header">
                    <h3>오늘의 1:1 문의</h3>
                    <p>{{ count($questions) }}개</p>
                    <div class="btn-drop"></div>
                </div>
                <div class="dropdown-contents">
                    <table class="table-data table-normal">
                        <thead>
                        <tr>
                            <th>등록일</th>
                            <th>회원명</th>
                            <th>제목</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($questions as $question)
                        <tr>
                            <td>{{ $question->created_at->format('Y-m-d H:i:s') }}</td>
                            <td>{{ $question->title }}</td>
                            <td>{{ $question->content }}</td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <a href="/admin_question" class="more">더보기</a>
                </div>
            </div>
            <!-- //dropdown -->

            <!-- dropdown -->
            {{--<div class="dropdown-group">
                <div class="dropdown-header">
                    <h3>배송진행이 필요한 프로젝트 수</h3>
                    <p>32개</p>
                    <div class="btn-drop"></div>
                </div>
                <div class="dropdown-contents">
                    <table class="table-data table-normal">
                        <thead>
                        <tr>
                            <th>제목</th>
                            <th>디자이너명</th>
                            <th>수량</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>끝나지 않는 나의 비지니스</td>
                            <td>박초롱초롱빛나리</td>
                            <td>수량</td>
                        </tr>
                        <tr>
                            <td>끝나지 않는 나의 비지니스</td>
                            <td>박초롱초롱빛나리</td>
                            <td>수량</td>
                        </tr>
                        <tr>
                            <td>끝나지 않는 나의 비지니스</td>
                            <td>박초롱초롱빛나리</td>
                            <td>수량</td>
                        </tr>
                        <tr>
                            <td>끝나지 않는 나의 비지니스</td>
                            <td>박초롱초롱빛나리</td>
                            <td>수량</td>
                        </tr>
                        <tr>
                            <td>끝나지 않는 나의 비지니스</td>
                            <td>박초롱초롱빛나리</td>
                            <td>수량</td>
                        </tr>
                        </tbody>
                    </table>
                    <a href="" class="more">더보기</a>
                </div>
            </div>--}}
            <!-- //dropdown -->




        </div>
        <!-- //contesnts-inner -->
    </div>

@endsection
