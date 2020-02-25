<?php
// url : /admin_project/1
?>
@extends('admin.layouts.app')
@section('content')
<script src="{{ asset('/js/adminProject.js') }}"></script>
    <div class="contents-wrap">
        <!-- contesnts-inner -->
        <div class="contents-inner">

            <!-- headline -->
            <div class="headline">
                <h2>여부상태</h2>
                <div class="devider mt-4"></div>
            </div>
            <!-- //headline -->

            <form action="{{ route('admin_project.store') }}" method="POST" id="adminProjectForm">
                @csrf
            @if($data->condition == 1)
            <div class="project-status">
                <div class="col-status">
                    <select class="status-select" name="condition" id="select_status">
                        <option value="1">대기중</option>
                        <option value="2">진행중</option>
                        <option value="3">반려</option>
                    </select>
                </div>
                <div class="col-textarea">
                    <textarea class="textarea w-100 mh-120px" spellcheck="false" name="reason" id="reason" placeholder="사유를 입력하세요"></textarea>
                </div>
                <input type="hidden" name="project_id" value="{{ $data->id }}">
                <div class="row text-right mt-20">
                    <button type="button" class="btn-black btn-m" onclick="conditionUpdate()">수정하기</button>
                </div>
            </div>
            </form>

            @elseif($data->condition == 2)
                <div class="portfolio-status">
                    <p class="portfolio-result">프로젝트가 진행중입니다.</p>
                    <p class="portfolio-data">30개 중 12개 펀딩 (30%)</p>
                </div>
            @elseif($data->condition == 4)
                <div class="portfolio-status">
                    <p class="portfolio-result">프로젝트가 실패했습니다.</p>
                    <p class="portfolio-data">30개 중 12개 펀딩 (30%)</p>
                </div>
            @endif
            <!-- headline -->
            <div class="headline mt-80">
                <h2>기본정보</h2>
                <div class="devider mt-4"></div>
            </div>
            <!-- //headline -->

            <div class="project-basic">
                <div class="project-basic-table">
                    <table class="table-info">
                        <colgroup>
                            <col width="140px">
                            <col>
                        </colgroup>
                        <thead></thead>
                        <tbody>
                        <tr>
                            <th class="text-right">카테고리</th>
                            <td>{{ $data->category->category_name }} > {{ $data->category_detail->category_name }}</td>
                        </tr>
                        <tr>
                            <th class="text-right">제목</th>
                            <td>
                                {{ $data->title }}
                                <button class="btn-white btn-s">바로가기</button>
                            </td>
                        </tr>
                        <tr>
                            <th class="text-right">디자이너명</th>
                            <td>{{ $data->introduction->designer_name }}</td>
                        </tr>
                        <tr>
                            <th class="text-right">프로젝트 시작일</th>
                            <td>{{ $data->start_date }}</td>
                        </tr>
                        <tr>
                            <th class="text-right">프로젝트 마감일</th>
                            <td>{{ $data->deadline }}</td>
                        </tr>
                        <tr>
                            <th class="text-right">상품배송 예상일</th>
                            <td>{{ $data->delivery_date }}</td>
                        </tr>
                        <tr>
                            <th class="text-right">지연예상기간</th>
                            <td>{{ $data->delay_date }}</td>
                        </tr>
                        <tr>
                            <th class="text-right">수량</th>
                            <td>{{ $data->success_count }}</td>
                        </tr>
                        <tr>
                            <th class="text-right">요약</th>
                            <td>{{ $data->summary }}</td>
                        </tr>
                        <tr>
                            <th class="text-right">옵션</th>
                            <td>
                                @foreach($data->options as $option)
                                    {{ $option->option_name }} - {{ number_format($option->price) }}원 <br>
                                @endforeach
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div class="project-basic-thumbnail">
                    <div class="box">
                        <p class="text-center">대표이미지</p>
                        <div class="box-image">
                            <img src="{{ asset('storage/'.$data->main_image->image_path) }}" alt="">
                        </div>
                    </div>
                </div>
            </div>

            <!-- headline -->
            <div class="headline mt-80">
                <h2>스토리텔링</h2>
                <div class="devider mt-4"></div>
            </div>
            <!-- //headline -->

            <div class="project-story">
                {!! $data->storytelling !!}
            </div>

            <!-- headline -->
            <div class="headline mt-80">
                <h2>상품정보</h2>
                <div class="devider mt-4"></div>
            </div>
            <!-- //headline -->

            <div class="project-product">
                <div class="row">
                    <h3 class="project-subtitle">사이즈</h3>

                    <table class="table-info">
                        <colgroup>
                            <col width="150px">
                            <col>
                        </colgroup>
                        <thead></thead>
                        <tbody>
                        @foreach($data->sizes as $size)
                        <tr>
                            <th class="text-center">{{ $size->size }}</th>
                            <td>
                                <ul class="list-size">
                                    @if($size->total_length)
                                        <li>총기장 {{ $size->total_length }}cm</li>
                                    @endif
                                    @if($size->shoulder)
                                        <li>어깨 {{ $size->shoulder }}cm</li>
                                    @endif
                                    @if($size->chest)
                                        <li>가슴 {{ $size->chest }}cm</li>
                                    @endif
                                    @if($size->arms_length)
                                        <li>팔길이 {{ $size->arms_length }}cm</li>
                                    @endif
                                    @if($size->sleeve)
                                        <li>소매단면 {{ $size->sleeve }}cm</li>
                                    @endif
                                    @if($size->armhole)
                                        <li>암홀 {{ $size->armhole }}cm</li>
                                    @endif
                                    @if($size->waist)
                                        <li>허리 {{ $size->waist }}cm</li>
                                    @endif
                                    @if($size->hem)
                                        <li>밑단 {{ $size->hem }}cm</li>
                                    @endif
                                    @if($size->crotch)
                                        <li>밑위 {{ $size->crotch }}cm</li>
                                    @endif
                                    @if($size->thigh)
                                        <li>허벅지단면 {{ $size->thigh }}cm</li>
                                    @endif
                                    @if($size->hip)
                                        <li>엉덩이단면 {{ $size->hip }}cm</li>
                                    @endif
                                    @if($size->string_length)
                                        <li>끈길이 {{ $size->string_length }}cm</li>
                                    @endif
                                    @if($size->horizontal)
                                        <li>가로 {{ $size->horizontal }}cm</li>
                                    @endif
                                    @if($size->vertical)
                                        <li>세로 {{ $size->vertical }}cm</li>
                                    @endif
                                    @if($size->forefoot)
                                        <li>앞굽 {{ $size->forefoot }}cm</li>
                                    @endif
                                    @if($size->heels)
                                        <li>뒷굽 {{ $size->heels }}cm</li>
                                    @endif
                                </ul>
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="row">
                    <h3 class="project-subtitle">원단</h3>
                    <ul class="list-fabric font-size-0">
                        <li>
                            <div class="fabric-name">
                                면(100%)
                            </div>
                            <div class="fabric-text">
                                대표적인 천연 섬유로 내구성과 흡수성이 좋고 세탁이 편리하여 모든 옷의 재료 섬유로 사용 가능하나 구김이 잘 생기고 형태 안정성이 부족한 단점을 지니고 있어 합성섬유와 혼방하는 경우가 많다.
                            </div>
                        </li>
                        <li>
                            <div class="fabric-name">
                                면(100%)
                            </div>
                            <div class="fabric-text">
                                대표적인 천연 섬유로 내구성과 흡수성이 좋고 세탁이 편리하여 모든 옷의 재료 섬유로 사용 가능하나 구김이 잘 생기고 형태 안정성이 부족한 단점을 지니고 있어 합성섬유와 혼방하는 경우가 많다.
                            </div>
                        </li>
                        <li>
                            <div class="fabric-name">
                                면(100%)
                            </div>
                            <div class="fabric-text">
                                대표적인 천연 섬유로 내구성과 흡수성이 좋고 세탁이 편리하여 모든 옷의 재료 섬유로 사용 가능하나 구김이 잘 생기고 형태 안정성이 부족한 단점을 지니고 있어 합성섬유와 혼방하는 경우가 많다.
                            </div>
                        </li>
                        <li>
                            <div class="fabric-name">
                                면(100%)
                            </div>
                            <div class="fabric-text">
                                대표적인 천연 섬유로 내구성과 흡수성이 좋고 세탁이 편리하여 모든 옷의 재료 섬유로 사용 가능하나 구김이 잘 생기고 형태 안정성이 부족한 단점을 지니고 있어 합성섬유와 혼방하는 경우가 많다.
                            </div>
                        </li>
                        <li>
                            <div class="fabric-name">
                                면(100%)
                            </div>
                            <div class="fabric-text">
                                대표적인 천연 섬유로 내구성과 흡수성이 좋고 세탁이 편리하여 모든 옷의 재료 섬유로 사용 가능하나 구김이 잘 생기고 형태 안정성이 부족한 단점을 지니고 있어 합성섬유와 혼방하는 경우가 많다.
                            </div>
                        </li>
                    </ul>
                    <table class="table-info mt-48">
                        <colgroup>
                            <col width="150px">
                            <col>
                        </colgroup>
                        <thead></thead>
                        <tbody>
                        <tr>
                            <th class="th-gray">디자이너 코멘트</th>
                            <td>{{ $data->comment }}</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div class="row">
                    <h3 class="project-subtitle">취급정보</h3>
                    <ul class="list-treat font-size-0">
                        <li>
                            <div class="treat-name">
                                물세탁
                            </div>
                            <div class="treat-text text-center">
                                <img src="../assets/image/img-iron-01.png" alt="">
                                물온도 95℃로 세탁<br>
                                세탁기/손세탁 가능<br>
                                세제종류 제한 없음<br>
                                삶을 수 있음
                                {{ $data->information-> }}
                            </div>
                        </li>
                        <li>
                            <div class="treat-name">
                                표백
                            </div>
                            <div class="treat-text text-center">
                                <img src="../assets/image/img-iron-01.png" alt="">
                                염소계 표백제로 표백
                            </div>
                        </li>
                        <li>
                            <div class="treat-name">
                                다림질
                            </div>
                            <div class="treat-text text-center">
                                <img src="../assets/image/img-iron-01.png" alt="">
                                180~210℃로 다림질
                            </div>
                        </li>
                        <li>
                            <div class="treat-name">
                                드라이클리닝
                            </div>
                            <div class="treat-text text-center">
                                <img src="../assets/image/img-iron-01.png" alt="">
                                드라이클리닝 가능<br>
                                클로로에틸렌,<br>
                                혹은 석유계 사용
                            </div>
                        </li>
                        <li>
                            <div class="treat-name">
                                건조
                            </div>
                            <div class="treat-text text-center">
                                <img src="../assets/image/img-iron-01.png" alt="">
                                햇빛에 건조<br>
                                옷걸이에 걸어 건조
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- headline -->
            <div class="headline mt-80">
                <h2>정산정보</h2>
                <div class="devider mt-4"></div>
            </div>
            <!-- //headline -->

            <div class="project-calc">
                <table class="table-info">
                    <colgroup>
                        <col width="160px">
                        <col>
                    </colgroup>
                    <thead></thead>
                    <tbody>
                    <tr>
                        <th class="text-right">사업자/개인구분</th>
                        <td>사업자</td>
                    </tr>
                    <tr>
                        <th class="text-right">사업자등록번호</th>
                        <td>000-00-000000</td>
                    </tr>
                    <tr>
                        <th class="text-right">사업자등록증</th>
                        <td><a class="link-download">다운로드</a></td>
                    </tr>
                    <tr>
                        <th class="text-right">통장사본</th>
                        <td><a class="link-download">다운로드</a></td>
                    </tr>
                    <tr>
                        <th class="text-right">이메일</th>
                        <td>vuejs@naver.com</td>
                    </tr>
                    <tr>
                        <th class="text-right">전화번호</th>
                        <td>01012345678</td>
                    </tr>
                    </tbody>
                </table>
            </div>

            <!-- headline -->
            <div class="headline mt-80">
                <h2>비고</h2>
                <div class="devider mt-4"></div>
            </div>
            <!-- //headline -->

            <div class="project-remark">
                <table class="table-data table-normal">
                    <colgroup>
                        <col width="160px">
                        <col width="120px">
                        <col>
                    </colgroup>
                    <thead>
                    <tr>
                        <th>작성일</th>
                        <th>작성자명</th>
                        <th>내용</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>2019-00-00 00:00</td>
                        <td>김칠득</td>
                        <td class="text-left">비고비고</td>
                    </tr>
                    <tr>
                        <td>2019-00-00 00:00</td>
                        <td>김칠득</td>
                        <td class="text-left">비고비고</td>
                    </tr>
                    <tr>
                        <td>2019-00-00 00:00</td>
                        <td>김칠득</td>
                        <td class="text-left">비고비고</td>
                    </tr>
                    <tr>
                        <td>2019-00-00 00:00</td>
                        <td>김칠득</td>
                        <td class="text-left">비고비고</td>
                    </tr>
                    </tbody>
                </table>
                <div class="row text-right mt-20">
                    <button class="btn-black btn-m w-120px">비고 작성하기</button>
                </div>
            </div>
        </div>
        <!-- //contesnts-inner -->
    </div>

@endsection
