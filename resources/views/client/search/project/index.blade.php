<?php
?>
@extends('client.layouts.app')
@section('content')
    <main class="container">


        <div class="inner">

            <!-- headline -->
            <div class="headline-wrap">
                <h2 class="headline">
                    ‘{{ $keyword }}’ 검색결과
                </h2>
            </div>
            <!-- //headline -->

            <p class="search-result-text">{{ count($datas) }} 개의 프로젝트가 있습니다.</p>

            <section class="con-search">
                <div class="card-list">
                    <!-- card * 20 -->
                    @foreach($datas as $data)
                    <div class="card project-card">
                        <div class="card-image">
                            <img src="{{asset('storage/'.$data->main_image->image_path)}}" alt="">
                        </div>
                        <div class="card-contents">
                            <div class="text-box">
                                <p class="card-title">{{ $data->title }}</p>
                                <p class="card-text">{{ $data->introduction->designer_name }}</p>
                            </div>

                            <div class="card-info">
                                <div class="rating">
                                    <div class="rating-bar" style="width: {{ ceil($data->supportCount($data->id)/$data->success_count*100) }}%"></div>
                                </div>
                                <div class="info-box-list">
                                    <div class="info-box amount">
                                        {{ $data->success_count - $data->supportCount($data->id) }}개 남음
                                    </div>
                                    <div class="info-box date">
                                        {{ ceil((strtotime($data->deadline) - strtotime("now"))/(60*60 *24)) > 0 ? ceil((strtotime($data->deadline) - strtotime("now"))/(60*60 *24)).'일 남음' : '마감' }}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- 성공할경우 뱃지 출력 -->
                        <a href="/project/{{ $data->id }}" class="link"></a>
                        @if($data->condition == 2)
                            <div class="badge badge-green">진행중</div>
                        @elseif($data->condition == 4)
                            <div class="badge badge-grey">실패</div>
                        @elseif($data->condition == 5)
                            <div class="badge badge-orange">성공</div>
                        @endif
                    </div>
                    @endforeach
                    <!-- //card -->
                    <div class="card project-card">
                        <div class="card-image">
                            <img src="{{asset('/images/dummy/img-dummy-01.png')}}" alt="">
                        </div>
                        <div class="card-contents">
                            <div class="text-box">
                                <p class="card-title">서울패션위크 참가 패션브랜드에서 선보이는 럭셔리하고 심플한 주얼리 악세사리 모음</p>
                                <p class="card-text"> 강주원 </p>
                            </div>

                            <div class="card-info">
                                <div class="rating">
                                    <div class="rating-bar" style="width: 80%">80</div>
                                </div>
                                <div class="info-box-list">
                                    <div class="info-box amount">
                                        180개 남음
                                    </div>
                                    <div class="info-box date">
                                        6일 남음
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

                        <a href="" class="link"></a>
                    </div>
                    <div class="card project-card">
                        <div class="card-image">
                            <img src="{{asset('/images/dummy/img-dummy-01.png')}}" alt="">
                        </div>
                        <div class="card-contents">
                            <div class="text-box">
                                <p class="card-title">서울패션위크 참가 패션브랜드에서 선보이는 럭셔리하고 심플한 주얼리 악세사리 모음</p>
                                <p class="card-text"> 강주원 </p>
                            </div>

                            <div class="card-info">
                                <div class="rating">
                                    <div class="rating-bar" style="width: 80%">80</div>
                                </div>
                                <div class="info-box-list">
                                    <div class="info-box amount">
                                        180개 남음
                                    </div>
                                    <div class="info-box date">
                                        6일 남음
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

                        <a href="" class="link"></a>
                    </div>
                    <div class="card project-card">
                        <div class="card-image">
                            <img src="{{asset('/images/dummy/img-dummy-01.png')}}" alt="">
                        </div>
                        <div class="card-contents">
                            <div class="text-box">
                                <p class="card-title">서울패션위크 참가 패션브랜드에서 선보이는 럭셔리하고 심플한 주얼리 악세사리 모음</p>
                                <p class="card-text"> 강주원 </p>
                            </div>

                            <div class="card-info">
                                <div class="rating">
                                    <div class="rating-bar" style="width: 80%">80</div>
                                </div>
                                <div class="info-box-list">
                                    <div class="info-box amount">
                                        180개 남음
                                    </div>
                                    <div class="info-box date">
                                        6일 남음
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

                        <a href="" class="link"></a>
                    </div>
                    <div class="card project-card">
                        <div class="card-image">
                            <img src="{{asset('/images/dummy/img-dummy-01.png')}}" alt="">
                        </div>
                        <div class="card-contents">
                            <div class="text-box">
                                <p class="card-title">서울패션위크 참가 패션브랜드에서 선보이는 럭셔리하고 심플한 주얼리 악세사리 모음</p>
                                <p class="card-text"> 강주원 </p>
                            </div>

                            <div class="card-info">
                                <div class="rating">
                                    <div class="rating-bar" style="width: 80%">80</div>
                                </div>
                                <div class="info-box-list">
                                    <div class="info-box amount">
                                        180개 남음
                                    </div>
                                    <div class="info-box date">
                                        6일 남음
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

                        <a href="" class="link"></a>
                    </div>
                    <div class="card project-card">
                        <div class="card-image">
                            <img src="{{asset('/images/dummy/img-dummy-01.png')}}" alt="">
                        </div>
                        <div class="card-contents">
                            <div class="text-box">
                                <p class="card-title">서울패션위크 참가 패션브랜드에서 선보이는 럭셔리하고 심플한 주얼리 악세사리 모음</p>
                                <p class="card-text"> 강주원 </p>
                            </div>

                            <div class="card-info">
                                <div class="rating">
                                    <div class="rating-bar" style="width: 80%">80</div>
                                </div>
                                <div class="info-box-list">
                                    <div class="info-box amount">
                                        180개 남음
                                    </div>
                                    <div class="info-box date">
                                        6일 남음
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

                        <a href="" class="link"></a>
                    </div>
                    <div class="card project-card">
                        <div class="card-image">
                            <img src="{{asset('/images/dummy/img-dummy-01.png')}}" alt="">
                        </div>
                        <div class="card-contents">
                            <div class="text-box">
                                <p class="card-title">서울패션위크 참가 패션브랜드에서 선보이는 럭셔리하고 심플한 주얼리 악세사리 모음</p>
                                <p class="card-text"> 강주원 </p>
                            </div>

                            <div class="card-info">
                                <div class="rating">
                                    <div class="rating-bar" style="width: 80%">80</div>
                                </div>
                                <div class="info-box-list">
                                    <div class="info-box amount">
                                        180개 남음
                                    </div>
                                    <div class="info-box date">
                                        6일 남음
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

                        <a href="" class="link"></a>
                    </div>
                    <div class="card project-card">
                        <div class="card-image">
                            <img src="{{asset('/images/dummy/img-dummy-01.png')}}" alt="">
                        </div>
                        <div class="card-contents">
                            <div class="text-box">
                                <p class="card-title">서울패션위크 참가 패션브랜드에서 선보이는 럭셔리하고 심플한 주얼리 악세사리 모음</p>
                                <p class="card-text"> 강주원 </p>
                            </div>

                            <div class="card-info">
                                <div class="rating">
                                    <div class="rating-bar" style="width: 80%">80</div>
                                </div>
                                <div class="info-box-list">
                                    <div class="info-box amount">
                                        180개 남음
                                    </div>
                                    <div class="info-box date">
                                        6일 남음
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

                        <a href="" class="link"></a>
                    </div>
                    <div class="card project-card">
                        <div class="card-image">
                            <img src="{{asset('/images/dummy/img-dummy-01.png')}}" alt="">
                        </div>
                        <div class="card-contents">
                            <div class="text-box">
                                <p class="card-title">서울패션위크 참가 패션브랜드에서 선보이는 럭셔리하고 심플한 주얼리 악세사리 모음</p>
                                <p class="card-text"> 강주원 </p>
                            </div>

                            <div class="card-info">
                                <div class="rating">
                                    <div class="rating-bar" style="width: 80%">80</div>
                                </div>
                                <div class="info-box-list">
                                    <div class="info-box amount">
                                        180개 남음
                                    </div>
                                    <div class="info-box date">
                                        6일 남음
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

                        <a href="" class="link"></a>
                    </div>
                </div>

                <div class="btn-wrap">
                    <div class="btn-more">View More Project</div>
                </div>
            </section>

        </div>



    </main>
@endsection
