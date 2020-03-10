<?php
// url : /admin_contents/1
?>
@extends('admin.layouts.app')
@section('content')

    <div class="contents-wrap">
        <!-- contesnts-inner -->
        <div class="contents-inner">
            <!-- headline -->
            <div class="headline">
                <h2>콘텐츠</h2>
            </div>
            <!-- //headline -->

            <!-- table -->
            <table class="table-data table-normal">
                <colgroup>
                    <col width="100px">
                    <col>
                    <col>
                </colgroup>
                <thead>
                <tr>
                    <th>No.</th>
                    <th>메뉴</th>
                    <th>수정일</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>{{ $menu->id }}</td>
                    <td>{{ $menu->menu }}</td>
                    <td>2019-00-00 00:00</td>
                </tr>
                </tbody>
            </table>
            <!-- //table type1 -->

            <div class="contents-management mt-48">
                <!-- dropdown -->
                <div class="dropdown-group">
                    <div class="dropdown-header">
                        <p class="dropdown-title">{{ $menu->menu }}</p>
                        <p class="dropdown-caption">총 120명의 디자이너</p>
                        <div class="btn-drop"></div>
                    </div>

                    {{--<div class="dropdown-contents">--}}

                        <table class="table-data table-normal">
                            <colgroup>
                                <col width="100px">
                                <col>
                                <col>
                            </colgroup>
                            <thead>
                            <tr>
                                <th></th>
                                <th>디자이너명</th>
                                <th>{{ $datas->first()->brand ? "브랜드명" : "프로젝트명" }}</th>
                                <th>바로가기</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($datas as $data)
                            <tr>
                                <td><input type="checkbox" name="contents_id[]" class="contentsId" value="{{ $data->id }}" {{ $data->contentDetail($data->id, $menu->id) ?  'checked' : '' }}></td>
                                <td>{{ $data->user->name }}</td>
                                <td>{{ $data->brand ? $data->brand->name_ko : $data->title }}</td>
                                <td>
                                    <a href="{{ $data->brand ? '/admin_portfolio/'.$data->id : '/admin_project/'.$data->id }}" class="btn-s btn-white">바로가기</a>
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>

                    {{--</div>--}}
                </div>
                <!-- //dropdown -->
                <!-- dropdown -->
                {{--<div class="dropdown-group">
                    <div class="dropdown-header">
                        <p class="dropdown-title">brand</p>
                        <p class="dropdown-caption">총 120개의 브랜드</p>
                        <div class="btn-drop"></div>
                    </div>
                    <div class="dropdown-contents">
                        <div class="row contents-option">
                            <div class="contents-number">1</div>
                            <div class="contents-input">
                                검색하는거
                            </div>
                        </div>
                        <div class="row contents-option">
                            <div class="contents-number">2</div>
                            <div class="contents-input">
                                검색하는거
                            </div>
                        </div>
                        <div class="row contents-option">
                            <div class="contents-number">3</div>
                            <div class="contents-input">
                                검색하는거
                            </div>
                        </div>
                        <div class="row contents-option">
                            <div class="contents-number">4</div>
                            <div class="contents-input">
                                검색하는거
                            </div>
                        </div>
                        <div class="row contents-option">
                            <div class="contents-number">5</div>
                            <div class="contents-input">
                                검색하는거
                            </div>
                            <div class="contents-button">
                                <button class="btn-white btn-m w-100">삭제</button>
                            </div>
                        </div>
                        <div class="row text-center mt-20">
                            <button class="btn-black btn-m w-240px">추가</button>
                        </div>
                    </div>
                </div>--}}
                <!-- //dropdown -->
                <!-- dropdown -->
                {{--<div class="dropdown-group">
                    <div class="dropdown-header">
                        <p class="dropdown-title">recommend projects</p>
                        <p class="dropdown-caption">총 12개의 프로젝트</p>
                        <div class="btn-drop"></div>
                    </div>
                    <div class="dropdown-contents">
                        <div class="row contents-option">
                            <div class="contents-number">1</div>
                            <div class="contents-input">
                                검색하는거
                            </div>
                        </div>
                        <div class="row contents-option">
                            <div class="contents-number">2</div>
                            <div class="contents-input">
                                검색하는거
                            </div>
                        </div>
                        <div class="row contents-option">
                            <div class="contents-number">3</div>
                            <div class="contents-input">
                                검색하는거
                            </div>
                        </div>
                        <div class="row contents-option">
                            <div class="contents-number">4</div>
                            <div class="contents-input">
                                검색하는거
                            </div>
                        </div>
                        <div class="row contents-option">
                            <div class="contents-number">5</div>
                            <div class="contents-input">
                                검색하는거
                            </div>
                            <div class="contents-button">
                                <button class="btn-white btn-m w-100">삭제</button>
                            </div>
                        </div>
                        <div class="row text-center mt-20">
                            <button class="btn-black btn-m w-240px">추가</button>
                        </div>
                    </div>
                </div>--}}
                <!-- //dropdown -->
            </div>

            <div class="devider mt-80"></div>
            <div class="row text-right">
                <button type="button" class="btn-m btn-black mt-20" id="store_btn">저장하기</button>
            </div>
        </div>
        <!-- //contesnts-inner -->
    </div>

    <script>
        document.getElementById('store_btn').addEventListener('click', function () {
            var checkBox = document.getElementsByClassName('contentsId');
            var checkArr = [];

            for (var i = 0; i < checkBox.length; i++) {
                if (checkBox[i].checked === true) {
                    checkArr.push(checkBox[i].value);
                }
            }

            var error = function () {
                alert('오류');
            };

            var success = function () {
                location.reload();
                alert('완료되었습니다.');
            };

            var data = {
                'checked_contents' : checkArr,
                'status' : "{{ $menu->id }}"
            };

            if (confirm('저장하시겠습니까?')) {
                callAjax('POST',true,'/admin_contents',"JSON",'JSON',data,error,success);
            }
        });
    </script>

@endsection
