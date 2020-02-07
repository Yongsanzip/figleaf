<?php
// url : /admin_banner/1
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

            <!-- table -->
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
                    <td>5</td>
                    <td>프로젝트</td>
                    <td>프로젝트 슬라이드 배너</td>
                    <td>2019-00-00 00:00</td>
                </tr>
                </tbody>
            </table>
            <!-- //table type1 -->

            <!-- banner form -->
            <div class="form-banner mt-20">
                <!-- group -->
                <div class="form-banner-group">
                    <div class="banner-number">1</div>
                    <div class="banner-table">
                        <table class="table-info">
                            <colgroup>
                                <col width="120px">
                                <col>
                            </colgroup>
                            <thead></thead>
                            <tbody>
                            <tr>
                                <th>사용여부</th>
                                <td>
                                    <label class="checkbox-group">
                                        <input type="radio" checked>
                                        <p>사용</p>
                                    </label>
                                </td>
                            </tr>
                            <tr>
                                <th>이미지 업로드</th>
                                <td>
                                    <input type="file" class="text-field">
                                    <p class="text-caption">10MB 미만의 jpg, png 파일. 000px * 000px에 최적화 되어 있습니다.</p>
                                </td>
                            </tr>
                            <tr>
                                <th>링크 URL</th>
                                <td>
                                    <input type="text" class="text-field w-100" placeholder="URL을 입력해주세요">
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>

                </div>
                <!-- group -->
                <div class="form-banner-group">
                    <div class="banner-number">2</div>
                    <div class="banner-table">
                        <table class="table-info">
                            <colgroup>
                                <col width="120px">
                                <col>
                            </colgroup>
                            <thead></thead>
                            <tbody>
                            <tr>
                                <th>사용여부</th>
                                <td>
                                    <label class="checkbox-group">
                                        <input type="radio" checked>
                                        <p>사용</p>
                                    </label>
                                    <label class="checkbox-group">
                                        <input type="radio">
                                        <p>미사용</p>
                                    </label>
                                </td>
                            </tr>
                            <tr>
                                <th>이미지 업로드</th>
                                <td>
                                    <input type="file" class="text-field">
                                    <p class="text-caption">10MB 미만의 jpg, png 파일. 000px * 000px에 최적화 되어 있습니다.</p>
                                </td>
                            </tr>
                            <tr>
                                <th>링크 URL</th>
                                <td>
                                    <input type="text" class="text-field w-100" placeholder="URL을 입력해주세요">
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>

                </div>
                <!-- group -->
                <div class="form-banner-group">
                    <div class="banner-number">3</div>
                    <div class="banner-table">
                        <table class="table-info">
                            <colgroup>
                                <col width="120px">
                                <col>
                            </colgroup>
                            <thead></thead>
                            <tbody>
                            <tr>
                                <th>사용여부</th>
                                <td>
                                    <label class="checkbox-group">
                                        <input type="radio" checked>
                                        <p>사용</p>
                                    </label>
                                    <label class="checkbox-group">
                                        <input type="radio">
                                        <p>미사용</p>
                                    </label>
                                </td>
                            </tr>
                            <tr>
                                <th>이미지 업로드</th>
                                <td>
                                    <input type="file" class="text-field">
                                    <p class="text-caption">10MB 미만의 jpg, png 파일. 000px * 000px에 최적화 되어 있습니다.</p>
                                </td>
                            </tr>
                            <tr>
                                <th>링크 URL</th>
                                <td>
                                    <input type="text" class="text-field w-100" placeholder="URL을 입력해주세요">
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>

                </div>
                <!-- group -->
                <div class="form-banner-group">
                    <div class="banner-number">4</div>
                    <div class="banner-table">
                        <table class="table-info">
                            <colgroup>
                                <col width="120px">
                                <col>
                            </colgroup>
                            <thead></thead>
                            <tbody>
                            <tr>
                                <th>사용여부</th>
                                <td>
                                    <label class="checkbox-group">
                                        <input type="radio" checked>
                                        <p>사용</p>
                                    </label>
                                    <label class="checkbox-group">
                                        <input type="radio">
                                        <p>미사용</p>
                                    </label>
                                </td>
                            </tr>
                            <tr>
                                <th>이미지 업로드</th>
                                <td>
                                    <input type="file" class="text-field">
                                    <p class="text-caption">10MB 미만의 jpg, png 파일. 000px * 000px에 최적화 되어 있습니다.</p>
                                </td>
                            </tr>
                            <tr>
                                <th>링크 URL</th>
                                <td>
                                    <input type="text" class="text-field w-100" placeholder="URL을 입력해주세요">
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>

                </div>
                <!-- group -->
                <div class="form-banner-group">
                    <div class="banner-number">5</div>
                    <div class="banner-table">
                        <table class="table-info">
                            <colgroup>
                                <col width="120px">
                                <col>
                            </colgroup>
                            <thead></thead>
                            <tbody>
                            <tr>
                                <th>사용여부</th>
                                <td>
                                    <label class="checkbox-group">
                                        <input type="radio" checked>
                                        <p>사용</p>
                                    </label>
                                    <label class="checkbox-group">
                                        <input type="radio">
                                        <p>미사용</p>
                                    </label>
                                </td>
                            </tr>
                            <tr>
                                <th>이미지 업로드</th>
                                <td>
                                    <input type="file" class="text-field">
                                    <p class="text-caption">10MB 미만의 jpg, png 파일. 000px * 000px에 최적화 되어 있습니다.</p>
                                </td>
                            </tr>
                            <tr>
                                <th>링크 URL</th>
                                <td>
                                    <input type="text" class="text-field w-100" placeholder="URL을 입력해주세요">
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
            <!-- //banner form -->


            <div class="row text-right">
                <button class='btn-white btn-m w-100px'>목록</button>
                <button class='btn-black btn-m w-100px'>저장</button>
            </div>
        </div>
        <!-- //contesnts-inner -->
    </div>

@endsection
