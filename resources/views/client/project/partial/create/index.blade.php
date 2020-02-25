<?php
// 프로젝트 만들기
?>
@extends('client.layouts.app')
<script src="../js/common.js"></script>
<script src="../js/project.js"></script>
<script src="../js/projectAction.js"></script>
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script type="text/javascript" src="../se2/js/service/HuskyEZCreator.js" charset="utf-8"></script>
@section('content')
    <link rel="stylesheet" href="{{asset('/css/swiper.min.css')}}">
    <main class="container">
        <div class="header-sub">
            <div class="inner">
                <div class="prev">
                    <a href="/mypage_project">마이페이지</a>
                </div>
                <h1 class="logo"><a href="/">피그리프</a></h1>
            </div>
        </div>
        <div class="inner">
            <div class="con-project-create">
                <h2 class="project-headline">
                    Project
                </h2>
                <!-- headline -->
                <div class="headline-wrap">
                    <h2 class="headline">프로젝트 만들기/수정하기</h2>
                </div>
                <div class="project-btn-wrap">
                    <a href="" class="btn-white">미리보기</a>
                    <button type="button" class="btn-black" id="store_btn">검토요청하기</button>
                </div>
                <!-- //headline -->

                <ul class="tab-list">
                    <li class="{{ $data ? ($data->progress == 100 ? 'fill' : '') : '' }} tab-on" id="summary"><span>개요</span></li>
                    <li class="{{ $data ? ($data->progress == 100 ? 'fill' : '') : '' }}" id="product_information"><span>상품정보</span></li>
                    <li class="{{ $data ? ($data->progress == 100 ? 'fill' : '') : '' }}" id="story_telling"><span>스토리텔링</span></li>
                    <li class="{{ $data ? ($data->progress == 100 ? 'fill' : '') : '' }}" id="project_date"><span>프로젝트 일정</span></li>
                    <li class="{{ $data ? ($data->progress == 100 ? 'fill' : '') : '' }}" id="introduction"><span>디자이너/브랜드 소개</span></li>
                    <li class="{{ $data ? ($data->progress == 100 ? 'fill' : '') : '' }}" id="account"><span>정산정보</span></li>
                </ul>

                <!-- tab contents -->
                <div class="contents-wrap">
                        <!-- 01 개요 -->
                    <form action="{{route('project.store')}}" id="projectForm1" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" class="projectId" name="project_id" value="{{ $data ? $data->id : '' }}">
                        <input type="hidden" name="project_1" value="project1">
                        <div class="tab-contents-box edit-on">
                            <!-- 01-A 프로젝트 제목 -->
                            <div class="input-item">
                                <h3 class="title">프로젝트 제목</h3>
                                <input type="text" class="input-field" name="project_title" id="project_title" value="{{ $data ? $data->title : '' }}" placeholder="30자 이내로 입력해주세요">
                            </div>
                            <!-- 01-B 프로젝트 카테고리 -->
                            <div class="input-item">
                                <h3 class="title">프로젝트 카테고리</h3>
                                <div>
                                    <select class="select" name="first_category" id="first_category">
                                        <option value="0" selected disabled>- 1차 카테고리 -</option>
                                        @foreach($main_categories as $main_category)
                                        <option value="{{ $main_category->id }}" {{ $data ? ($main_category->id == $data->category_id ? 'selected' : '') : '' }}>{{ $main_category->category_name }}</option>
                                        @endforeach
                                    </select>
                                    <span class="arrow">></span>
                                    <select class="select" name="second_category" id="second_category">
                                        <option value="0" selected disabled>- 2차 카테고리 -</option>

                                    </select>
                                    <input type="hidden" id="project_category2_id" value="{{ $data ? $data->category2_id : '' }}">
                                </div>
                            </div>
                            <!-- 01-C 프로젝트 개요 -->
                            <div class="input-item">
                                <h3 class="title">프로젝트 개요</h3>
                                <input type="text" class="input-field" name="project_summary" id="project_summary" value="{{ $data ? $data->summary : '' }}" placeholder="최소 10자 ~ 최대 50자">
                            </div>
                            <!-- 01-D 대표이미지 -->
                            <div class="input-item">
                                <h3 class="title">대표이미지(썸네일)</h3>
                                <p class="text-caption">최소 280*360px의 jpg, jpeg, png파일(10MB 미만)</p>
                                <label class="upload-file">
                                    <input type="file" onchange="fnUploadFile(this)" name="main_file" id="main_file" accept="image/jpeg, image/jpg, image/png">
                                    <input type="hidden" id="file_check" value="{{ $data ? ($data->main_image ? $data->main_image->first()->origin_name : '') : '' }}">
                                    <div class="file-button">파일선택</div>
                                    <p class="file-name">{{ $data ? ($data->main_image ? $data->main_image->first()->origin_name : '선택한 파일 없음') : '선택한 파일 없음' }}</p>
                                </label>
                            </div>
                            <!-- 01-D 성공갯수 -->
                            <div class="input-item">
                                <h3 class="title">성공 갯수</h3>
                                <input type="text" class="input-field" name="success_count" id="success_count" value="{{ $data ? $data->success_count : '' }}" placeholder="최소 10개 ~ 최대 30개">
                            </div>
                        </div>
                    </form>
                        <!-- 02 상품정보 -->
                    <form action="{{route('project.store')}}" id="projectForm2" method="POST" enctype="multipart/form-data">
                        @csrf
                    <input type="hidden" class="projectId" name="project_id" value="{{ $data ? $data->id : '' }}">
                        <input type="hidden" name="project_2" value="project_2">
                        <div class="tab-contents-box">
                            <!-- 02-A 옵션  -->
                            <div class="drop-box">
                                <div class="drop-header">옵션</div>
                                <div class="drop-item">
                                    <div class="option-list">
                                        @if(isset($data) && $data->option_exist($data->id))
                                            @foreach($data->options as $key=>$option)
                                            <div class="option-item">
                                                <div class="option-num">{{ $key+1 }}</div>
                                                <label class="option-field">
                                                    <p>옵션명</p>
                                                    <input type="text" class="input-field option_name" name="option_name[]" value="{{ $option->option_name }}" placeholder="30자 이내">
                                                </label>
                                                <label class="option-field price">
                                                    <p>가격</p>
                                                    <input type="text" class="input-field option_price" name="option_price[]" value="{{ $option->price }}" placeholder="30자 이내">
                                                </label>
                                                @if($key > 0)
                                                <button type="button" class="btn-white" value="{{ $option->id }}" onclick="fnRemoveOption(this)">삭제</button>
                                                @endif
                                            </div>
                                                <input type="hidden" name="option_id[]" value="{{ $option->id }}">
                                            @endforeach
                                        @else
                                            <div class="option-item">
                                                <div class="option-num">1</div>
                                                <label class="option-field">
                                                    <p>옵션명</p>
                                                    <input type="text" class="input-field option_name" name="option_name[]" value="" placeholder="30자 이내">
                                                </label>
                                                <label class="option-field price">
                                                    <p>가격</p>
                                                    <input type="text" class="input-field option_price" name="option_price[]" placeholder="30자 이내">
                                                </label>
                                            </div>
                                            <input type="hidden" name="option_id[]" value="">
                                        @endif
                                        <!-- script add items -->
                                    </div>
                                    <input type="hidden" name="delete_option_id" id="delete_option_id">
                                    <div class="btn-wrap">
                                        <button type="button" class="btn-black" onclick="fnAddOption()">옵션 추가하기</button>
                                    </div>
                                </div>

                            </div>
                            <!-- 02-B 사이즈 -->
                            <div class="drop-box">
                                <div class="drop-header">사이즈</div>
                                <div class="drop-item">
                                    <div class="size-category">
                                        <p class="text-caption">- 카테고리 -</p>
                                        <select class="select" name="size_category" id="size_category">
                                            <option value="0" selected disabled>- 1차 카테고리 -</option>
                                            @foreach($size_categories as $size_category)
                                                <option value="{{ $size_category->id }}" {{ $data ? ($size_category->id === $data->size_category_id ? 'selected' : '') : '' }}>{{ $size_category->category_name_ko }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="size-table-wrap">
                                        <table class="size-table">
                                            <colgroup>
                                                <col>
                                                <col>
                                                <col>
                                                <col>
                                                <col>

                                                <col>
                                                <col>
                                                <col>
                                                <col>
                                                <col>

                                                <col>
                                                <col>
                                                <col>
                                                <col>
                                                <col>

                                                <col>
                                                <col>
                                            </colgroup>
                                            <thead>
                                            <tr>
                                                <th>사이즈</th>
                                                <th>총기장</th>
                                                <th>어깨</th>
                                                <th>가슴</th>
                                                <th>팔길이</th>

                                                <th>소매단면</th>
                                                <th>암홀</th>
                                                <th>허리</th>
                                                <th>밑단</th>
                                                <th>밑위</th>

                                                <th>엉덩이단면</th>
                                                <th>허벅지단면</th>
                                                <th>끈길이</th>
                                                <th>가로</th>
                                                <th>세로</th>

                                                <th>앞굽</th>
                                                <th>뒷굽</th>
                                            </tr>
                                            </thead>
                                            <tbody class="size-list">
                                            @if(isset($data) && $data->size_exist($data->id))
                                                @foreach($data->sizes as $key=>$size)
                                                    <input type="hidden" name="size_id[]" value="{{ $size->id }}">
                                                <tr>
                                                    <!-- 사이즈 -->
                                                    <td>
                                                        <input type="text" class="sizeCount" name="size[]" id="size" value="{{ $size->size }}">
                                                    </td>
                                                    <!-- 총기장 -->
                                                    <td>
                                                        <input type="text" name="total_length[]" value="{{ $size->total_length }}">
                                                    </td>
                                                    <!-- 어깨 -->
                                                    <td>
                                                        <input type="text" name="shoulder[]" value="{{ $size->shoulder }}">
                                                    </td>
                                                    <!-- 가슴 -->
                                                    <td>
                                                        <input type="text" name="chest[]" value="{{ $size->chest }}">
                                                    </td>
                                                    <!-- 팔길이 -->
                                                    <td>
                                                        <input type="text" name="arms_length[]" value="{{ $size->arms_length }}">
                                                    </td>

                                                    <!-- 소매단면 -->
                                                    <td>
                                                        <input type="text" name="sleeve[]" value="{{ $size->sleeve }}">
                                                    </td>
                                                    <!-- 암홀 -->
                                                    <td>
                                                        <input type="text" name="armhole[]" value="{{ $size->armhole }}">
                                                    </td>
                                                    <!-- 허리 -->
                                                    <td>
                                                        <input type="text" name="waist[]" value="{{ $size->waist }}">
                                                    </td>
                                                    <!-- 밑단 -->
                                                    <td>
                                                        <input type="text" name="hem[]" value="{{ $size->hem }}">
                                                    </td>
                                                    <!-- 밑위 -->
                                                    <td>
                                                        <input type="text" name="crotch[]" value="{{ $size->crotch }}">
                                                    </td>

                                                    <!-- 엉덩이단면 -->
                                                    <td>
                                                        <input type="text" name="hip[]" value="{{ $size->hip }}">
                                                    </td>
                                                    <!-- 허벅지단면 -->
                                                    <td>
                                                        <input type="text" name="thigh[]" value="{{ $size->thigh }}">
                                                    </td>
                                                    <!-- 끈길이 -->
                                                    <td>
                                                        <input type="text" name="string_length[]" value="{{ $size->string_length }}">
                                                    </td>
                                                    <!-- 가로 -->
                                                    <td>
                                                        <input type="text" name="horizontal[]" value="{{ $size->horizontal }}">
                                                    </td>
                                                    <!-- 세로 -->
                                                    <td>
                                                        <input type="text" name="vertical[]" value="{{ $size->vertical }}">
                                                    </td>

                                                    <!-- 앞굽 -->
                                                    <td>
                                                        <input type="text" name="forefoot[]" value="{{ $size->forefoot }}">
                                                    </td>
                                                    <!-- 뒷굽 -->
                                                    <td>
                                                        <input type="text" name="heels[]" value="{{ $size->heels }}">
                                                    </td>

                                                    @if($key > 0)
                                                    <td class="row-btn">
                                                        <button type="button" class="btn-black" value="{{ $size->id }}" onclick="fnRemoveSize(this)"></button>
                                                    </td>
                                                    @endif
                                                    <!-- 버튼 -->
                                                    <!-- <td class="row-btn"> -->
                                                    <!-- 123 -->
                                                    <!-- </td> -->
                                                </tr>
                                                @endforeach
                                            @else

                                                <input type="hidden" name="size_id[]" value="">
                                                <tr>
                                                    <!-- 사이즈 -->
                                                    <td>
                                                        <input type="text" class="sizeCount" name="size[]" id="size">
                                                    </td>
                                                    <!-- 총기장 -->
                                                    <td>
                                                        <input type="text" name="total_length[]">
                                                    </td>
                                                    <!-- 어깨 -->
                                                    <td>
                                                        <input type="text" name="shoulder[]">
                                                    </td>
                                                    <!-- 가슴 -->
                                                    <td>
                                                        <input type="text" name="chest[]">
                                                    </td>
                                                    <!-- 팔길이 -->
                                                    <td>
                                                        <input type="text" name="arms_length[]">
                                                    </td>

                                                    <!-- 소매단면 -->
                                                    <td>
                                                        <input type="text" name="sleeve[]">
                                                    </td>
                                                    <!-- 암홀 -->
                                                    <td>
                                                        <input type="text" name="armhole[]">
                                                    </td>
                                                    <!-- 허리 -->
                                                    <td>
                                                        <input type="text" name="waist[]">
                                                    </td>
                                                    <!-- 밑단 -->
                                                    <td>
                                                        <input type="text" name="hem[]">
                                                    </td>
                                                    <!-- 밑위 -->
                                                    <td>
                                                        <input type="text" name="crotch[]">
                                                    </td>

                                                    <!-- 엉덩이단면 -->
                                                    <td>
                                                        <input type="text" name="hip[]">
                                                    </td>
                                                    <!-- 허벅지단면 -->
                                                    <td>
                                                        <input type="text" name="thigh[]">
                                                    </td>
                                                    <!-- 끈길이 -->
                                                    <td>
                                                        <input type="text" name="string_length[]">
                                                    </td>
                                                    <!-- 가로 -->
                                                    <td>
                                                        <input type="text" name="horizontal[]">
                                                    </td>
                                                    <!-- 세로 -->
                                                    <td>
                                                        <input type="text" name="vertical[]">
                                                    </td>

                                                    <!-- 앞굽 -->
                                                    <td>
                                                        <input type="text" name="forefoot[]">
                                                    </td>
                                                    <!-- 뒷굽 -->
                                                    <td>
                                                        <input type="text" name="heels[]">
                                                    </td>
                                                    <!-- 버튼 -->
                                                    <!-- <td class="row-btn"> -->
                                                    <!-- 123 -->
                                                    <!-- </td> -->
                                                </tr>
                                            @endif
                                            <!-- script add item -->
                                            </tbody>
                                        </table>
                                        <input type="hidden" name="delete_size_id" id="delete_size_id">
                                        <div class="btn-wrap">
                                            <button type="button" class="btn-black" onclick="fnAddSize()">사이즈 추가하기</button>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!-- 02-C 원단 -->
                            <div class="drop-box">
                                <div class="drop-header">원단</div>
                                <div class="drop-item">
                                    <div class="fabric-list-wrap">
                                        @if(isset($data) && $data->fabric_exist($data->id))
                                            @foreach($data->fabrics as $key=>$fabric)
                                            <div class="fabric-list">
                                                @if($key == 0)
                                                <div class="fabric-title">
                                                    <div>재질명</div>
                                                    <div>비율</div>
                                                </div>
                                                @endif
                                                <div class="fabric-item">
                                                    <div class="fabric-name">
                                                        <input type="text" class="input-field fabric" name="fabric[]" id="material_name0" onclick="popup_material(0)" value="{{ $fabric->material->name }}" readonly>
                                                        <input type="hidden" name="material_id[]" id="material_id0" value="{{ $fabric->material_id }}">
                                                    </div>
                                                    <div class="fabric-ratio">
                                                        <input type="number" max="100" min="0" class="input-field fabric_ratio" name="fabric_ratio[]" value="{{ $fabric->rate }}">
                                                    </div>
                                                    <input type="hidden" name="fabric_id[]" value="{{ $fabric ? $fabric->id : '' }}">
                                                    @if($key > 0)
                                                    <button class="btn-white" type="button" value="{{ $fabric->id }}" onclick="fnRemoveFabric(this)">삭제</button>
                                                    @endif
                                                </div>
                                            </div>
                                            @endforeach
                                        @else
                                            <div class="fabric-list">
                                                <div class="fabric-title">
                                                    <div>재질명</div>
                                                    <div>비율</div>
                                                </div>
                                                <div class="fabric-item">
                                                    <div class="fabric-name">
                                                        <input type="text" class="input-field fabric" name="fabric[]" id="material_name0" onclick="popup_material(0)" readonly>
                                                        <input type="hidden" name="material_id[]" id="material_id0">
                                                    </div>
                                                    <div class="fabric-ratio">
                                                        <input type="number" max="100" min="0" class="input-field fabric_ratio" name="fabric_ratio[]">
                                                    </div>
                                                    <input type="hidden" name="fabric_id[]" value="0">
                                                </div>
                                            </div>
                                        @endif
                                            <!-- script add item -->
                                            <input type="hidden" name="delete_fabric_id" id="delete_fabric_id">
                                        <button class="btn-black" type="button" onclick="fnAddFabric()">재질추가</button>
                                    </div>
                                    <div class="designer-comment-wrap">
                                        <p class="subtitle">디자이너 코멘트</p>
                                        <textarea class="textarea" name="comment" placeholder="디자이너 코멘트를 입력해주세요">{{ $data ? $data->comment : '' }}</textarea>
                                    </div>
                                </div>
                            </div>
                            <!-- 02-D 취급정보 -->
                            <div class="drop-box">
                                <div class="drop-header">취급정보</div>
                                <div class="drop-item">
                                    <ul class="handling-tab">
                                        @foreach($information_tab as $tab)
                                            <li class="{{ $tab->id == 1 ? 'handling-on' : '' }}">{{ $tab->name_ko }}</li>
                                        @endforeach
                                    </ul>
                                    <div class="handling-contents-wrap">
                                        <!-- 02-D-A 물세탁 -->
                                        <div class="handling-contents handling-con-on">
                                            @foreach($information_list_water as $key => $list)
                                            <label class="handling-item water-0{{$key+1}}">
                                                <div class="item-image"></div>
                                                {{ $water = $data ? $data->informations->where('tab_id', $list->tab_id)->first() : '' }}
                                                <input type="radio" class="information_water" name="information_water"
                                                       value="{{ $list->id }}" {{ $water ? ($list->id === $water->detail_id ? 'checked' : '') : '' }}>
                                                <input type="hidden" name="information_water_id"
                                                       value="{{ $data ? ($water ? $water->id : '') : '' }}">
                                                <input type="hidden" name="water_tab_id" value="{{ $list->tab_id }}">
                                                <ul class="item-caption">
                                                    <li>{!! $list->description_ko !!}</li>
                                                </ul>
                                                <div class="shape"></div>
                                            </label>
                                            @endforeach
                                        </div>
                                        <!-- 02-D-B 표백 -->
                                        <div class="handling-contents">
                                            @foreach($information_list_bleach as $key => $list)
                                            <label class="handling-item bleach-0{{ $key+1 }}">
                                                <div class="item-image"></div>
                                                {{ $bleach = $data ? $data->informations->where('tab_id', $list->tab_id)->first() : '' }}
                                                <input type="radio" class="information_bleach" name="information_bleach" id="information_bleach"
                                                       value="{{ $list->id }}" {{ $bleach ? ($list->id === $bleach->detail_id ? 'checked' : '') : '' }}>
                                                <input type="hidden" name="information_bleach_id"
                                                       value="{{ $data ? ($bleach ? $bleach->id : '') : '' }}">
                                                <input type="hidden" name="bleach_tab_id" value="{{ $list->tab_id }}">
                                                <ul class="item-caption">
                                                    <li>{!! $list->description_ko !!}</li>
                                                </ul>
                                                <div class="shape"></div>
                                            </label>
                                            @endforeach
                                        </div>
                                        <!-- 02-D-C 다림질 -->
                                        <div class="handling-contents">
                                            @foreach($information_list_iron as $key => $list)
                                            <label class="handling-item iron-0{{ $key+1 }}">
                                                <div class="item-image"></div>
                                                {{ $iron = $data ? $data->informations->where('tab_id', $list->tab_id)->first() : '' }}
                                                <input type="radio" class="information_iron" name="information_iron" id="information_iron"
                                                       value="{{ $list->id }}" {{ $iron ? ($list->id === $iron->detail_id ? 'checked' : '') : '' }}>
                                                <input type="hidden" name="information_iron_id"
                                                       value="{{ $data ? ($iron ? $iron->id : '') : '' }}">
                                                <input type="hidden" name="iron_tab_id" value="{{ $list->tab_id }}">
                                                <ul class="item-caption">
                                                    <li>{!! $list->description_ko !!}</li>
                                                </ul>
                                                <div class="shape"></div>
                                            </label>
                                            @endforeach
                                        </div>
                                        <!-- 02-D-D 드라이클리닝 -->
                                        <div class="handling-contents">
                                            @foreach($information_list_drycleaning as $key => $list)
                                            <label class="handling-item drycleaning-0{{ $key+1 }}">
                                                <div class="item-image"></div>
                                                {{ $drycleaning = $data ? $data->informations->where('tab_id', $list->tab_id)->first() : '' }}
                                                <input type="radio" class="information_drycleaning" name="information_drycleaning" id="information_drycleaning"
                                                       value="{{ $list->id }}" {{ $drycleaning ? ($list->id === $drycleaning->detail_id ? 'checked' : '') : '' }}>
                                                <input type="hidden" name="information_drycleaning_id"
                                                       value="{{ $data ? ($drycleaning ? $drycleaning->id : '') : '' }}">
                                                <input type="hidden" name="drycleaning_tab_id" value="{{ $list->tab_id }}">
                                                <ul class="item-caption">
                                                    <li>{!! $list->description_ko !!}</li>
                                                </ul>
                                                <div class="shape"></div>
                                            </label>
                                            @endforeach
                                        </div>
                                        <!-- 02-D-E 건조 -->
                                        <div class="handling-contents">
                                            @foreach($information_list_dry as $key => $list)
                                            <label class="handling-item dry-0{{ $key+1 }}">
                                                <div class="item-image"></div>
                                                {{ $dry = $data ? $data->informations->where('tab_id', $list->tab_id)->first() : '' }}
                                                <input type="radio" class="information_dry" name="information_dry" id="information_dry" value="{{ $list->id }}" {{ $dry ? ($list->id === $dry->detail_id ? 'checked' : '') : '' }}>
                                                <input type="hidden" name="information_dry_id"
                                                       value="{{ $data ? ($dry ? $dry->id : '') : '' }}">
                                                <input type="hidden" name="dry_tab_id" value="{{ $list->tab_id }}">
                                                <ul class="item-caption">
                                                    <li>{!! $list->description_ko !!}</li>
                                                </ul>
                                                <div class="shape"></div>
                                            </label>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                        <!-- 03 스토리텔링 -->
                    <form action="{{route('project.store')}}" id="projectForm3" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" class="projectId" name="project_id" value="{{ $data ? $data->id : '' }}">
                        <input type="hidden" name="project_3" value="project3">
                        <div class="tab-contents-box" id="editor">
                            <div class="storytelling-wrap">
                                <div class="notice"><span id="popup_guide">가이드를 확인</span>하시고 작성해주세요</div>
                                <div class="storytelling">
                                    <textarea name="ir1" id="ir1" rows="10" cols="100" style="width: 100%; height: 500px">{!! $data ? $data->storytelling : '' !!}</textarea>
                                </div>
                            </div>
                        </div>
                    </form>
                        <!-- 04 프로젝트 일정 -->
                    <form action="{{route('project.store')}}" id="projectForm4" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" class="projectId" name="project_id" value="{{ $data ? $data->id : '' }}">
                        <input type="hidden" name="project_4" value="project4">
                        <div class="tab-contents-box">
                            <div class="schedule-wrap">
                                <div class="schedule">
                                    <span>프로젝트 마감일</span>은
                                    <input type="text" class="input-field datepicker" name="deadline" id="deadline" onchange="dateChange()" value="{{ $data ? $data->deadline : '' }}" readonly>
                                    이며,

                                </div>
                                <div class="schedule">
                                    이에 따라 <span>프로젝트 정산일</span>은 영업일 7일 뒤인
                                    <input type="text" class="input-field" name="account_date" id="account_date" value="{{ $data ? $data->account_date : '' }}" readonly>이고,
                                </div>
                                <div class="schedule">
                                    프로젝트 마감일 후
                                    <input type="text" class="input-field datepicker" name="delivery_date" id="delivery_date" value="{{ $data ? $data->delivery_date : '' }}" readonly>
                                    에 배송을 진행하되,
                                </div>
                                <div class="schedule">
                                    제작 상황에 따라 최대
                                    <select class="select" name="delay_date">
                                        <option selected disabled>- 지연일자 -</option>
                                        <option value="3" {{ $data ? ($data->delay_date == 3 ? 'selected' : '') : ''}}>3일</option>
                                        <option value="5" {{ $data ? ($data->delay_date == 5 ? 'selected' : '') : ''}}>5일</option>
                                        <option value="7" {{ $data ? ($data->delay_date == 7 ? 'selected' : '') : ''}}>7일</option>
                                        <option value="15" {{ $data ? ($data->delay_date == 15 ? 'selected' : '') : ''}}>15일</option>
                                        <option value="30" {{ $data ? ($data->delay_date == 30 ? 'selected' : '') : ''}}>30일</option>
                                    </select>
                                    까지 지연될 수 있고,
                                </div>
                                <div class="schedule">
                                    지연 일자를 넘길 경우
                                    <span>정책약관</span>에
                                    따라 전액 환불 될 수 있음에
                                    <label>
                                        <span>동의합니다.</span>
                                        <input type="checkbox" name="agree" id="agree" value="Y" {{ $data ? ($data->agree == 'Y' ? 'checked' : '') : '' }}>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </form>
                    <form action="{{route('project.store')}}" id="projectForm5" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" class="projectId" name="project_id" value="{{ $data ? $data->id : '' }}">
                        <input type="hidden" name="project_5" value="project5">
                        <!-- 05 디자이너 브랜드 소개 -->
                        <div class="tab-contents-box">
                            <div class="introduction-wrap">
                                <div class="introduction-item">
                                    <span class="item-name">디자이너명</span>
                                    <input type="text" class="input-field" name="designer_name" id="designer_name" placeholder="디자이너명을 입력하세요"
                                           value="{{ $data ? ($data->introduction ? $data->introduction->designer_name : auth()->user()->name) : auth()->user()->name }}">
                                </div>
                                <div class="introduction-item">
                                    <span class="item-name">브랜드명</span>
                                    <input type="text" class="input-field" name="brand_name" id="brand_name" placeholder="브랜드명을 입력하세요"
                                           value="{{ $data ? ($data->introduction ? $data->introduction->brand_name : $portfolio->brand->name_ko) : $portfolio->brand->name_ko }}">
                                </div>
                                <div class="introduction-item">
                                    <span class="item-name">이메일</span>
                                    <input type="email" class="input-field" name="email" id="email" placeholder="이메일을 입력하세요"
                                           value="{{ $data ? ($data->introduction ? $data->introduction->email : $portfolio->email) : $portfolio->email }}">
                                    <label class="checkbox-wrap">
                                        {{ $portfolio_email_hidden = $portfolio->email_hidden == 1 ? 'checked' : '' }}
                                        <input type="checkbox" name="email_hidden"
                                               value="{{ $data ? ($data->introduction ? $data->introduction->email_hidden : $portfolio->email_hidden) : $portfolio->email_hidden }}"
                                            {{ $data ? ($data->introduction ? ($data->introduction->email_hidden == 1 ? 'checked' : '') : $portfolio_email_hidden) : ($portfolio_email_hidden) }}>
                                        <p>숨기기</p>
                                    </label>
                                </div>
                                <div class="introduction-item">
                                    <span class="item-name">전화번호</span>
                                    <input type="tel" class="input-field" name="phone" id="phone" placeholder="전화번호를 입력하세요"
                                           value="{{ $data ? ($data->introduction ? $data->introduction->phone : $portfolio->home_phone) : $portfolio->home_phone }}">
                                    <label class="checkbox-wrap">
                                        {{ $portfolio_phone_hidden = $portfolio->phone_hidden == 1 ? 'checked' : '' }}
                                        <input type="checkbox" name="phone_hidden"
                                               value="{{ $data ? ($data->introduction ? $data->introduction->phone_hidden : $portfolio->phone_hidden) : $portfolio->phone_hidden }}"
                                            {{ $data ? ($data->introduction ? ($data->introduction->phone_hidden == 1 ? 'checked' : '') : $portfolio_phone_hidden) : ($portfolio_phone_hidden) }}>
                                        <p>숨기기</p>
                                    </label>
                                </div>
                                <div class="introduction-item">
                                    <span class="item-name">페이스북</span>
                                    <input type="text" class="input-field" name="facebook" id="facebook" placeholder="페이스북 계정을 입력하세요"
                                           value="{{ $data ? ($data->introduction ? $data->introduction->facebook : $portfolio->facebook) : $portfolio->facebook }}">
                                    <label class="checkbox-wrap">
                                        {{ $portfolio_facebook_hidden = $portfolio->facebook_hidden == 1 ? 'checked' : '' }}
                                        <input type="checkbox" name="facebook_hidden"
                                               value="{{ $data ? ($data->introduction ? $data->introduction->facebook_hidden : $portfolio->facebook_hidden) : $portfolio->facebook_hidden }}"
                                            {{ $data ? ($data->introduction ? ($data->introduction->phone_hidden == 1 ? 'checked' : '') : $portfolio_facebook_hidden) : ($portfolio_facebook_hidden) }}>
                                        <p>숨기기</p>
                                    </label>
                                </div>
                                <div class="introduction-item">
                                    <span class="item-name">인스타그램</span>
                                    <input type="text" class="input-field" name="instagram" id="instagram" placeholder="인스타그램 계정을 입력하세요"
                                           value="{{ $data ? ($data->introduction ? $data->introduction->instagram : $portfolio->instagram) : $portfolio->instagram }}">
                                    <label class="checkbox-wrap">
                                        {{ $portfolio_instagram_hidden = $portfolio->instagram_hidden == 1 ? 'checked' : '' }}
                                        <input type="checkbox" name="instagram_hidden"
                                               value="{{ $data ? ($data->introduction ? $data->introduction->instagram_hidden : $portfolio->instagram_hidden) : $portfolio->instagram_hidden }}"
                                            {{ $data ? ($data->introduction ? ($data->introduction->phone_hidden == 1 ? 'checked' : '') : $portfolio_instagram_hidden) : ($portfolio_instagram_hidden) }}>
                                        <p>숨기기</p>
                                    </label>
                                </div>
                                <div class="introduction-item">
                                    <span class="item-name">트위터</span>
                                    <input type="text" class="input-field" name="twitter" id="twitter" placeholder="트위터 계정을 입력하세요"
                                           value="{{ $data ? ($data->introduction ? $data->introduction->twitter : $portfolio->twitter) : $portfolio->twitter }}">
                                    <label class="checkbox-wrap">
                                        {{ $portfolio_twitter_hidden = $portfolio->twitter_hidden == 1 ? 'checked' : '' }}
                                        <input type="checkbox" name="twitter_hidden"
                                               value="{{ $data ? ($data->introduction ? $data->introduction->twitter_hidden : $portfolio->twitter_hidden) : $portfolio->twitter_hidden }}"
                                            {{ $data ? ($data->introduction ? ($data->introduction->phone_hidden == 1 ? 'checked' : '') : $portfolio_twitter_hidden) : ($portfolio_twitter_hidden) }}>
                                        <p>숨기기</p>
                                    </label>
                                </div>
                                <div class="introduction-item">
                                    <span class="item-name">홈페이지</span>
                                    <input type="text" class="input-field" name="homepage" id="homepage" placeholder="홈페이지 url을 입력하세요"
                                           value="{{ $data ? ($data->introduction ? $data->introduction->homepage : $portfolio->homepage) : $portfolio->homepage }}">
                                    <label class="checkbox-wrap">
                                        {{ $portfolio_homepage_hidden = $portfolio->homepage_hidden == 1 ? 'checked' : '' }}
                                        <input type="checkbox" name="homepage_hidden"
                                               value="{{ $data ? ($data->introduction ? $data->introduction->homepage_hidden : $portfolio->homepage_hidden) : $portfolio->homepage_hidden }}"
                                            {{ $data ? ($data->introduction ? ($data->introduction->phone_hidden == 1 ? 'checked' : '') : $portfolio_homepage_hidden) : ($portfolio_homepage_hidden) }}>
                                        <p>숨기기</p>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </form>
                        <!-- 06 정산정보 -->
                    <form action="{{route('project.store')}}" id="projectForm6" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" class="projectId" name="project_id" value="{{ $data ? $data->id : '' }}">
                        <input type="hidden" name="project_6" value="project_6">
                        <div class="tab-contents-box">
                            <div class="notice"><span id="popup_fee">수수료정책</span>을 먼저 확인해주세요</div>
                            <div class="pay-info-item">
                                <h3 class="title">사업자/개인구분</h3>
                                <div>
                                    <label class="checkbox-wrap">
                                        <input type="radio" name="condition" id="company_radio" value="1"
                                            {{ $data ? ($data->account ? ($data->account->condition == 1 ? 'checked': '') : '') : '' }}>
                                        <p>사업자</p>
                                    </label>
                                    <label class="checkbox-wrap">
                                        <input type="radio" name="condition" id="personal_radio" value="0"
                                            {{ $data ? ($data->account ? ($data->account->condition == 0 ? 'checked': '') : 'checked') : 'checked' }}>
                                        <p>개인</p>
                                    </label>
                                </div>
                                <div id="company_number_display" style="{{ $data ? ($data->account ? ($data->account->condition == 1 ? '': 'display:none') : 'display:none') : 'display:none' }}">
                                    <p class="overline">사업자등록번호</p>
                                    <input type="tel" name="company_number" id="company_number"
                                           value="{{ $data ? ($data->account ? $data->account->company_number : '') : '' }}">
                                </div>
                                <div id="company_file_display" style="{{ $data ? ($data->account ? ($data->account->condition == 1 ? '': 'display:none') : 'display:none') : 'display:none' }}">
                                    <p class="overline">사업자등록증</p>
                                    <p class="caption">jpg,jpeg,png 파일(10mb 미만)</p>
                                    <label class="upload-file">
                                        <input type="file" name="company_file" onchange="fnUploadFile(this)" accept="image/jpeg, image/jpg, image/png" id="company_file">
                                        <input type="hidden" id="company_file_check" value="{{ $data ? ($data->company_image ? $data->company_image->first()->origin_name : '') : '' }}">
                                        <div class="file-button">파일선택</div>
                                        <p class="file-name">{{ $data ? ($data->company_image ? $data->company_image->first()->origin_name : '선택한 파일 없음') : '선택한 파일 없음' }}</p>
                                    </label>
                                </div>
                            </div>
                            <div class="pay-info-item">
                                <h3 class="title">통장사본</h3>
                                <p class="caption">jpg,jpeg,png 파일(10mb 미만)</p>
                                <label class="upload-file">
                                    <input type="file" name="bank_file" onchange="fnUploadFile(this)" accept="image/jpeg, image/jpg, image/png" id="bank_file">
                                    <input type="hidden" id="bank_file_check" value="{{ $data ? ($data->bank_image ? $data->bank_image->first()->origin_name : '') : '' }}">
                                    <div class="file-button">파일선택</div>
                                    <p class="file-name">{{ $data ? ($data->bank_image ? $data->bank_image->first()->origin_name : '선택한 파일 없음') : '선택한 파일 없음' }}</p>
                                </label>
                            </div>
                            <div class="pay-info-item">
                                <div class="method-item">
                                    <h3 class="subtitle">이메일</h3>
                                    <input type="email" class="input-field" name="account_email" placeholder="이메일 주소를 입력해주세요" id="account_email"
                                           value="{{ $data ? ($data->account ? $data->account->email : '') : '' }}">
                                    <p class="caption">약정서 발송에 필요한 정보입니다.</p>
                                </div>
                                <div class="method-item">
                                    <h3 class="subtitle">전화번호</h3>
                                    <input type="tel" class="input-field" name="account_phone" placeholder="하이픈('-')없이 입력해주세요" id="account_phone"
                                    value="{{ $data ? ($data->account ? $data->account->phone : '') : '' }}">
                                    <p class="caption">약정서 발송에 필요한 정보입니다.</p>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <!--// tab contents -->

            </div>
        </div>

    </main>
    <script src="../js/datepicker.js"></script>
    <script type="text/javascript">
        document.addEventListener('DOMContentLoaded',function () {
            var oEditors = [];
            nhn.husky.EZCreator.createInIFrame({
                oAppRef: oEditors,
                elPlaceHolder: "ir1",
                sSkinURI: "../se2/SmartEditor2Skin.html",
                fCreator: "createSEditor2",
                fOnAppLoad: function () {
                    // document.getElementById("editor").setAttribute('style','display:none;')
                    $("iframe").css("width", "100%").css("height", "100%");
                }

            });

            // 스토리텔링
            document.getElementById('project_date').addEventListener('click', function () {
                oEditors.getById["ir1"].exec("UPDATE_CONTENTS_FIELD", []);
                var story_telling = document.getElementById('story_telling');
                var form = new FormData($('#projectForm3')[0]);
                formAjax('POST', false, '/project', form, function (e) {
                    alert('오류입니다. 처음부터 다시 시작해주세요.');
                    location.href = '/project/create';
                }, function (data) {
                    if (data === 'fail') {
                        alert('이전 단계를 진행해주세요.')
                    } else {
                        story_telling.setAttribute("class", "fill");
                        valueCheck = true;
                    }
                });
            });
        });


        function dateChange() {
            var deadline = document.getElementById('deadline').value;
            var degreeDate = new Date(deadline);
            degreeDate.setDate(degreeDate.getDate() + 7);
            var year = degreeDate.getFullYear();
            var month = degreeDate.getMonth() < 9 ? "0" + (degreeDate.getMonth() + 1) : (degreeDate.getMonth() + 1); // getMonth() is zero-based
            var day  = degreeDate.getDate() < 10 ? "0" + degreeDate.getDate() : degreeDate.getDate();

            $('#account_date').val(year+'-'+month+'-'+day);
        }
    </script>
@endsection
