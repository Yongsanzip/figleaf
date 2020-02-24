<?php
$tab = 'portfolio';
?>
@extends('client.layouts.app')
@section('content')
    <link rel="stylesheet" href="{{asset('/css/swiper.min.css')}}">
    <link rel="stylesheet" href="{{asset('/css/yearpicker.css')}}">
    <main class="container">
        <div class="inner">
            <div class="con-portfolio-create">
                <form action="{{route('mypage_portfolio.store')}}" method="POST" enctype="multipart/form-data" onsubmit="return fn_portfolio_submit(this);">
                <h2 class="portfolio-headline">
                    portfolio
                </h2>
                <!-- headline -->
                <div class="headline-wrap">
                    <h2 class="headline">포트폴리오 만들기/수정하기</h2>
                </div>
                <div class="portfolio-btn-wrap">
                    <a onclick="test(); return false;" class="btn-white">미리보기</a>
                    <button type="submit" class="btn-black">저장하기</button>
                    <div class="portfolio-options">
                        <label class="checkbox-wrap">
                            <input type="checkbox" name="hidden_yn"  value="1">
                            <p>포트폴리오 숨기기</p>
                        </label>
                        <button class="help" type="button">도움말</button>
                    </div>

                </div>
                <!-- //headline -->

                <ul class="tab-list">
                    <li class="tab-on fill"><span>디자이너 프로필</span></li>
                    <li><span>브랜드</span></li>
                    <li><span>룩북</span></li>
                    <li><span>연락처</span></li>
                </ul>

                <!-- tab contents -->
                <div class="contents-wrap">
                    @csrf
                    <!-- 01 프로필 -->
                        <div class="tab-contents-box edit-on">
                            <!-- 01-A 대표이미지 -->
                            <div class="input-item">
                                <h3 class="title">대표이미지(썸네일)</h3>
                                <p class="text-caption">최소 280*360px의 jpg, jpeg, png파일(10MB 미만)</p>
                                <label class="upload-file">
                                    <input type="file" name="portfolio_image" onchange="fnUploadFile(this)" accept="image/jpeg, image/jpg, image/png">
                                    <div class="file-button">파일선택</div>
                                    <p class="file-name">선택한 파일 없음</p>

                                </label>
                            </div>
                            <!-- 01-B 프로필설명 -->
                            <div class="input-item profile-text">
                                <h3 class="title">프로필 설명</h3>
                                <div class="lang-list">
                                    <label class="lang-check">
                                        <input type="checkbox" lang="ko" checked disabled>
                                        <div class="shape">한국어</div>
                                    </label>
                                    <label class="lang-check">
                                        <input type="checkbox" lang="en" onchange="fnProfileLang(this)">
                                        <div class="shape">ENG</div>
                                    </label>
                                    <label class="lang-check">
                                        <input type="checkbox" lang="ch" onchange="fnProfileLang(this)">
                                        <div class="shape">汉语</div>
                                    </label>
                                </div>
                                <div class="textarea-list profile-text-list">
                                    <textarea class="textarea" id="context_ko" name="context_ko" lang="ko" placeholder="한국어"></textarea>
                                    <textarea class="textarea hide" id="context_en" name="context_en" lang="en" placeholder="English"></textarea>
                                    <textarea class="textarea hide" id="context_cn" name="context_cn" lang="ch" placeholder="汉语"></textarea>
                                </div>
                            </div>
                            <!-- 01-C 히스토리 -->
                            <div class="input-item">
                                <h3 class="title">히스토리</h3>
                                <div class="lang-list history-lang">
                                    <label class="lang-check">
                                        <input type="checkbox" lang="ko" checked disabled>
                                        <div class="shape">한국어</div>
                                    </label>
                                    <label class="lang-check">
                                        <input type="checkbox" lang="en" onchange="fnHistoryLang(this)">
                                        <div class="shape">ENG</div>
                                    </label>
                                    <label class="lang-check">
                                        <input type="checkbox" lang="ch" onchange="fnHistoryLang(this)">
                                        <div class="shape">汉语</div>
                                    </label>
                                </div>
                                <div class="history-list" id="history_list" data-key="history">
                                    <div class="year-item">
                                        <div class="year-row">
                                            <input type="text" class="input-field" data-key="year" placeholder="ex)2019/연도를 입력하세요.">
                                        </div>
                                        <div class="history-active-list">
                                            <div class="active-item">
                                                <ul class="active-list">
                                                    <li><input type="text" lang="ko" data-key="history_ko" class="input-field history-active-item" placeholder="활동(한국어)"></li>
                                                    <li><input type="text" lang="en" data-key="history_en" class="input-field history-active-item hide" placeholder="Activities(English)"></li>
                                                    <li><input type="text" lang="ch" data-key="history_cn" class="input-field history-active-item hide" placeholder="活动(汉语)"></li>
                                                </ul>
                                                <div class="btn-box">
                                                    <button class="btn-black" type="button" onclick="fnAddHistoryActive(this)">추가</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="control-wrap">
                                    <button class="btn-black" type="button" onclick="fnAddHistoryYear()">연도추가</button>
                                </div>
                            </div>
                            <!-- 01-D 수상내역 -->
                            <div class="input-item">
                                <h3 class="title">수상내역</h3>
                                <div class="lang-list award-lang">
                                    <label class="lang-check">
                                        <input type="checkbox" lang="ko" checked disabled>
                                        <div class="shape">한국어</div>
                                    </label>
                                    <label class="lang-check">
                                        <input type="checkbox" lang="en" onchange="fnAwardLang(this)">
                                        <div class="shape">ENG</div>
                                    </label>
                                    <label class="lang-check">
                                        <input type="checkbox" lang="ch" onchange="fnAwardLang(this)">
                                        <div class="shape">汉语</div>
                                    </label>
                                </div>
                                <div class="history-list award-list" id="award_list" data-key="awards">
                                    <div class="year-item">
                                        <div class="year-row">
                                            <input type="text" class="input-field" data-key="year" placeholder="ex)2019/연도를 입력하세요.">
                                        </div>
                                        <div class="award-active-list">
                                            <div class="active-item">
                                                <ul class="active-list">
                                                    <li><input type="text" lang="ko" data-key="history_ko" class="input-field award-active-item" placeholder="수상내역(한국어)"></li>
                                                    <li><input type="text" lang="en" data-key="history_en" class="input-field award-active-item hide" placeholder="Awards(English)"></li>
                                                    <li><input type="text" lang="ch" data-key="history_cn" class="input-field award-active-item hide" placeholder="获奖经历(汉语)"></li>
                                                </ul>
                                                <div class="btn-box">
                                                    <button class="btn-black" type="button" onclick="fnAddAwardActive(this)">추가</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="control-wrap">
                                    <button class="btn-black" type="button" onclick="fnAddAwardYear(this)">연도추가</button>
                                </div>
                            </div>
                            <!-- 01-E 협회 -->
                            <div class="input-item">
                                <h3 class="title">협회</h3>
                                <div class="lang-list society-lang">
                                    <label class="lang-check">
                                        <input type="checkbox" lang="ko" checked disabled>
                                        <div class="shape">한국어</div>
                                    </label>
                                    <label class="lang-check">
                                        <input type="checkbox" lang="en" onchange="fnSocietyLang(this)">
                                        <div class="shape">ENG</div>
                                    </label>
                                    <label class="lang-check">
                                        <input type="checkbox" lang="ch" onchange="fnSocietyLang(this)">
                                        <div class="shape">汉语</div>
                                    </label>
                                </div>
                                <div class="society-list" id="society_list" data-key="society">
                                    <div class="year-item">
                                        <div class="year-row">
                                            <input type="text" class="input-field"  data-key="start_year" placeholder="가입연도">
                                            <span class="waves">~</span>
                                            <input type="text" class="input-field"  data-key="end_year" placeholder="가입연도">
                                        </div>
                                        <div class="active-item">
                                            <ul class="active-list">
                                                <li><input type="text" lang="ko" data-key="association_ko" class="input-field society-active-item" placeholder="협회명(한국어)"></li>
                                                <li><input type="text" lang="en" data-key="association_en" class="input-field society-active-item hide" placeholder="Name of Association(English)"></li>
                                                <li><input type="text" lang="ch" data-key="association_cn" class="input-field society-active-item hide" placeholder="请输入协会(汉语)"></li>
                                            </ul>
                                            <div class="btn-box">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="control-wrap">
                                    <button class="btn-black" type="button" onclick="fnAddSociety()">협회추가</button>
                                </div>
                            </div>
                        </div>
                        <!-- 02 브랜드 -->
                        <div class="tab-contents-box">
                            <!-- 02-A 브랜드명 -->
                            <div class="input-item brand-name">
                                <h3 class="title">브랜드명</h3>
                                <div class="lang-list">
                                    <label class="lang-check">
                                        <input type="checkbox" lang="ko" checked disabled>
                                        <div class="shape">한국어</div>
                                    </label>
                                    <label class="lang-check">
                                        <input type="checkbox" lang="en" onchange="fnBrandNameLang(this)">
                                        <div class="shape">ENG</div>
                                    </label>
                                    <label class="lang-check">
                                        <input type="checkbox" lang="ch" onchange="fnBrandNameLang(this)">
                                        <div class="shape">汉语</div>
                                    </label>
                                </div>
                                <ul class="brand-name-list">
                                    <li><input type="text" lang="ko" name="brand_name_ko" class="input-field" placeholder="브랜드(한국어)"></li>
                                    <li><input type="text" lang="en" name="brand_name_en" class="input-field hide" placeholder="Brand name(English)"></li>
                                    <li><input type="text" lang="ch" name="brand_name_cn" class="input-field hide" placeholder="品牌名称(汉语)"></li>
                                </ul>
                            </div>
                            <!-- 02-B 대표이미지 -->
                            <div class="input-item">
                                <h3 class="title">대표이미지(썸네일)</h3>
                                <p class="text-caption">최소 280*360px의 jpg, jpeg, png파일(10MB 미만)</p>
                                <label class="upload-file">
                                    <input type="file" name="brand_thumbnail_image" onchange="fnUploadFile(this)" accept="image/jpeg, image/jpg, image/png">
                                    <div class="file-button">파일선택</div>
                                    <p class="file-name">선택한 파일 없음</p>
                                </label>
                            </div>
                            <!-- 02-C 브랜드 로고 -->
                            <div class="input-item">
                                <h3 class="title">브랜드 로고</h3>
                                <p class="text-caption">최소 280*360px의 jpg, jpeg, png파일(10MB 미만)</p>
                                <label class="upload-file">
                                    <input type="file" name="brand_logo_image" onchange="fnUploadFile(this)" accept="image/jpeg, image/jpg, image/png">
                                    <div class="file-button">파일선택</div>
                                    <p class="file-name">선택한 파일 없음</p>
                                </label>
                            </div>
                            <!-- 02-D 브랜드설명 -->
                            <div class="input-item">
                                <h3 class="title">브랜드 설명</h3>
                                <div class="lang-list">
                                    <label class="lang-check">
                                        <input type="checkbox" lang="ko" checked disabled>
                                        <div class="shape">한국어</div>
                                    </label>
                                    <label class="lang-check">
                                        <input type="checkbox" lang="en" onchange="fnBrandTextLang(this)">
                                        <div class="shape">ENG</div>
                                    </label>
                                    <label class="lang-check">
                                        <input type="checkbox" lang="ch" onchange="fnBrandTextLang(this)">
                                        <div class="shape">汉语</div>
                                    </label>
                                </div>
                                <div class="textarea-list brand-text-list">
                                    <textarea lang="ko" name="brand_content_ko" class="textarea" placeholder="한국어"></textarea>
                                    <textarea lang="en" name="brand_content_en" class="textarea hide" placeholder="English"></textarea>
                                    <textarea lang="ch" name="brand_content_cn" class="textarea hide" placeholder="汉语"></textarea>
                                </div>
                            </div>
                        </div>
                        <!-- 03 룩북 -->
                        <div class="tab-contents-box">
                            <div class="lookbook-wrap">
                                <div class="lookbook-list">
                                    <div class="lookbook-item">
                                        <div class="lookbook-name">
                                            <input type="text" name="season0" placeholder="시즌명(EX/2019)" class="input-field lookbook-season yearpicker" readonly>
                                            <select class="select" name="season_type0">
                                                <option selected disabled>전체</option>
                                                <option>SS</option>
                                                <option>FW</option>
                                            </select>
                                        </div>
                                        <div class="lookbook-contents-wrap">
                                            <div class="lookbook-contents">
                                                <!-- script add item-->
                                            </div>
                                            <label class="upload-image">
                                                <input type="file" title="0" name="images[0][]" accept="image/jpeg, image/jpg, image/png" onchange="fnAddLookbookItemInit(this)">
                                                <span class="shape">클릭하여 사진을 추가하세요</span>
                                            </label>
                                        </div>
                                    </div>
                                    <!-- script add item -->
                                </div>
                                <button class="btn-black" type="button" onclick="fnAddLookbook()">시즌추가</button>
                            </div>
                            <input type="hidden" name="season_count" id="season_count">
                        </div>
                        <!-- 06 연락처 -->
                        <div class="tab-contents-box">
                            <div class="sns-wrap">
                                <div class="sns-item">
                                    <span class="item-name">이메일</span>
                                    <input type="email" class="input-field" name="email"  placeholder="이메일을 입력하세요">
                                    <label class="checkbox-wrap">
                                        <input type="checkbox" name="email_hidden" value="1">
                                        <p>숨기기</p>
                                    </label>
                                </div>
                                <div class="sns-item">
                                    <span class="item-name">전화번호</span>
                                    <input type="tel" class="input-field" name="phone" placeholder="전화번호를 입력하세요">
                                    <label class="checkbox-wrap">
                                        <input type="checkbox" name="phone_hidden" value="1">
                                        <p>숨기기</p>
                                    </label>
                                </div>
                                <div class="sns-item">
                                    <span class="item-name">홈페이지</span>
                                    <input type="text" class="input-field" name="homepage" placeholder="홈페이지 url을 입력하세요">
                                    <label class="checkbox-wrap">
                                        <input type="checkbox" name="homepage_hidden" value="1">
                                        <p>숨기기</p>
                                    </label>
                                </div>
                                <div class="sns-item">
                                    <span class="item-name">페이스북</span>
                                    <input type="text" class="input-field" name="facebook" placeholder="페이스북 계정을 입력하세요">
                                    <label class="checkbox-wrap">
                                        <input type="checkbox" name="facebook_hidden" value="1">
                                        <p>숨기기</p>
                                    </label>
                                </div>
                                <div class="sns-item">
                                    <span class="item-name">트위터</span>
                                    <input type="text" class="input-field" name="twitter" placeholder="트위터 계정을 입력하세요">
                                    <label class="checkbox-wrap">
                                        <input type="checkbox" name="twitter_hidden" value="1">
                                        <p>숨기기</p>
                                    </label>
                                </div>
                                <div class="sns-item">
                                    <span class="item-name">인스타그램</span>
                                    <input type="text" class="input-field" name="instagram" placeholder="인스타그램 계정을 입력하세요">
                                    <label class="checkbox-wrap">
                                        <input type="checkbox" name="ingstagram_hidden" value="1">
                                        <p>숨기기</p>
                                    </label>
                                </div>
                            </div>
                        </div>
                </div>
                <!--// tab contents -->
                    <input type="hidden" id="history_array" name="history_array">
                    <input type="hidden" id="awards_array" name="awards_array">
                    <input type="hidden" id="society_array" name="society_array">
                </form>
            </div>
        </div>

    </main>
    <script type="text/javascript" src="{{asset('js/portfolioCreate.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/yearpicker.js')}}"></script>
    <script type="text/javascript">

        $(document).ready(function() {
            $(".yearpicker").yearpicker({
                year: 2020,
                startYear: 1900,
                endYear: 2200,
            });
        });

        var fn_portfolio_submit = function(f){
            // 히스토리
            gn_make_input_json('history_list' ,'input' , 'history_array');
            // 수상내역
            gn_make_input_json('award_list' ,'input' , 'awards_array');
            // 협회
            gn_make_input_json('society_list' ,'input' , 'society_array');

            document.getElementById('season_count').value =  document.getElementsByClassName('lookbook-season').length;
            return true;
        }
        var test = function(){
            gn_make_input_json('history_list' ,'input' , 'history_array');
        }
    </script>

@endsection
