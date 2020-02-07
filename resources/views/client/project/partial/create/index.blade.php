<?php
// 프로젝트 만들기
?>
@extends('client.layouts.app')
@section('content')
    <link rel="stylesheet" href="{{asset('/css/swiper.min.css')}}">


    <main class="container">
        <div class="header-sub">
            <div class="inner">
                <div class="prev">
                    <a href="">마이페이지</a>
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
                    <button class="btn-white">중도저장하기</button>
                    <button class="btn-black">검토요청하기</button>
                </div>
                <!-- //headline -->

                <ul class="tab-list">
                    <li class="tab-on fill"><span>개요</span></li>
                    <li><span>상품정보</span></li>
                    <li><span>스토리텔링</span></li>
                    <li><span>프로젝트 일정</span></li>
                    <li><span>디자이너/브랜드 소개</span></li>
                    <li><span>정산정보</span></li>
                </ul>

                <!-- tab contents -->
                <div class="contents-wrap">
                    <form>
                        <!-- 01 개요 -->
                        <div class="tab-contents-box edit-on">
                            <!-- 01-A 프로젝트 제목 -->
                            <div class="input-item">
                                <h3 class="title">프로젝트 제목</h3>
                                <input type="text" class="input-field" placeholder="30자 이내로 입력해주세요">
                            </div>
                            <!-- 01-B 프로젝트 카테고리 -->
                            <div class="input-item">
                                <h3 class="title">프로젝트 카테고리</h3>
                                <div>
                                    <select class="select">
                                        <option selected disabled>- 1차 카테고리 -</option>
                                        <option>카테고리</option>
                                        <option>카테고리</option>
                                    </select>
                                    <span class="arrow">></span>
                                    <select class="select">
                                        <option selected disabled>- 2차 카테고리 -</option>
                                        <option>카테고리</option>
                                        <option>카테고리</option>
                                    </select>
                                </div>
                            </div>
                            <!-- 01-C 프로젝트 개요 -->
                            <div class="input-item">
                                <h3 class="title">프로젝트 개요</h3>
                                <input type="text" class="input-field" placeholder="최소 10자 ~ 최대 50자">
                            </div>
                            <!-- 01-D 대표이미지 -->
                            <div class="input-item">
                                <h3 class="title">대표이미지(썸네일)</h3>
                                <p class="text-caption">최소 280*360px의 jpg, jpeg, png파일(10MB 미만)</p>
                                <label class="upload-file">
                                    <input type="file" onchange="fnUploadFile(this)" accept="image/jpeg, image/jpg, image/png">
                                    <div class="file-button">파일선택</div>
                                    <p class="file-name">선택한 파일 없음</p>
                                </label>
                            </div>
                            <!-- 01-D 성공갯수 -->
                            <div class="input-item">
                                <h3 class="title">성공 갯수</h3>
                                <input type="text" class="input-field" placeholder="최소 10개 ~ 최대 30개">
                            </div>
                        </div>
                        <!-- 02 상품정보 -->
                        <div class="tab-contents-box">
                            <!-- 02-A 옵션  -->
                            <div class="drop-box">
                                <div class="drop-header">옵션</div>
                                <div class="drop-item">
                                    <div class="option-list">
                                        <div class="option-item">
                                            <div class="option-num">1</div>
                                            <label class="option-field">
                                                <p>옵션명</p>
                                                <input type="text" class="input-field" placeholder="30자 이내">
                                            </label>
                                            <label class="option-field price">
                                                <p>가격</p>
                                                <input type="text" class="input-field" placeholder="30자 이내">
                                            </label>
                                        </div>
                                        <!-- script add items -->
                                    </div>
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
                                        <select class="select">
                                            <option selected disabled>- 1차 카테고리 -</option>
                                            <option>상의(아우터, 티셔츠, 탑 등)</option>
                                            <option>원피스</option>
                                            <option>치마</option>
                                            <option>바지</option>
                                            <option>구두</option>
                                            <option>악세사리</option>
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
                                            <tr>
                                                <!-- 사이즈 -->
                                                <td>
                                                    <input type="text">
                                                </td>
                                                <!-- 총기장 -->
                                                <td>
                                                    <input type="text">
                                                </td>
                                                <!-- 어깨 -->
                                                <td>
                                                    <input type="text">
                                                </td>
                                                <!-- 가슴 -->
                                                <td>
                                                    <input type="text">
                                                </td>
                                                <!-- 팔길이 -->
                                                <td>
                                                    <input type="text">
                                                </td>

                                                <!-- 소매단면 -->
                                                <td>
                                                    <input type="text">
                                                </td>
                                                <!-- 암홀 -->
                                                <td>
                                                    <input type="text">
                                                </td>
                                                <!-- 허리 -->
                                                <td>
                                                    <input type="text">
                                                </td>
                                                <!-- 밑단 -->
                                                <td>
                                                    <input type="text">
                                                </td>
                                                <!-- 밑위 -->
                                                <td>
                                                    <input type="text">
                                                </td>

                                                <!-- 엉덩이단면 -->
                                                <td>
                                                    <input type="text">
                                                </td>
                                                <!-- 허벅지단면 -->
                                                <td>
                                                    <input type="text">
                                                </td>
                                                <!-- 끈길이 -->
                                                <td>
                                                    <input type="text">
                                                </td>
                                                <!-- 가로 -->
                                                <td>
                                                    <input type="text">
                                                </td>
                                                <!-- 세로 -->
                                                <td>
                                                    <input type="text">
                                                </td>

                                                <!-- 앞굽 -->
                                                <td>
                                                    <input type="text">
                                                </td>
                                                <!-- 뒷굽 -->
                                                <td>
                                                    <input type="text">
                                                </td>
                                                <!-- 버튼 -->
                                                <!-- <td class="row-btn"> -->
                                                <!-- 123 -->
                                                <!-- </td> -->
                                            </tr>
                                            <!-- script add item -->
                                            </tbody>
                                        </table>
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
                                        <div class="fabric-list">
                                            <div class="fabric-title">
                                                <div>재질명</div>
                                                <div>비율</div>
                                            </div>
                                            <div class="fabric-item">
                                                <div class="fabric-name">
                                                    <input type="text" class="input-field">
                                                </div>
                                                <div class="fabric-ratio">
                                                    <input type="number" max="100" min="0" class="input-field">
                                                </div>
                                            </div>
                                            <!-- script add item -->
                                        </div>
                                        <button class="btn-black" type="button" onclick="fnAddFabric()">재질추가</button>
                                    </div>
                                    <div class="designer-comment-wrap">
                                        <p class="subtitle">디자이너 코멘트</p>
                                        <textarea class="textarea" placeholder="디자이너 코멘트를 입력해주세요"></textarea>
                                    </div>
                                </div>
                            </div>
                            <!-- 02-D 취급정보 -->
                            <div class="drop-box">
                                <div class="drop-header">취급정보</div>
                                <div class="drop-item">
                                    <ul class="handling-tab">
                                        <li class="handling-on">물세탁</li>
                                        <li>표백</li>
                                        <li>다림질</li>
                                        <li>드라이클리닝</li>
                                        <li>건조</li>
                                    </ul>
                                    <div class="handling-contents-wrap">
                                        <!-- 02-D-A 물세탁 -->
                                        <div class="handling-contents handling-con-on">
                                            <label class="handling-item water-01">
                                                <div class="item-image"></div>
                                                <input type="radio">
                                                <ul class="item-caption">
                                                    <li>물온도 95℃로 세탁</li>
                                                    <li>세탁기/손세탁 가능</li>
                                                    <li>세제종류 제한 없음</li>
                                                    <li>삶을 수 있음</li>
                                                </ul>
                                                <div class="shape"></div>
                                            </label>
                                            <label class="handling-item water-02">
                                                <div class="item-image"></div>
                                                <input type="radio">
                                                <ul class="item-caption">
                                                    <li>물온도 60℃로 세탁</li>
                                                    <li>세탁기/손세탁 가능</li>
                                                    <li>세제종류 제한 없음</li>
                                                </ul>
                                                <div class="shape"></div>
                                            </label>
                                            <label class="handling-item water-03">
                                                <div class="item-image"></div>
                                                <input type="radio">
                                                <ul class="item-caption">
                                                    <li>물온도 40℃로 세탁</li>
                                                    <li>세탁기/손세탁 가능</li>
                                                    <li>세제종류 제한 없음</li>
                                                </ul>
                                                <div class="shape"></div>
                                            </label>
                                            <label class="handling-item water-04">
                                                <div class="item-image"></div>
                                                <input type="radio">
                                                <ul class="item-caption">
                                                    <li>물온도 40℃로 세탁</li>
                                                    <li>세탁기로 약하게 세탁</li>
                                                    <li>약하게 손세탁 가능</li>
                                                    <li>중성세제 사용</li>
                                                </ul>
                                                <div class="shape"></div>
                                            </label>
                                            <label class="handling-item water-05">
                                                <div class="item-image"></div>
                                                <input type="radio">
                                                <ul class="item-caption">
                                                    <li>물온도 30℃로 세탁</li>
                                                    <li>세탁기로 약하게 세탁</li>
                                                    <li>약하게 손세탁 가능</li>
                                                    <li>중성세제 사용</li>
                                                </ul>
                                                <div class="shape"></div>
                                            </label>
                                            <label class="handling-item water-06">
                                                <div class="item-image"></div>
                                                <input type="radio">
                                                <ul class="item-caption">
                                                    <li>물온도 30℃로 세탁</li>
                                                    <li>세탁기 사용불가</li>
                                                    <li>약하게 손세탁 가능</li>
                                                    <li>중성세제 사용</li>
                                                </ul>
                                                <div class="shape"></div>
                                            </label>
                                            <label class="handling-item water-07">
                                                <div class="item-image"></div>
                                                <input type="radio">
                                                <ul class="item-caption">
                                                    <li>물세탁 안됨</li>
                                                </ul>
                                                <div class="shape"></div>
                                            </label>
                                        </div>
                                        <!-- 02-D-B 표백 -->
                                        <div class="handling-contents">
                                            <label class="handling-item bleach-01">
                                                <div class="item-image"></div>
                                                <input type="radio">
                                                <ul class="item-caption">
                                                    <li>염소계 표백제로 표백</li>
                                                </ul>
                                                <div class="shape"></div>
                                            </label>
                                            <label class="handling-item bleach-02">
                                                <div class="item-image"></div>
                                                <input type="radio">
                                                <ul class="item-caption">
                                                    <li>염소계 표백제로 표백할 수 없음</li>
                                                </ul>
                                                <div class="shape"></div>
                                            </label>
                                            <label class="handling-item bleach-03">
                                                <div class="item-image"></div>
                                                <input type="radio">
                                                <ul class="item-caption">
                                                    <li>산소계 표백제로 표백</li>
                                                </ul>
                                                <div class="shape"></div>
                                            </label>
                                            <label class="handling-item bleach-04">
                                                <div class="item-image"></div>
                                                <input type="radio">
                                                <ul class="item-caption">
                                                    <li>산소계 표백제로 표백할 수 없음</li>
                                                </ul>
                                                <div class="shape"></div>
                                            </label>
                                            <label class="handling-item bleach-05">
                                                <div class="item-image"></div>
                                                <input type="radio">
                                                <ul class="item-caption">
                                                    <li>산소,염소계 표백제로 표백</li>
                                                </ul>
                                                <div class="shape"></div>
                                            </label>
                                            <label class="handling-item bleach-06">
                                                <div class="item-image"></div>
                                                <input type="radio">
                                                <ul class="item-caption">
                                                    <li>산소,염소계 표백제로 표백할 수 없음</li>
                                                </ul>
                                                <div class="shape"></div>
                                            </label>
                                        </div>
                                        <!-- 02-D-C 다림질 -->
                                        <div class="handling-contents">
                                            <label class="handling-item iron-01">
                                                <div class="item-image"></div>
                                                <input type="radio">
                                                <ul class="item-caption">
                                                    <li>180~210℃로 다림질</li>
                                                </ul>
                                                <div class="shape"></div>
                                            </label>
                                            <label class="handling-item iron-02">
                                                <div class="item-image"></div>
                                                <input type="radio">
                                                <ul class="item-caption">
                                                    <li>원단 위에 천을 덮고 180~210℃로 다림질</li>
                                                </ul>
                                                <div class="shape"></div>
                                            </label>
                                            <label class="handling-item iron-03">
                                                <div class="item-image"></div>
                                                <input type="radio">
                                                <ul class="item-caption">
                                                    <li>140~160℃로 다림질</li>
                                                </ul>
                                                <div class="shape"></div>
                                            </label>
                                            <label class="handling-item iron-04">
                                                <div class="item-image"></div>
                                                <input type="radio">
                                                <ul class="item-caption">
                                                    <li>원단 위에 천을 덮고 140~160℃로 다림질</li>
                                                </ul>
                                                <div class="shape"></div>
                                            </label>
                                            <label class="handling-item iron-05">
                                                <div class="item-image"></div>
                                                <input type="radio">
                                                <ul class="item-caption">
                                                    <li>80~120℃로 다림질</li>
                                                </ul>
                                                <div class="shape"></div>
                                            </label>
                                            <label class="handling-item iron-06">
                                                <div class="item-image"></div>
                                                <input type="radio">
                                                <ul class="item-caption">
                                                    <li>원단 위에 천을 덮고 80~120℃로 다림질</li>
                                                </ul>
                                                <div class="shape"></div>
                                            </label>
                                            <label class="handling-item iron-07">
                                                <div class="item-image"></div>
                                                <input type="radio">
                                                <ul class="item-caption">
                                                    <li>다림질 할 수 없음</li>
                                                </ul>
                                                <div class="shape"></div>
                                            </label>
                                        </div>
                                        <!-- 02-D-D 드라이클리닝 -->
                                        <div class="handling-contents">
                                            <label class="handling-item drycleaning-01">
                                                <div class="item-image"></div>
                                                <input type="radio">
                                                <ul class="item-caption">
                                                    <li>드라이클리닝 가능</li>
                                                    <li>용제는 클로로에틸렌 또는 석유계 사용</li>
                                                </ul>
                                                <div class="shape"></div>
                                            </label>
                                            <label class="handling-item drycleaning-02">
                                                <div class="item-image"></div>
                                                <input type="radio">
                                                <ul class="item-caption">
                                                    <li>드라이클리닝 가능</li>
                                                    <li>용제는 석유계 사용</li>
                                                </ul>
                                                <div class="shape"></div>
                                            </label>
                                            <label class="handling-item drycleaning-03">
                                                <div class="item-image"></div>
                                                <input type="radio">
                                                <ul class="item-caption">
                                                    <li>드라이클리닝 할 수 있으나 셀프 서비스는 할 수 없음(전문점에서만 가능)</li>
                                                </ul>
                                                <div class="shape"></div>
                                            </label>
                                            <label class="handling-item drycleaning-04">
                                                <div class="item-image"></div>
                                                <input type="radio">
                                                <ul class="item-caption">
                                                    <li>드라이클리닝 불가함</li>
                                                </ul>
                                                <div class="shape"></div>
                                            </label>

                                        </div>
                                        <!-- 02-D-E 건조 -->
                                        <div class="handling-contents">
                                            <label class="handling-item dry-01">
                                                <div class="item-image"></div>
                                                <input type="radio">
                                                <ul class="item-caption">
                                                    <li>햇빛에 건조</li>
                                                    <li>옷걸이에 걸어서 건조</li>
                                                </ul>
                                                <div class="shape"></div>
                                            </label>
                                            <label class="handling-item dry-02">
                                                <div class="item-image"></div>
                                                <input type="radio">
                                                <ul class="item-caption">
                                                    <li>그늘에 건조</li>
                                                    <li>옷걸이에 걸어서 건조</li>
                                                </ul>
                                                <div class="shape"></div>
                                            </label>
                                            <label class="handling-item dry-03">
                                                <div class="item-image"></div>
                                                <input type="radio">
                                                <ul class="item-caption">
                                                    <li>햇빛에 건조</li>
                                                    <li>바닥에 뉘어서 건조</li>
                                                </ul>
                                                <div class="shape"></div>
                                            </label>
                                            <label class="handling-item dry-04">
                                                <div class="item-image"></div>
                                                <input type="radio">
                                                <ul class="item-caption">
                                                    <li>그늘에 건조</li>
                                                    <li>바닥에 뉘어서 건조</li>
                                                </ul>
                                                <div class="shape"></div>
                                            </label>
                                            <label class="handling-item dry-05">
                                                <div class="item-image"></div>
                                                <input type="radio">
                                                <ul class="item-caption">
                                                    <li>세탁 후 건조할 때 기계 건조 할 수 있음</li>
                                                </ul>
                                                <div class="shape"></div>
                                            </label>
                                            <label class="handling-item dry-06">
                                                <div class="item-image"></div>
                                                <input type="radio">
                                                <ul class="item-caption">
                                                    <li>세탁 후 건조할 때 기계 건조 할 수 없음</li>
                                                </ul>
                                                <div class="shape"></div>
                                            </label>
                                            <label class="handling-item dry-07">
                                                <div class="item-image"></div>
                                                <input type="radio">
                                                <ul class="item-caption">
                                                    <li>손으로 약하게 짬</li>
                                                </ul>
                                                <div class="shape"></div>
                                            </label>
                                            <label class="handling-item dry-08">
                                                <div class="item-image"></div>
                                                <input type="radio">
                                                <ul class="item-caption">
                                                    <li>손으로 짜면 안됨</li>
                                                </ul>
                                                <div class="shape"></div>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- 03 스토리텔링 -->
                        <div class="tab-contents-box">
                            <div class="storytelling-wrap">
                                <div class="notice"><span>가이드를 확인</span>하시고 작성해주세요</div>
                                <div class="storytelling">
                                    텍스트 에디터 영역
                                </div>
                            </div>
                        </div>
                        <!-- 04 프로젝트 일정 -->
                        <div class="tab-contents-box">
                            <div class="schedule-wrap">
                                <div class="schedule">
                                    <span>프로젝트 마감일</span>은 오늘로부터
                                    <input type="number" class="input-field short">
                                    일 뒤인
                                    <input type="date" class="input-field">
                                    이며,
                                </div>
                                <div class="schedule">
                                    이에 따라 <span>프로젝트 정산일</span>은 영업일 7일 뒤인
                                    <input type="date" class="input-field">이고,
                                </div>
                                <div class="schedule">
                                    프로젝트 마감일 후
                                    <input type="number" class="input-field short">
                                    일 뒤인
                                    <input type="date" class="input-field">
                                    에 배송을 진행하되,
                                </div>
                                <div class="schedule">
                                    제작 상황에 따라 최대
                                    <select class="select">
                                        <option selected disabled>- 지연일자 -</option>
                                    </select>
                                    까지 지연될 수 있고,
                                </div>
                                <div class="schedule">
                                    지연 일자를 넘길 경우
                                    <span>정책약관</span>에
                                    따라 전액 환불 될 수 있음에
                                    <label>
                                        <span>동의합니다.</span>
                                        <input type="checkbox">
                                    </label>
                                </div>
                            </div>
                        </div>
                        <!-- 05 디자이너 브랜드 소개 -->
                        <div class="tab-contents-box">
                            <div class="introduction-wrap">
                                <div class="introduction-item">
                                    <span class="item-name">디자이너명</span>
                                    <input type="text" class="input-field" placeholder="디자이너명을 입력하세요">
                                </div>
                                <div class="introduction-item">
                                    <span class="item-name">브랜드명</span>
                                    <input type="text" class="input-field" placeholder="브랜드명을 입력하세요">
                                </div>
                                <div class="introduction-item">
                                    <span class="item-name">이메일</span>
                                    <input type="email" class="input-field" placeholder="이메일을 입력하세요">
                                    <label class="checkbox-wrap">
                                        <input type="checkbox">
                                        <p>숨기기</p>
                                    </label>
                                </div>
                                <div class="introduction-item">
                                    <span class="item-name">전화번호</span>
                                    <input type="tel" class="input-field" placeholder="전화번호를 입력하세요">
                                    <label class="checkbox-wrap">
                                        <input type="checkbox">
                                        <p>숨기기</p>
                                    </label>
                                </div>
                                <div class="introduction-item">
                                    <span class="item-name">페이스북</span>
                                    <input type="text" class="input-field" placeholder="페이스북 계정을 입력하세요">
                                    <label class="checkbox-wrap">
                                        <input type="checkbox">
                                        <p>숨기기</p>
                                    </label>
                                </div>
                                <div class="introduction-item">
                                    <span class="item-name">인스타그램</span>
                                    <input type="text" class="input-field" placeholder="인스타그램 계정을 입력하세요">
                                    <label class="checkbox-wrap">
                                        <input type="checkbox">
                                        <p>숨기기</p>
                                    </label>
                                </div>
                                <div class="introduction-item">
                                    <span class="item-name">트위터</span>
                                    <input type="text" class="input-field" placeholder="트위터 계정을 입력하세요">
                                    <label class="checkbox-wrap">
                                        <input type="checkbox">
                                        <p>숨기기</p>
                                    </label>
                                </div>
                                <div class="introduction-item">
                                    <span class="item-name">홈페이지</span>
                                    <input type="text" class="input-field" placeholder="홈페이지 url을 입력하세요">
                                    <label class="checkbox-wrap">
                                        <input type="checkbox">
                                        <p>숨기기</p>
                                    </label>
                                </div>
                            </div>
                            <div class="introduction-text">
                                <p class="subtitle">프로젝트를 진행하는 디자이너와 브랜드를 소개하는 글을 작성해주세요</p>
                                <div class="btn-wrap">
                                    <button class="btn-black" type="button">직접 입력하기</button>
                                    <button class="btn-white" type="button">포트폴리오 가져오기</button>
                                </div>
                                <div class="texteditor-box">
                                    텍스에디터 영역
                                </div>
                            </div>
                        </div>
                        <!-- 06 정산정보 -->
                        <div class="tab-contents-box">
                            <div class="notice"><span>수수료정책</span>을 먼저 확인해주세요</div>
                            <div class="pay-info-item">
                                <h3 class="title">사업자/개인구분</h3>
                                <div>
                                    <label class="checkbox-wrap">
                                        <input type="radio">
                                        <p>사업자</p>
                                    </label>
                                    <label class="checkbox-wrap">
                                        <input type="radio">
                                        <p>개인</p>
                                    </label>
                                </div>
                                <div>
                                    <p class="overline">사업자등록번호</p>
                                    <div class="input-list">
                                        <input type="tel">
                                        <span>-</span>
                                        <input type="tel">
                                        <span>-</span>
                                        <input type="tel">
                                    </div>
                                </div>
                                <div>
                                    <p class="overline">사업자등록증</p>
                                    <p class="caption">jpg,jpeg,png 파일(10mb 미만)</p>
                                    <label class="upload-file">
                                        <input type="file" onchange="fnUploadFile(this)" accept="image/jpeg, image/jpg, image/png">
                                        <div class="file-button">파일선택</div>
                                        <p class="file-name">선택한 파일 없음</p>
                                    </label>
                                </div>
                            </div>
                            <div class="pay-info-item">
                                <h3 class="title">통장사본</h3>
                                <p class="caption">jpg,jpeg,png 파일(10mb 미만)</p>
                                <label class="upload-file">
                                    <input type="file" onchange="fnUploadFile(this)" accept="image/jpeg, image/jpg, image/png">
                                    <div class="file-button">파일선택</div>
                                    <p class="file-name">선택한 파일 없음</p>
                                </label>
                            </div>
                            <div class="pay-info-item">
                                <div class="method-item">
                                    <h3 class="subtitle">이메일</h3>
                                    <input type="email" class="input-field" placeholder="이메일 주소를 입력해주세요">
                                    <p class="caption">약정서 발송에 필요한 정보입니다.</p>
                                </div>
                                <div class="method-item">
                                    <h3 class="subtitle">전화번호</h3>
                                    <input type="tel" class="input-field" placeholder="하이픈('-')없이 입력해주세요">
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



@endsection