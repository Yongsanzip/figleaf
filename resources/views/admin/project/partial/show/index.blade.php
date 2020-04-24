<?php
// url : /admin_project/1
?>
@extends('admin.layouts.app')
@section('content')
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
                    <select class="status-select" name="condition" id="select_status" onchange="selectStatus(this)">
                        <option value="1">대기중</option>
                        <option value="2">진행중</option>
                        <option value="3">반려</option>
                    </select>
                </div>
                <div class="col-textarea">
                    <textarea class="textarea w-100 mh-120px" spellcheck="false" name="reason" id="reason" placeholder="사유를 입력하세요" disabled></textarea>
                </div>
                <input type="hidden" name="project_id" id="project_id" value="{{ $data->id }}">
                <div class="row text-right mt-20">
                    <button type="button" class="btn-black btn-m" onclick="conditionUpdate()">수정하기</button>
                </div>
            </div>
            </form>

            @elseif($data->condition == 2)
                <div class="portfolio-status">
                    <p class="portfolio-result">프로젝트가 진행중입니다.</p>
                    <p class="portfolio-data">{{ $data->success_count }}개 중 {{ $supporter_count }}개 펀딩 ({{ ceil($supporter_count/$data->success_count*100) }}%)</p>
                </div>
            @elseif($data->condition == 3)
                <div class="portfolio-status">
                    <p>반려사유: {{ $data->reason }}</p>
                </div>
            @elseif($data->condition == 4)
                <div class="portfolio-status">
                    <p class="portfolio-result">프로젝트가 실패했습니다.</p>
                    <p class="portfolio-data">{{ $data->success_count }}개 중 {{ $supporter_count }}개 펀딩 ({{ ceil($supporter_count/$data->success_count*100) }}%)</p>
                </div>
            @elseif($data->condition == 5)
                <div class="portfolio-status">
                    <p class="portfolio-result">프로젝트가 성공했습니다.</p>
                    <p class="portfolio-data">{{ $data->success_count }}개 중 {{ $supporter_count }}개 펀딩 ({{ ceil($supporter_count/$data->success_count*100) }}%)</p>
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
                                @if($data->condition == 2 || $data->condition == 4 || $data->condition == 5)
                                <button type="button" class="btn-white btn-s" onclick="window.open('/project/{{ $data->id }}')">바로가기</button>
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <th class="text-right">디자이너명</th>
                            <td>{{ $data->introduction->designer_name }}</td>
                        </tr>
                        <tr>
                            <th class="text-right">프로젝트 시작일</th>
                            <td>{{ $data->start_date ? $data->start_date->format('Y-m-d') : '' }}</td>
                        </tr>
                        <tr>
                            <th class="text-right">프로젝트 마감일</th>
                            <td>{{ $data->deadline ? $data->deadline->format('Y-m-d') : ''}}</td>
                        </tr>
                        <tr>
                            <th class="text-right">상품배송 예상일</th>
                            <td>{{ $data->delivery_date ? $data->delivery_date->format('Y-m-d') : '' }}</td>
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
                        @foreach($data->fabrics as $fabric)
                        <li>
                            <div class="fabric-name">
                                {{ $fabric->material->name }}({{ $fabric->rate }}%)
                            </div>
                            <div class="fabric-text">
                                {{ $fabric->material->group->contents }}
                            </div>
                        </li>
                        @endforeach
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
                        @foreach($data->informations as $information)
                        <li>
                            <div class="treat-name">
                                @switch($information->tab_id)
                                    @case (1) 물세탁
                                    @break
                                    @case (2) 표백
                                    @break
                                    @case (3) 다림질
                                    @break
                                    @case (4) 드라이클리닝
                                    @break
                                    @case (5) 건조
                                    @break
                                @endswitch
                            </div>
                            <div class="treat-text text-center">
                                <img src="{{ asset($information->information_detail->img_path) }}">
                                {!! $information->information_detail->description_ko !!}
                            </div>
                        </li>
                        @endforeach
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
                        <td>{{ $data->account->condition == 1 ? '사업자' : '개인' }}</td>
                    </tr>
                    @if($data->account->condition == 1)
                    <tr>
                        <th class="text-right">사업자등록번호</th>
                        <td>{{ $data->account->company_number }}</td>
                    </tr>
                    <tr>
                        <th class="text-right">사업자등록증</th>
                        <td><a class="link-download" href="/admin_project/{{ $data->company_image->id }}/edit">다운로드</a></td>
                    </tr>
                    @endif
                    <tr>
                        <th class="text-right">통장사본</th>
                        <td><a class="link-download" href="/admin_project/{{ $data->bank_image->id }}/edit">다운로드</a></td>
                    </tr>
                    <tr>
                        <th class="text-right">이메일</th>
                        <td>{{ $data->account->email }}</td>
                    </tr>
                    <tr>
                        <th class="text-right">전화번호</th>
                        <td>{{ $data->account->phone }}</td>
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
                    @foreach($data->notes as $note)
                    <tr>
                        <td>{{ $note->created_at }}</td>
                        <td>{{ $note->user->name }}</td>
                        <td class="text-left">{{ $note->contents }}</td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
                <div class="row text-right mt-20">
                    <button type="button" class="btn-black btn-m w-120px" onclick="popup('/admin_note', '비고')">비고 작성하기</button>
                </div>
            </div>
        </div>
        <!-- //contesnts-inner -->
    </div>

@endsection
