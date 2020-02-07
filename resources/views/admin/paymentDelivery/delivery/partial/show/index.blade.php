<?php
// url : /admin_delivery/1
?>
@extends('admin.layouts.app')
@section('content')

    <div class="contents-wrap">
        <!-- contesnts-inner -->
        <div class="contents-inner">
            <!-- headline -->
            <div class="headline">
                <h2>배송내역</h2>
            </div>
            <!-- //headline -->

            <div class="form-project">
                <h2 class="subtitle mr-4">35년 전통 최고 품질의 클래식 법랑을 현대적으로 재해석한 크로우 캐년</h2>
                <div class="badge badge-yellow">성공</div>
                <button class="btn-black btn-s h-28px float-right">프로젝트 더보기</button>
                <p class="project-text">
                    우리 풀이 이상은 일월과 속에 새 사막이다. 봄바람을 피는 이 황금시대를 힘차게 보라. 하여도 풀이 주는 위하여서 것은 열매를 능히 그림자는 생생하며, 교향악이다. 그림자는 우리의 얼마나 뿐이다. 그들의 얼마나 찬미를 황금시대를 부패뿐이다. 대고, 생생하며, 그들의 모래뿐일 현저하게 풀이 있는 미묘한 아니다. 없으면, 귀는 설레는 것이다. 커다란 이성은 공자는 만물은 튼튼하며, 현저하게 온갖 얼마나 피가 것이다. 영락과 쓸쓸한 남는 가슴에 그들은 지혜는 가장 얼음과 새 듣는다. 물방아 끓는 힘차게 이성은 아름다우냐?
                </p>
            </div>

            <div class="form-history mt-20">
                <h3 class="subtitle">총 18명의 후원자가 있습니다.</h3>
                <div class="row">
                    <select class="text-field w-150px mr-8">
                        <option disabled selected>- 배송여부 -</option>
                        <option>배송여부</option>
                        <option>배송여부</option>
                    </select>
                    <select class="text-field w-150px mr-8">
                        <option disabled selected>- 교환여부 -</option>
                        <option>교환여부</option>
                        <option>교환여부</option>
                    </select>
                    <button class="btn-white btn-s h-28px w-60px">변경</button>
                    <button class="btn-black btn-s h-28px float-right">주소/송장번호 수정</button>
                </div>

                <table class="table-data table-small mt-16">
                    <colgroup>
                        <col width="45px">
                        <col width="40px">
                        <col>
                        <col width="70px">
                        <col>
                        <col width="45px">
                        <col width="68px">
                        <col width="68px">
                        <col>
                        <col width="70px">
                        <col>
                        <col>
                        <col>
                        <col>
                    </colgroup>
                    <thead>
                    <tr>
                        <th><input type="checkbox" class="check-all"></th>
                        <th>No.</th>
                        <th>이메일</th>
                        <th>이름</th>
                        <th>옵션</th>
                        <th>수량</th>
                        <th>배송여부</th>
                        <th>교환여부</th>
                        <th>전화번호</th>
                        <th>우편번호</th>
                        <th>주소</th>
                        <th>배송시 요구사항</th>
                        <th>송장번호</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td><input type="checkbox" class="check"></td>
                        <td>18</td>
                        <td>lovecat@gmail.com</td>
                        <td>김아무개</td>
                        <td>스프라이트/M</td>
                        <td>15개</td>
                        <td>완료</td>
                        <td>요청</td>
                        <td>01012345678</td>
                        <td>
                            <p class="data-box">12345</p>
                            <input type="text" class="text-field edit-box" placeholder="우편번호">
                        </td>
                        <td class="text-left">
                            <p class="data-box">서울시 용산구 문배동 3-3 이안프리미어 아파트 105호</p>
                            <input type="text" class="text-field edit-box" placeholder="주소">
                        </td>
                        <td class="text-left">
                            <p class="data-box">부재중일때 경비실에 맡겨주세요</p>
                            <input type="text" class="text-field edit-box" placeholder="배송시 요구사항">
                        </td>
                        <td>
                            <p class="data-box">123456789123</p>
                            <input type="text" class="text-field edit-box" placeholder="송장번호">
                        </td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" class="check"></td>
                        <td>18</td>
                        <td>lovecat@gmail.com</td>
                        <td>김아무개</td>
                        <td>스프라이트/M</td>
                        <td>15개</td>
                        <td>완료</td>
                        <td>요청</td>
                        <td>01012345678</td>
                        <td>
                            <p class="data-box">12345</p>
                            <input type="text" class="text-field edit-box" placeholder="우편번호">
                        </td>
                        <td class="text-left">
                            <p class="data-box">서울시 용산구 문배동 3-3 이안프리미어 아파트 105호</p>
                            <input type="text" class="text-field edit-box" placeholder="주소">
                        </td>
                        <td class="text-left">
                            <p class="data-box">부재중일때 경비실에 맡겨주세요</p>
                            <input type="text" class="text-field edit-box" placeholder="배송시 요구사항">
                        </td>
                        <td>
                            <p class="data-box">123456789123</p>
                            <input type="text" class="text-field edit-box" placeholder="송장번호">
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>


        </div>
        <!-- //contesnts-inner -->
    </div>

@endsection
