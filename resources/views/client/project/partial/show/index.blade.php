<?php
?>
@extends('client.layouts.app')
@section('content')
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
                                {{ $data->introduction->designer_name }}
                            </div>
                            <div class="designer-type">
                                standard
                            </div>
                        </div>
                        <!--//designer profile -->

                        <!-- project overview-->
                        <div class="contents-wrap portfolio-overview">
                            <img src="{{ $data->portfolio_images ? asset('storage/'. $data->portfolio_images->first()->image_path) :asset('images/common/img_no_image.jpg')}}" alt="">
                            <p>
                                @if( app()->getLocale() =='ko')
                                    {{ $data->content_ko ? $data->content_ko : ''}}
                                @elseif(app()->getLocale() =='en')
                                    {{ $data->content_en ? $data->content_en : ''}}
                                @elseif(app()->getLocale() =='cn')
                                    {{ $data->content_cn ? $data->content_cn : ''}}
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
                        @if($data->histories)
                            @foreach( $data->histories() as $history)
                                <!-- history item -->
                                    <div class="history-item">
                                        <h4 class="year">{{ $history->year }}</h4>
                                        <ul class="history">
                                            @if( app()->getLocale() =='ko')
                                                <li>{{ $history->history_cn }}</li>
                                            @elseif(app()->getLocale() =='en')
                                                <li>{{ $history->history_cn }}</li>
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
                        @if($data->awards)
                            @foreach($data->awards() as $awards)
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
                            @if($data->association_activties)
                                @foreach($data->association_activties() as $association)
                                    <!-- history item -->
                                        <li>
                                            <p class="year">{{$association->start_year}}~{{$association->end_year}}</p>
                                            @if( app()->getLocale() =='ko')
                                                <p>{{ $association->association_ko }}</p>
                                            @elseif(app()->getLocale() =='en')
                                                <p>{{ $association->association_en }}</p>
                                            @elseif(app()->getLocale() =='cn')
                                                <p>{{ $association->association_cn }}</p>
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
                                <img src="{{ $data->brand_thumbnail_images ? asset('storage/'. $data->brand_thumbnail_images->first()->image_path) :asset('images/common/img_no_image.jpg')}}" alt="">
                                @if( app()->getLocale() =='ko')
                                    {{ $data->brand ? $data->brand->contents_ko : ''}}
                                @elseif(app()->getLocale() =='en')
                                    {{ $data->brand ? $data->brand->contents_en : ''}}
                                @elseif(app()->getLocale() =='en')
                                    {{ $data->brand ? $data->brand->contents_cn : ''}}
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
                                                    <p class="date">{{ $data->deadline->format('Y.m.d') }}</p>
                                                    <p class="text">프로젝트 종료</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="delivery-image">
                                                    <img src="../images/common/img-project-make.png" alt="">
                                                </div>
                                                <div class="delivery-info">
                                                    <p class="date">{{ $data->account_date->format('Y.m.d') }}</p>
                                                    <p class="text">제작 시작(예상)</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="delivery-image">
                                                    <img src="../images/common/img-project-delivery.png" alt="">
                                                </div>
                                                <div class="delivery-info">
                                                    <p class="date">{{ $data->delivery_date->format('Y.m.d') }}</p>
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
                <form>
                    <p class="modal-title">디자이너에게 문의하기</p>
                    <div class="row">
                        <p class="title">project</p>
                        <p class="project-name">가볍고 활동하기 좋은 면 슬립</p>
                        <div class="project-category">
                            <span>women's apparel</span>
                            <span>top</span>
                        </div>
                    </div>
                    <div class="row">
                        <p class="subtitle">project introduction</p>
                        <p class="designer-text">
                            이것을 만천하의 우리의 전인 굳세게 속에 할지라도 위하여서. 소리다.이것은 투명하되 꽃 그들은 것이다. 동산에는 따뜻한 뛰노는 때문이다. 얼마나 따뜻한 보배를 아름답고 모래뿐일 가지에 뛰노는 지혜는 약동하다. 피어나는 것이 이것을 밥을 피가 영원히 힘있다. 청춘이 품으며, 낙원을 이상은 인간의 날카로우나 아니한 운다. 넣는 그림자는 인생에 우리는 앞이 피다. 열락의 바이며, 있을 끓는 이것이다. 따뜻한 없는 황금시대를 못하다 피는 청춘을 주며, 가진 것이다. 바이며, 것은 기관과 투명하되 얼마나 가진 뿐이다.
                        </p>
                    </div>
                    <div class="row">
                        <p class="subtitle">designer</p>
                        <p class="owner-name">김해우<span>haewoo kim</span></p>
                        <textarea class="textarea" placeholder="문의 내용을 입력하세요" spellcheck="false"></textarea>
                    </div>
                    <div class="btn-wrap">
                        <button class="btn-black">메세지 전송하기</button>
                    </div>
                </form>
                <button class="btn-close" onclick="fnCloseModal()">모달닫기</button>
            </div>
        </div>
    </main>


    <?
        /*<form id="SendPayForm_id" name="" method="POST" >
        <!-- 필수 -->
        <br/><b>***** 필 수 *****</b>
        <div style="border:2px #dddddd double;padding:10px;background-color:#f3f3f3;">
            <br/><input type="hidden" name="version" value="1.0" >

            <br/><b>mid</b> :
            <br/><input type="hidden" name="mid" value="<?php echo $mid ?>" >

            <br/><b>goodname</b> :
            <br/><input type="hidden" name="goodname" value="테스트" >

            <br/><b>oid</b> :
            <br/><input type="hidden" name="oid" value="<?php echo $orderNumber ?>" >

            <br/><b>price</b> :
            <br/><input type="hidden"  name="price" value="<?php echo $price ?>" >

            <br/><b>currency</b> :
            <br/>[WON|USD]
            <br/><input type="hidden"  name="currency" value="WON" >

            <br/><b>buyername</b> :
            <br/><input type="hidden"  name="buyername" value="홍길동" >

            <br/><b>buyertel</b> :
            <br/><input type="hidden"  name="buyertel" value="010-1234-5678" >

            <br/><b>buyeremail</b> :
            <br/><input type="hidden"  name="buyeremail" value="test@inicis.com" >

            <!-- <br/><b>timestamp</b> : -->
            <input type="hidden"  style="width:100%;" name="timestamp" value="<?php echo $timestamp ?>" >
            <br/>

            <!-- <br/><b>signature</b> : -->
            <input type="hidden" style="width:100%;" name="signature" value="<?php echo $sign ?>" >
            <br/><b>returnUrl</b> :
            <br/><input type="hidden"  name="returnUrl" value="<?php echo $siteDomain ?>/INIStdPayReturn.php" >

            <input type="hidden"  name="mKey" value="<?php echo $mKey ?>" >
        </div>

        <br/><br/>
        <b>***** 기본 옵션 *****</b>
        <div style="border:2px #dddddd double;padding:10px;background-color:#f3f3f3;">
            <br/><input type="hidden" style="width:100%;" name="gopaymethod" value="" >
            <b>offerPeriod</b> : 제공기간
            <br/>ex)20150101-20150331, [Y2:년단위결제, M2:월단위결제, yyyyMMdd-yyyyMMdd : 시작일-종료일]
            <br/><input type="hidden"  name="offerPeriod" value="20160101-20161231" >
            <br/>
            <br/><b>acceptmethod</b> :
            <br/>ex)  billauth(card) , billauth(hpp)
            <br/><input type="hidden"  id="acceptmethod" name="acceptmethod" value="billauth(card)" >
            <br/>
            <b>결제일 알림 메세지</b> : 결제일 알림 메세지
            <br/><input type="hidden"  id="billPrint_msg" name="billPrint_msg" value="고객님의 매월 결제일은 24일 입니다." >
        </div>

        <br/><br/>
        <b>***** 표시 옵션 *****</b>
        <div style="border:2px #dddddd double;padding:10px;background-color:#f3f3f3;">
            <br/><b>languageView</b> : 초기 표시 언어
            <br/>[ko|en] (default:ko)
            <br/><input type="hidden"  name="languageView" value="" >
            <br/>
            <br/><b>charset</b> : 리턴 인코딩
            <br/>[UTF-8|EUC-KR] (default:UTF-8)
            <br/><input type="hidden"  name="charset" value="" >
            <br/>
            <br/><b>payViewType</b> : 결제창 표시방법
            <br/>[overlay] (default:overlay)
            <br/><input type="hidden"  name="payViewType" value="" >
            <br/>
            <br/><b>closeUrl</b> : payViewType='overlay','popup'시 취소버튼 클릭시 창닥기 처리 URL(가맹점에 맞게 설정)
            <br/>close.jsp 샘플사용(생략가능, 미설정시 사용자에 의해 취소 버튼 클릭시 인증결과 페이지로 취소 결과를 보냅니다.)
            <br/><input type="hidden"  name="closeUrl" value="<?php echo $siteDomain ?>/close.php" >
            <br/>
            <br/><b>popupUrl</b> : payViewType='popup'시 팝업을 띄울수 있도록 처리해주는 URL(가맹점에 맞게 설정)
            <br/>popup.jsp 샘플사용(생략가능,payViewType='popup'으로 사용시에는 반드시 설정)
            <br/><input  type="hidden" name="popupUrl" value="<?php echo $siteDomain ?>/popup.php" >

        </div>

        <br/><br/>
        <b>***** 추가 옵션 *****</b>
        <div style="border:2px #dddddd double;padding:10px;background-color:#f3f3f3;">
            <br/><b>merchantData</b> : 가맹점 관리데이터(2000byte)
            <br/>인증결과 리턴시 함께 전달됨
            <br/><input  type="hidden"  name="merchantData" value="" >
        </div>
    </form>*/
    ?>
@endsection
