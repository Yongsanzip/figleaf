<?php
// url : /admin_banner
?>
@extends('admin.layouts.app')
@section('content')

    <div class="contents-wrap">
        <!-- contesnts-inner -->
        <div class="contents-inner">

            <!-- headline -->
            <div class="headline">
                <h2>배너</h2>
            </div>
            <!-- //headline -->

            <!-- table 20 row-->
            <table class="table-data table-normal">
                <colgroup>
                    <col width="100px">
                    <col width="240px">
                    <col>
                    <col>
                </colgroup>
                <thead>
                <tr>
                    <th>No.</th>
                    <th>배너위치</th>
                    <th>배너명</th>
                    <th>수정일</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>1</td>
                    <td>HOME(고정)</td>
                    <td>최상단 띠배너</td>
                    <td>2019-00-00 00:00</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>HOME</td>
                    <td>HOME 슬라이드 배너</td>
                    <td>2019-00-00 00:00</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>HOME</td>
                    <td>중간 띠배너</td>
                    <td>2019-00-00 00:00</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>HOME</td>
                    <td>하단 띠배너</td>
                    <td>2019-00-00 00:00</td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>프로젝트</td>
                    <td>프로젝트 슬라이드 배너</td>
                    <td>2019-00-00 00:00</td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>디자이너</td>
                    <td>디자이너 슬라이드 배너</td>
                    <td>2019-00-00 00:00</td>
                </tr>
                <tr>
                    <td>7</td>
                    <td>브랜드</td>
                    <td>브랜드 슬라이드 배너</td>
                    <td>2019-00-00 00:00</td>
                </tr>
                <tr>
                    <td>8</td>
                    <td>뉴스</td>
                    <td>뉴스 슬라이드 배너</td>
                    <td>2019-00-00 00:00</td>
                </tr>
                <tr>
                    <td>9</td>
                    <td>NEW</td>
                    <td>NEW 슬라이드 배너</td>
                    <td>2019-00-00 00:00</td>
                </tr>
                <tr>
                    <td>10</td>
                    <td>SPECIAL</td>
                    <td>SPECIAL 슬라이드 배너</td>
                    <td>2019-00-00 00:00</td>
                </tr>
                <tr>
                    <td>11</td>
                    <td>COLLECTION</td>
                    <td>COLLECTION 슬라이드 배너</td>
                    <td>2019-00-00 00:00</td>
                </tr>
                <tr>
                    <td>12</td>
                    <td>EVENT</td>
                    <td>EVENT 슬라이드 배너</td>
                    <td>2019-00-00 00:00</td>
                </tr>
                </tbody>
            </table>
            <!-- //table type1 -->

        </div>
        <!-- //contesnts-inner -->
    </div>

@endsection
