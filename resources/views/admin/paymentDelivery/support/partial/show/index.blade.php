<?php
// url : /admin_support/1
?>
@extends('admin.layouts.app')
@section('content')

    <div class="contents-wrap">
        <!-- contesnts-inner -->
        <div class="contents-inner">
            <!-- headline -->
            <div class="headline">
                <h2>후원내역</h2>
            </div>
            <!-- //headline -->

            <div class="form-project">
                <h2 class="subtitle mr-4">35년 전통 최고 품질의 클래식 법랑을 현대적으로 재해석한 크로우 캐년</h2>
                <div class="badge badge-gray">실패</div>
                <button class="btn-black btn-s h-28px float-right">프로젝트 더보기</button>
                <p class="project-text">
                    우리 풀이 이상은 일월과 속에 새 사막이다. 봄바람을 피는 이 황금시대를 힘차게 보라. 하여도 풀이 주는 위하여서 것은 열매를 능히 그림자는 생생하며, 교향악이다. 그림자는 우리의 얼마나 뿐이다. 그들의 얼마나 찬미를 황금시대를 부패뿐이다. 대고, 생생하며, 그들의 모래뿐일 현저하게 풀이 있는 미묘한 아니다. 없으면, 귀는 설레는 것이다. 커다란 이성은 공자는 만물은 튼튼하며, 현저하게 온갖 얼마나 피가 것이다. 영락과 쓸쓸한 남는 가슴에 그들은 지혜는 가장 얼음과 새 듣는다. 물방아 끓는 힘차게 이성은 아름다우냐?
                </p>
            </div>

            <div class="form-history mt-20">
                <h3 class="subtitle">총 18명의 후원자가 있습니다.</h3>
                <div class="row">
                    <select class="text-field w-150px mr-8">
                        <option disabled selected>- 검색기준 -</option>
                        <option>검색기준</option>
                        <option>검색기준</option>
                    </select>
                    <select class="text-field w-150px mr-8">
                        <option disabled selected>- 검색기준 -</option>
                        <option>검색기준</option>
                        <option>검색기준</option>
                    </select>
                    <button class="btn-white btn-s h-28px w-60px">변경</button>
                    <button class="btn-black btn-s h-28px float-right">옵션/계좌 수정</button>
                </div>

                <table class="table-data table-small mt-16">
                    <colgroup>
                        <col width="45px">
                        <col width="40px">
                        <col>
                        <col>
                        <col width="70px">
                        <col>
                        <col width="50px">
                        <col width="80px">
                        <col width="80px">
                        <col>
                        <col>
                        <col>
                    </colgroup>
                    <thead>
                    <tr>
                        <th><input type="checkbox" class="check-all"></th>
                        <th>No.</th>
                        <th>후원 일시</th>
                        <th>이메일</th>
                        <th>이름</th>
                        <th>옵션</th>
                        <th>수량</th>
                        <th>취소여부</th>
                        <th>환불여부</th>
                        <th>은행명</th>
                        <th>계좌번호</th>
                        <th>예금주명</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td><input type="checkbox" class="check"></td>
                        <td>18</td>
                        <td>2019-00-00 00:00</td>
                        <td>lovecat@gmail.com</td>
                        <td>김선영</td>
                        <td>
                            <p class="data-box">그라데이션 | S</p>
                            <select class="text-field edit-box">
                                <option disabled selected>옵션|사이즈</option>
                                <option>스프라이트 | L</option>
                                <option>스프라이트 | M</option>
                                <option>스프라이트 | S</option>
                            </select>
                        </td>
                        <td>
                            <p class="data-box">12</p>
                            <input type="number" class="text-field edit-box">
                        </td>
                        <td>-</td>
                        <td>-</td>
                        <td>
                            <p class="data-box">우리은행</p>
                            <select class="text-field edit-box">
                                <option disabled selected>은행 선택</option>
                                <option>기업은행</option>
                                <option>신한은행</option>
                                <option>우리은행</option>
                            </select>
                        </td>
                        <td>
                            <p class="data-box">321987654321</p>
                            <input type="text" class="text-field edit-box" placeholder="계좌번호">
                        </td>
                        <td>
                            <p class="data-box">김아무개</p>
                            <input type="text" class="text-field edit-box" placeholder="예금주명">
                        </td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" class="check"></td>
                        <td>17</td>
                        <td>2019-00-00 00:00</td>
                        <td>lovecat@gmail.com</td>
                        <td>김선영</td>
                        <td>
                            <p class="data-box">그라데이션 | S</p>
                            <select class="text-field edit-box">
                                <option disabled selected>옵션|사이즈</option>
                                <option>스프라이트 | L</option>
                                <option>스프라이트 | M</option>
                                <option>스프라이트 | S</option>
                            </select>
                        </td>
                        <td>
                            <p class="data-box">12</p>
                            <input type="number" class="text-field edit-box">
                        </td>
                        <td>-</td>
                        <td>-</td>
                        <td>
                            <p class="data-box">우리은행</p>
                            <select class="text-field edit-box">
                                <option disabled selected>은행 선택</option>
                                <option>기업은행</option>
                                <option>신한은행</option>
                                <option>우리은행</option>
                            </select>
                        </td>
                        <td>
                            <p class="data-box">321987654321</p>
                            <input type="text" class="text-field edit-box" placeholder="계좌번호">
                        </td>
                        <td>
                            <p class="data-box">김아무개</p>
                            <input type="text" class="text-field edit-box" placeholder="예금주명">
                        </td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" class="check"></td>
                        <td>16</td>
                        <td>2019-00-00 00:00</td>
                        <td>lovecat@gmail.com</td>
                        <td>김선영</td>
                        <td>
                            <p class="data-box">그라데이션 | S</p>
                            <select class="text-field edit-box">
                                <option disabled selected>옵션|사이즈</option>
                                <option>스프라이트 | L</option>
                                <option>스프라이트 | M</option>
                                <option>스프라이트 | S</option>
                            </select>
                        </td>
                        <td>
                            <p class="data-box">12</p>
                            <input type="number" class="text-field edit-box">
                        </td>
                        <td>-</td>
                        <td>-</td>
                        <td>
                            <p class="data-box">우리은행</p>
                            <select class="text-field edit-box">
                                <option disabled selected>은행 선택</option>
                                <option>기업은행</option>
                                <option>신한은행</option>
                                <option>우리은행</option>
                            </select>
                        </td>
                        <td>
                            <p class="data-box">321987654321</p>
                            <input type="text" class="text-field edit-box" placeholder="계좌번호">
                        </td>
                        <td>
                            <p class="data-box">김아무개</p>
                            <input type="text" class="text-field edit-box" placeholder="예금주명">
                        </td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" class="check"></td>
                        <td>14</td>
                        <td>2019-00-00 00:00</td>
                        <td>lovecat@gmail.com</td>
                        <td>김선영</td>
                        <td>
                            <p class="data-box">그라데이션 | S</p>
                            <select class="text-field edit-box">
                                <option disabled selected>옵션|사이즈</option>
                                <option>스프라이트 | L</option>
                                <option>스프라이트 | M</option>
                                <option>스프라이트 | S</option>
                            </select>
                        </td>
                        <td>
                            <p class="data-box">12</p>
                            <input type="number" class="text-field edit-box">
                        </td>
                        <td>-</td>
                        <td>-</td>
                        <td>
                            <p class="data-box">우리은행</p>
                            <select class="text-field edit-box">
                                <option disabled selected>은행 선택</option>
                                <option>기업은행</option>
                                <option>신한은행</option>
                                <option>우리은행</option>
                            </select>
                        </td>
                        <td>
                            <p class="data-box">321987654321</p>
                            <input type="text" class="text-field edit-box" placeholder="계좌번호">
                        </td>
                        <td>
                            <p class="data-box">김아무개</p>
                            <input type="text" class="text-field edit-box" placeholder="예금주명">
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>


        </div>
        <!-- //contesnts-inner -->
    </div>

@endsection
