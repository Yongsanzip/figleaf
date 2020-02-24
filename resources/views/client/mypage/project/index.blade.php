<?php
$tab = 'project';
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
                    <div class="project-btn-wrap">
                        <a href="" class="btn-black">새 프로젝트 등록</a>
                    </div>
                    <div class="project-notice">
                        <h2 class="notice-title">project</h2>
                        <ul class="notice-list">
                            <li>프로젝트 등록 장점 섹션(쉽다, 성공 시만 수수료, 샘플만 있으면 된다)</li>
                            <li>우리가 이걸 만든 이유</li>
                            <li>프로젝트 성공 사례(몇 건이 진행됐고, 몇벌의 옷이 만들어졌고, 몇명의 후원자 등)</li>
                            <li>프로젝트 오픈 프로세스</li>
                            <li>만들어 봐라 유도 문구 및 버튼 섹션(프로젝트 시작하기 버튼)</li>
                            <li>기본정보, 브랜드 & 디자이너, 작품 컨셉 (스토리), 작품 소개, 배송 , 결제 카테고리 구성</li>
                            <li>2-2 하위 어느 섹션에 있든 프리뷰 가능(작업 중인 프로젝트의 썸네일과 상품 상세페이지 미리보기)</li>
                            <li>각 단계 완료 하였을 경우 체크 형태(http://naver.me/FNEzov3i)</li>
                            <li>등록 프로세스의 핵심은 최대한 쉽게 할 수 있는 걸 중점에 둠</li>
                            <li>다른 펀딩들과는 다르게 목표금액, 날짜, 펀딩방식 등 조금이라도 어렵고 낯선 것들을 최대한 뒤로 미룸</li>
                        </ul>
                    </div>
                    <div class="project-list">
                        <!-- card -->
                        @foreach($datas as $data)
                        <div class="project-card my-card">
                            <div class="card">
                                @if($data->condition == 1 || $data->condition == 3)
                                <div class="card-image" onclick="location.href='/project/create?id={{ $data->id }}'" style="cursor: pointer">
                                @else
                                <div class="card-image" onclick="location.href='/'" style="cursor: pointer">
                                @endif
                                    <img src="{{ asset('storage/'.$data->main_image->image_path) }}" alt="">
                                </div>
                                <div class="card-contents">
                                    <div class="project-info">
                                        <p class="project-title">{{ $data->title }}</p>
                                    </div>
                                    <div class="project-date">
                                        {{ $data->start_date }} ~ {{ $data->deadline }}
                                    </div>
                                </div>
                                <!-- 프로젝트 상태에 따른 뱃지 -->
                                @if($data->condition == 1)
                                    <div class="badge badge-green">진행중</div>
                                @elseif($data->condition == 4)
                                    <div class="badge badge-grey">실패</div>
                                @elseif($data->condition == 5)
                                    <div class="badge badge-orange">성공</div>
                                @endif
                            </div>
                            @if($data->condition == 3)
                            <a href="" class="btn-white">반려사유 확인하기</a>
                            @endif
                        </div>
                        @endforeach
                        <!--// card -->
                        <div class="project-card my-card">
                            <div class="card">
                                <div class="card-image">
                                    <img src="../images/dummy/img-dummy-02.png" alt="">
                                </div>
                                <div class="card-contents">
                                    <div class="project-info">
                                        <p class="project-title">서울패션위크 럭셔리 주얼리</p>
                                    </div>
                                    <div class="project-date">
                                        2019.09.17 ~ 2019.10.17
                                    </div>
                                </div>
                                <!-- 프로젝트 상태에 따른 뱃지 -->
                                <!-- <div class="badge badge-green">진행중</div> -->
                                <div class="badge badge-grey">실패</div>
                                <!-- <div class="badge badge-orange">성공</div> -->
                            </div>
                            <a href="" class="btn-white">반려사유 확인하기</a>
                        </div>
                        <div class="project-card my-card">
                            <div class="card">
                                <div class="card-image">
                                    <img src="../images/dummy/img-dummy-02.png" alt="">
                                </div>
                                <div class="card-contents">
                                    <div class="project-info">
                                        <p class="project-title">서울패션위크 참가 패션브랜드에서 선보이는 가나다라 마바사 아자차 럭셔리 주얼리</p>
                                    </div>
                                    <div class="project-date">
                                        2019.09.17 ~ 2019.10.17
                                    </div>
                                </div>
                                <!-- 프로젝트 상태에 따른 뱃지 -->
                                <!-- <div class="badge badge-green">진행중</div> -->
                                <div class="badge badge-grey">실패</div>
                                <!-- <div class="badge badge-orange">성공</div> -->
                            </div>
                            <a href="" class="btn-white">반려사유 확인하기</a>
                        </div>

                        <div class="project-card my-card">
                            <div class="card">
                                <div class="card-image">
                                    <img src="../images/dummy/img-dummy-02.png" alt="">
                                </div>
                                <div class="card-contents">
                                    <div class="project-info">
                                        <p class="project-title">서울패션위크 참가 패션브랜드에서 선보이는 가나다라 마바사 아자차 럭셔리 주얼리</p>
                                    </div>
                                    <div class="project-date">
                                        2019.09.17 ~ 2019.10.17
                                    </div>
                                </div>
                                <!-- 프로젝트 상태에 따른 뱃지 -->
                                <!-- <div class="badge badge-green">진행중</div> -->
                                <div class="badge badge-grey">실패</div>
                                <!-- <div class="badge badge-orange">성공</div> -->
                            </div>
                            <a href="" class="btn-white">반려사유 확인하기</a>
                        </div>
                    </div>


                </div>
                <!--// mypage contents -->


            </div>
        </div>

    </main>



@endsection
