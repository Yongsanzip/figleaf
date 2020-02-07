<?php
?>
@extends('admin.layouts.app')
@section('content')

    <div class="contents-wrap">
        <!-- contesnts-inner -->
        <div class="contents-inner">
            <!-- headline -->
            <div class="headline">
                <h2>뉴스등록</h2>
            </div>
            <!-- //headline -->

            <div class="row news-form-url">
                <div class="icon-link"></div>
                <input type="text" class="text-field" placeholder="뉴스 URL을 입력해주세요">
                <button class="btn-white btn-s">불러오기</button>
            </div>

            <div class="devider mt-20 mb-20"></div>

            <table class="table-info">
                <colgroup>
                    <col width="120px">
                    <col>
                </colgroup>
                <thead></thead>
                <tbody>
                <tr>
                    <th class="text-right">제목</th>
                    <td>
                        <input type="text" class="text-field w-100" placeholder="제목을 입력해주세요">
                    </td>
                </tr>
                <tr>
                    <th class="text-right">출처</th>
                    <td>
                        <input type="text" class="text-field w-100" placeholder="출처를 입력해주세요">
                    </td>
                </tr>
                <tr>
                    <th class="text-right">등록일</th>
                    <td>
                        <input type="date" class="text-field w-100" placeholder="">
                    </td>
                </tr>
                </tbody>
            </table>

            <div class="row mt-20">
                <h3 class="subtitle">뉴스 이미지 선택하기</h3>
                <label class="checkbox-group">
                    <input type="checkbox">
                    <p>이미지 없음</p>
                </label>
                <label class="checkbox-group">
                    <input type="checkbox">
                    <p>수동으로 이미지 등록하기</p>
                </label>

            </div>
            <div class="news-form-thumbnail">
                <div class="news-thumbnail-item">
                    <img src="../assets/image/img-dummy-01.png" alt="">
                </div>
                <div class="news-thumbnail-item">
                    <img src="../assets/image/img-dummy-01.png" alt="">
                </div>
                <div class="news-thumbnail-item">
                    <img src="../assets/image/img-dummy-02.png" alt="">
                </div>
                <div class="news-thumbnail-item">
                    <img src="../assets/image/img-dummy-01.png" alt="">
                </div>
                <div class="news-thumbnail-item">
                    <img src="../assets/image/img-dummy-02.png" alt="">
                </div>
                <div class="news-thumbnail-item">
                    <img src="../assets/image/img-dummy-01.png" alt="">
                </div>
                <div class="news-thumbnail-item">
                    <img src="../assets/image/img-dummy-02.png" alt="">
                </div>
                <div class="news-thumbnail-item">
                    <img src="../assets/image/img-dummy-01.png" alt="">
                </div>
                <div class="news-thumbnail-item">
                    <img src="../assets/image/img-dummy-02.png" alt="">
                </div>
                <div class="news-thumbnail-item">
                    <img src="../assets/image/img-dummy-01.png" alt="">
                </div>
                <div class="news-thumbnail-item">
                    <img src="../assets/image/img-dummy-02.png" alt="">
                </div>
                <div class="news-thumbnail-item">
                    <img src="../assets/image/img-dummy-01.png" alt="">
                </div>
                <div class="news-thumbnail-item">
                    <img src="../assets/image/img-dummy-02.png" alt="">
                </div>
                <div class="news-thumbnail-item">
                    <img src="../assets/image/img-dummy-01.png" alt="">
                </div>
                <div class="news-thumbnail-item">
                    <img src="../assets/image/img-dummy-02.png" alt="">
                </div>
                <div class="news-thumbnail-item">
                    <img src="../assets/image/img-dummy-01.png" alt="">
                </div>
            </div>

            <div class="row text-right mt-20">
                <button class="btn-white btn-m w-100px">삭제</button>
                <button class="btn-black btn-m w-100px">등록</button>
            </div>
        </div>
        <!-- //contesnts-inner -->
    </div>

@endsection
