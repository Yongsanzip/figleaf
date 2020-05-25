<?php
?>
@extends('client.layouts.app')
@section('content')
    <?php $page_type = 'project'?>
    <link rel="stylesheet" href="{{asset('/css/swiper.min.css')}}">

    <script src="{{asset('/js/projectView.js')}}"></script>

    <main class="container">
        <div class="inner">
            <div class="con-project-view">
                @include('client.project.partial.layouts.header')
                <!--// project detail -->

                <!-- project overview -->
                <div class="project-overview-wrap">
                    <ul class="overview-tab">
                        <li class="tab-on">project</li>
                        <li id="community_tab">community</li>
                    </ul>
                    <div class="overview-box overview-box-on">
                        <!-- designer profile -->
                        <div class="designer-headline">
                            <div class="designer-name">
                                {{ $data->introduction ? $data->introduction->designer_name : '-'}}
                            </div>
                            <div class="designer-type">
                                standard
                            </div>
                        </div>
                        <!--//designer profile -->

                        <!-- project overview-->
                        <div class="contents-wrap portfolio-overview">
                            <div class="contents-overview">
                            <img src="{{ $datas->portfolio_images ? asset('storage/'. $datas->portfolio_images->first()->image_path) :asset('images/common/img_no_image.jpg')}}" alt="">
                            <p>
                                @if( app()->getLocale() =='ko')
                                    {{ $datas->content_ko ? $data->content_ko : ''}}
                                @elseif(app()->getLocale() =='en')
                                    {{ $datas->content_en ? $data->content_en : ''}}
                                @elseif(app()->getLocale() =='cn')
                                    {{ $datas->content_cn ? $data->content_cn : ''}}
                                @else
                                    포트폴리오 내용이 존재하지 않습니다
                                @endif
                            </p>
                        </div>
                        <!--//project overview -->

                        <!-- designer history -->
                        <div class="contents-wrap history-list">
                            <div class="headline-wrap">
                                <h3 class="headline">history</h3>
                            </div>
                        @if($datas->histories())
                            @foreach( $datas->histories() as $history)
                                <!-- history item -->
                                    <div class="history-item">
                                        <h4 class="year">{{ $history->year }}</h4>
                                        <ul class="history">
                                            @if( app()->getLocale() =='ko')
                                                <li>{{ $history->history_ko }}</li>
                                            @elseif(app()->getLocale() =='en')
                                                <li>{{ $history->history_en }}</li>
                                            @elseif(app()->getLocale() =='cn')
                                                <li>{{ $history->history_cn }}</li>
                                            @else
                                                히스토리 내용이 존재하지 않습니다
                                            @endif
                                        </ul>
                                    </div>
                                    <!-- //history item -->
                                @endforeach
                            @endif
                        </div>
                        <!--//designer history -->

                        <!-- award history-->
                        <div class="contents-wrap history-list">
                            <div class="headline-wrap">
                                <h3 class="headline">award history</h3>
                            </div>
                        @if($datas->awards())
                            @foreach($datas->awards() as $awards)
                                <!-- history item -->
                                    <div class="history-item">
                                        <h4 class="year">{{ $awards->year }}</h4>
                                        <ul class="history">
                                            @if( app()->getLocale() =='ko')
                                                <li>{{ $awards->history_ko }}</li>
                                            @elseif(app()->getLocale() =='en')
                                                <li>{{ $awards->history_en }}</li>
                                            @elseif(app()->getLocale() =='cn')
                                                <li>{{ $awards->history_cn }}</li>
                                            @else
                                                히스토리 내용이 존재하지 않습니다
                                            @endif
                                        </ul>
                                    </div>
                                    <!-- //history item -->
                                @endforeach
                            @endif
                        </div>
                        <!--//award history -->

                        <!-- association-->
                        <div class="contents-wrap association">
                            <div class="headline-wrap">
                                <h3 class="headline">association</h3>
                            </div>
                            <ul class="association-list">
                            @if($datas->association_activties())
                                @foreach($datas->association_activties() as $association)
                                    <!-- history item -->
                                        <li>
                                            <p class="year">{{$association->start_year}}~{{$association->end_year}}</p>
                                            @if( app()->getLocale() =='ko')
                                                <p class="text">{{ $association->association_ko }}</p>
                                            @elseif(app()->getLocale() =='en')
                                                <p class="text">{{ $association->association_en }}</p>
                                            @elseif(app()->getLocale() =='cn')
                                                <p class="text">{{ $association->association_cn }}</p>
                                            @else
                                                협회활동이 내용이 존재하지 않습니다
                                            @endif
                                        </li>
                                    @endforeach
                                @endif
                            </ul>
                        </div>
                        <!--//association -->

                        <!-- brand -->
                        <div class="contents-wrap brand">
                            <div class="headline-wrap">
                                <h3 class="headline">brand</h3>
                            </div>
                            <div class="contents-overview">
                                <img src="{{ $datas->brand_thumbnail_images ? asset('storage/'. $datas->brand_thumbnail_images->first()->image_path) :asset('images/common/img_no_image.jpg')}}" alt="">
                                @if( app()->getLocale() =='ko')
                                    {{ $datas->brand ? $datas->brand->contents_ko : ''}}
                                @elseif(app()->getLocale() =='en')
                                    {{ $datas->brand ? $datas->brand->contents_en : ''}}
                                @elseif(app()->getLocale() =='en')
                                    {{ $datas->brand ? $datas->brand->contents_cn : ''}}
                                @else
                                    브랜드 설명 존재하지 않습니다
                                @endif
                            </div>

                        </div>
                        <!--//brand -->

                        <!-- storytelling -->
                        <div class="contents-wrap storytelling">
                            <div class="headline-wrap">
                                <h3 class="headline">storytelling</h3>
                            </div>
                            <div class="contents-overview">
                                {!! $data->storytelling !!}
                            </div>

                        </div>
                        <!--//storytelling -->

                        <!-- product info-->
                        <div class="contents-wrap product-info">
                            <div class="headline-wrap">
                                <h3 class="headline">product info</h3>
                            </div>
                            <div class="product-info-list">
                                <!-- size -->
                                <div class="product-info-item">
                                    <h4 class="item-name">사이즈</h4>
                                    <div class="size-wrap">
                                        <div class="size-image">
                                            <img src="../images/common/img-size.png" alt="">
                                        </div>
                                        <ul class="size-list">
                                            @foreach($data->sizes as $size)
                                            <li>
                                                <p class="size-name">{{ $size->size }}</p>
                                                <p class="size-text">
                                                @if($size->total_length)
                                                    <span>총기장 {{ $size->total_length }}cm</span>
                                                @endif
                                                @if($size->shoulder)
                                                    <span>어깨 {{ $size->shoulder }}cm</span>
                                                @endif
                                                @if($size->chest)
                                                    <span>가슴 {{ $size->chest }}cm</span>
                                                @endif
                                                @if($size->arms_length)
                                                    <span>팔길이 {{ $size->arms_length }}cm</span>
                                                @endif
                                                @if($size->sleeve)
                                                    <span>소매단면 {{ $size->sleeve }}cm</span>
                                                @endif
                                                @if($size->armhole)
                                                    <span>암홀 {{ $size->armhole }}cm</span>
                                                @endif
                                                @if($size->waist)
                                                    <span>허리 {{ $size->waist }}cm</span>
                                                @endif
                                                @if($size->hem)
                                                    <span>밑단 {{ $size->hem }}cm</span>
                                                @endif
                                                @if($size->crotch)
                                                    <span>밑위 {{ $size->crotch }}cm</span>
                                                @endif
                                                @if($size->thigh)
                                                    <span>허벅지단면 {{ $size->thigh }}cm</span>
                                                @endif
                                                @if($size->hip)
                                                    <span>엉덩이단면 {{ $size->hip }}cm</span>
                                                @endif
                                                @if($size->string_length)
                                                    <span>끈길이 {{ $size->string_length }}cm</span>
                                                @endif
                                                @if($size->horizontal)
                                                    <span>가로 {{ $size->horizontal }}cm</span>
                                                @endif
                                                @if($size->vertical)
                                                    <span>세로 {{ $size->vertical }}cm</span>
                                                @endif
                                                @if($size->forefoot)
                                                    <span>앞굽 {{ $size->forefoot }}cm</span>
                                                @endif
                                                @if($size->heels)
                                                    <span>뒷굽 {{ $size->heels }}cm</span>
                                                    @endif
                                                </p>
                                            </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                                <!-- fabric -->
                                <div class="product-info-item">
                                    <h4 class="item-name">원단</h4>
                                    <div class="fabric-wrap">
                                        <ul class="fabric-list">
                                            <!-- fabric item -->
                                            @foreach($data->fabrics as $fabric)
                                                <li>
                                                    <div class="fabric-name">
                                                        {{ $fabric->material->name }}
                                                        <span>{{ $fabric->rate }}</span>
                                                    </div>
                                                    <div class="fabric-text">
                                                        {{ $fabric->material->group->contents }}
                                                    </div>
                                                </li>
                                            @endforeach
                                            <!--// fabric item-->
                                        </ul>
                                        <div class="designer-comment">
                                            <p class="comment-title">designer comment</p>
                                            <p class="comment-text">
                                                {{ $data->comment }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <!-- cleaning -->
                                <div class="product-info-item">
                                    <h4 class="item-name">취급정보</h4>
                                    <div class="cleaning-wrap">
                                        <ul class="cleaning-list">
                                            <!-- water -->
                                            @foreach($data->informations as $information)
                                            <li>
                                                <div class="cleaning-name">
                                                    {{ $information->information_name($information->tab_id) }}
                                                </div>
                                                <div>
                                                    <div class="cleaning-image">
                                                        <img src="{{ asset($information->information_detail->img_path) }}">
                                                    </div>
                                                    <ul class="cleaning-text">
                                                        <li>
                                                            {!! $information->information_detail->description_ko !!}
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                            @endforeach
                                            <!-- 표백 -->
                                        </ul>
                                    </div>
                                </div>
                                <!-- delivery -->
                                <div class="product-info-item">
                                    <h4 class="item-name">배송일정</h4>
                                    <div class="delivery-wrap">
                                        <ul class="delivery-list">
                                            <li>
                                                <div class="delivery-image">
                                                    <img src="../images/common/img-project-start.png" alt="">
                                                </div>
                                                <div class="delivery-info">
                                                    <p class="date">{{ $data->start_date ? $data->start_date->format('Y.m.d') : '' }}</p>
                                                    <p class="text">프로젝트 시작</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="delivery-image">
                                                    <img src="../images/common/img-project-end.png" alt="">
                                                </div>
                                                <div class="delivery-info">
                                                    <p class="date">{{ $data->deadline? $data->deadline->format('Y.m.d') : ''}}</p>
                                                    <p class="text">프로젝트 종료</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="delivery-image">
                                                    <img src="../images/common/img-project-make.png" alt="">
                                                </div>
                                                <div class="delivery-info">
                                                    <p class="date">{{ $data->account_date ? $data->account_date->format('Y.m.d') :'' }}</p>
                                                    <p class="text">제작 시작(예상)</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="delivery-image">
                                                    <img src="../images/common/img-project-delivery.png" alt="">
                                                </div>
                                                <div class="delivery-info">
                                                    <p class="date">{{ $data->delivery_date ? $data->delivery_date->format('Y.m.d') : ''}}</p>
                                                    <p class="text">상품 배송(예상)</p>
                                                </div>
                                            </li>
                                        </ul>
                                        <p class="delivery-notice">
                                            제작 상황에 따라 <span>최대 {{ $data->delay_date }}일 까지 지연</span>될 수 있으며, 지연일자를 넘길 경우
                                            <span>정책 약관에 따라 전액 환불</span> 받으실 수 있습니다.
                                        </p>
                                    </div>
                                </div>
                                <!-- contact -->
                                @if($data->introduction)
                                <div class="product-info-item">
                                    <h4 class="item-name">contact point</h4>
                                    <div class="contact-wrap">
                                        <ul class="contact-list">
                                            <li class="contact-item">
                                                <p class="contact-name">이메일</p>
                                                <p class="contact-value">
                                                    @if($data->introduction->email_hidden == 0)
                                                        {{ $data->introduction->email }}
                                                    @else
                                                        비공개
                                                    @endif
                                                </p>
                                            </li>
                                            <li class="contact-item">
                                                <p class="contact-name">전화번호</p>
                                                <p class="contact-value">
                                                    @if($data->introduction->phone_hidden == 0)
                                                        {{ $data->introduction->phone }}
                                                    @else
                                                        비공개
                                                    @endif
                                                </p>
                                            </li>
                                            <li class="contact-item">
                                                <p class="contact-name">홈페이지</p>
                                                <p class="contact-value">
                                                    @if($data->introduction->homepage_hidden == 0)
                                                        <a href="">{{ $data->introduction->homepage }}</a>
                                                    @else
                                                        비공개
                                                    @endif
                                                </p>
                                            </li>
                                        </ul>
                                        <ul class="sns-list">
                                            @if($data->introduction->facebook_hidden == 0)
                                                <li class="sns-item">
                                                    <a href="{{ $data->introduction->facebook }}">페이스북</a>
                                                </li>
                                            @endif
                                            @if($data->introduction->twitter_hidden == 0)
                                                <li class="sns-item">
                                                    <a href="{{ $data->introduction->twitter }}">트위터</a>
                                                </li>
                                            @endif
                                            @if($data->introduction->instagram_hidden == 0)
                                                <li class="sns-item">
                                                    <a href="{{ $data->introduction->instagram }}">인스타그램</a>
                                                </li>
                                            @endif
                                        </ul>
                                    </div>

                                </div>
                                @endif
                            </div>

                        </div>
                        <!--//product info -->
                    </div>
                    <div class="overview-box">
                        <form action="{{ route('project_community.store') }}" method="POST" id="projectCommunityForm">
                        <div class="community-create">
                                @csrf
                                <textarea class="textarea required" name="contents" id="contents" data-title="내용" placeholder="내용을 입력해주세요"></textarea>
                            <input type="hidden" name="project_id" id="project_id" value="{{ $data->id }}">
                                <div class="btn-wrap">
                                    <button type="button" class="btn-black" data-title="내용" onclick="communitySubmit(this.parentElement.parentElement);">작성하기</button>
                                </div>
                        </div>
                    </form>
                        <div class="community-list">
                            <!-- community item -->
                            @foreach($communities as $community)
                            <div class="community-item">
                                <div class="cm-header">
                                    <p class="name">{{ $community->user->name }}</p>
                                    <span class="date">{{ substr($community->created_at,0,10) }}</span>
                                    @auth
                                        @if($community->user_id == auth()->user()->id)
                                            <div class="btn-wrap">
                                                <button class="btn-white updateBtn" type="button" onclick="fnEditCm(this);">수정하기</button>
                                                <button class="btn-white storeBtn" type="button" onclick="communityUpdate(this.parentElement.parentElement)" style="display: none">저장하기</button>
                                                <button class="btn-black delete" type="button" onclick="communityDelete(this)">삭제하기</button>
                                                <button class="btn-black cancel" type="button" onclick="fnCancelCm(this)">취소하기</button>
                                            </div>
                                        @endif
                                    @endauth
                                </div>
                                <input type="hidden" class="communityId" value="{{ $community->id }}">
                                <div class="cm-contents">
                                    <p class="text">
                                        {!! $community->contents !!}
                                    </p>
                                    <textarea class="textarea required" spellcheck="false">{{ $community->contents }}</textarea>
                                </div>
                            @endforeach
                            </div>
                            <!--// community item -->
                                <nav class="pagination-wrap">
                                    <ul class="pagination">
                                        @if($communities->count())
                                            <div class="text-center">
                                                {!! $communities->appends(request()->except('page'))->render() !!}
                                            </div>
                                        @endif
                                    </ul>
                                </nav>

                        </div>
                    </div>
                </div>
                <!--// project overview -->

            </div>
        </div>
        <div class="modal-overlay">
            <div class="project-modal">
                    <p class="modal-title">디자이너에게 문의하기</p>
                    <div class="row">
                        <p class="title">project</p>
                        <p class="project-name">{{$data->title}}</p>
                        <div class="project-category">
                            <span>{{ $data->category->category_name }}</span>
                            <span>{{ $data->category_detail->category_name}}</span>
                        </div>
                    </div>
                    <div class="row">
                        <p class="subtitle">project introduction</p>
                        <p class="designer-text">
                            {{ $data->summary }}
                        </p>
                    </div>
                    <div class="row">
                        <p class="subtitle">designer</p>
                        <p id="designer_name" class="owner-name">{{$data->user->name}}</p>
                        <textarea id="message_content" name="content" class="textarea" placeholder="문의 내용을 입력하세요" spellcheck="false"></textarea>
                    </div>
                    <div class="btn-wrap">
                        <button type="button" class="btn-black" onclick="fn_send_message('{{$data->id}}',fn_send_success_ajax)">메세지 전송하기</button>
                    </div>
                <button class="btn-close" onclick="fnCloseModal()">모달닫기</button>
            </div>
        </div>
    </main>
    <script type="text/javascript">
        var fn_send_success_ajax = function(e){
            if(e.code == 999){
                alert(e.msg);
                location.href='/login';
            } else {
                alert(e.msg);
                location.href='/mypage_message';
            }

        }
    </script>
@endsection
