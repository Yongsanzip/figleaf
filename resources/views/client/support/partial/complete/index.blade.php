<?php
?>
@extends('client.layouts.app')
@section('content')
    <link rel="stylesheet" href="{{asset('/css/swiper.min.css')}}">

    <main class="container">
        <div class="inner">
            <div class="con-project-view">
                <h2 class="project-headline">
                    {{$support->project->title}}
                </h2>
                <!-- project info-->
                <div class="project-info">
                    <h3 class="project-title">
                        {{$support->project->summary}}
                    </h3>
                    <div class="project-category">
                        <span>{{$support->project->category->category_name}}</span>
                        <span>{{$support->project->category_detail->category_name}}</span>
                    </div>
                    <p class="project-outline">
                        {!! $support->project->storytelling !!}
                    </p>
                </div>
                <!-- //project info -->

                <!-- project detail -->
                <div class="project-detail">

                    <div class="col">
                        <div class="project-cover">
                            <img src="{{$support->project->main_image ? asset('storage/'.$support->project->main_image->image_path) : '../images/common/img_no_image.jpg'}}" alt="">
                        </div>
                    </div>
                    <div class="col">
                        <!-- status -->
                        <div class="project-status">
                            <div class="status-item">
                                <p class="status-name">모인 금액</p>
                                <p class="status-value">
                                    {{$total_cost}}
                                    <span>원</span>
                                </p>
                                <p class="status-percentage">
                                    77%
                                </p>
                            </div>
                            <div class="status-item">
                                <p class="status-name">남은 시간</p>
                                <p class="status-value">
                                    {{ $date = ceil((strtotime($support->project->deadline) - strtotime("now"))/(60*60 *24)) }}
                                    <span>일</span>
                                </p>
                                <p class="status-date">
                                    {{$support->project->deadline->format('Y년 m월 d일')}} 마감
                                </p>
                            </div>
                            <div class="status-item">
                                <p class="status-name">후원자 수</p>
                                <p class="status-value">
                                    {{$supporter_count}}
                                    <span>명</span>
                                </p>
                            </div>
                        </div>
                        <!-- //status -->

                        <!-- owner -->
                        <div class="project-owner">
                            <p class="owner-caption">디자이너</p>
                            <p class="owner-name ko">
                                {{$support->project->user->name}}
                            </p>
                            <p class="owner-text">
                                이것을 만천하의 우리의 전인 굳세게 속에 할지라도 위하여서. 소리다.이것은 투명하되 꽃 그들은 것이다. 동산에는 따뜻한 뛰노는 때문이다. 얼마나 따뜻한 보배를 아름답고 모래뿐일 가지에 뛰노는 지혜는 약동하다. 피어나는 것이 이것을 밥을 피가 영원히 힘있다. 청춘이 품으며, 낙원을 이상은 인간의 날카로우나 아니한 운다. 넣는 그림자는 인생에 우리는 앞이 피다. 열락의 바이며, 있을 끓는 이것이다. 따뜻한 없는 황금시대를 못하다 피는 청춘을 주며, 가진 것이다. 바이며, 것은 기관과 투명하되 얼마나 가진 뿐이다.
                            </p>
                            <a href="{{route('designer.show',['id'=>$support->project->user->id])}}" class="btn-green">포트폴리오로 이동</a>
                        </div>
                        <!-- //owner -->

                        <!-- product -->
                        <div class="project-product">
                            <div class="info-item">
                                <p class="info-name">상품명</p>
                                <p class="info-value name">활동하기 좋은 면 슬립</p>
                            </div>
                            <div class="info-item">
                                <p class="info-name">상품가</p>
                                <p class="info-value price">
                                    17,500
                                    <span>원</span>
                                </p>
                            </div>
                            <div class="info-item">
                                <ul class="option-list confirm">
                                    @if(count($support->support_options)>0)
                                    @foreach($support->support_options as $support_option)
                                        <!-- option item -->
                                            <li class="option-item">
                                                <div class="option-value">
                                                    <span class="option-name">{{$support_option->option->option_name}}</span>
                                                    <input class="option-amount" min="1" type="number" value="1">
                                                    <span class="option-price">{{$support_option->option->price * $support_option->amount}}원</span>
                                                </div>
                                            </li>
                                    @endforeach
                                    @endif
                                </ul>
                            </div>
                        </div>
                        <!-- //product -->
                    </div>
                </div>
                <!--// project detail -->

                <!-- sponsor form -->
                <div class="sponsor-form">
                    <div class="col">
                        <div class="sponsor-item">
                            <h3 class="title">후원자 정보</h3>
                            <div class="sponsor-box">
                                <div class="row">
                                    <p class="option-name">후원자명</p>
                                    <p class="option-value">{{$support->user->name}}</p>
                                </div>
                                <div class="row">
                                    <p class="option-name">전화번호</p>
                                    <p class="option-value">{{$support->user->cellphone}}</p>
                                </div>
                                <div class="row">
                                    <p class="option-name">이메일</p>
                                    <p class="option-value">{{$support->user->email}}</p>
                                </div>
                            </div>
                        </div>
                        <div class="sponsor-item">
                            <h3 class="title">배송지 정보</h3>
                            <div class="sponsor-box">
                                <div class="row">
                                    <p class="option-name">받는 분</p>
                                    <p class="option-value">{{$support->receiver}}</p>
                                </div>
                                <div class="row">
                                    <p class="option-name">전화번호</p>
                                    <p class="option-value">{{$support->receiver_phone}}</p>
                                </div>
                                <div class="row">
                                    <p class="option-name">주소</p>
                                    <div class="address-form">
                                        <p class="option-value">{{$support->zipcode}}</p>
                                        <p class="option-value">{{$support->address .' '. $support->address_detail}}</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <p class="option-name">배송시 요구사항</p>
                                    <p class="option-value">{{$support->requirement}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <?/*<div class="sponsor-item">
                            <h3 class="title">결제 정보</h3>
                            <div class="sponsor-box">
                                <div class="row point">
                                    <p class="option-name">적립금 사용</p>
                                    <p class="option-value">8000</p>
                                    <span class="unit">포인트</span>
                                    <span class="has-point">보유 적립금 : 8000 포인트</span>
                                </div>
                                <div class="row">
                                    <p class="option-name">결제수단</p>
                                    <p class="option-value">신용카드</p>
                                </div>
                            </div>
                        </div>*/?>

                        <div class="sponsor-item">
                            <h3 class="title">환불계좌 정보</h3>
                            <div class="sponsor-box">
                                <div class="row">
                                    <p class="option-name">은행명</p>
                                    <p class="option-value">{{$support->user->bank->bank_name}}</p>
                                </div>
                                <div class="row">
                                    <p class="option-name">예금주명</p>
                                    <p class="option-value">{{$support->user->bank_account_holder}}</p>
                                </div>
                                <div class="row">
                                    <p class="option-name">계좌번호</p>
                                    <p class="option-value">{{$support->user->bank_account_number}}</p>
                                </div>
                            </div>
                        </div>
                        <div class="sponsor-total">
                            <div class="total">
                                <p class="total-caption">후원금액</p>
                                <p class="total-price">{{$support->total_amount}}</p>
                            </div>
                            <div class="btn-wrap">
                                <a href="{{route('project.show',['id'=>$support->project->id])}}" class="btn-black">프로젝트 페이지로 이동</a>
                                <a href="{{route('mypage_information.index')}}" class="btn-white">마이페이지로 이동</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- //sponsor form-->

            </div>
        </div>
    </main>


@endsection
