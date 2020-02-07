<?php
?>
@extends('admin.layouts.app')
@section('content')

    <div class="contents-wrap">
        <!-- contesnts-inner -->
        <div class="contents-inner">

            <!-- headline -->
            <div class="headline">
                <h2>공지사항</h2>
            </div>
            <!-- //headline -->


            <div class="row">
                <input type="text" class="text-field w-100" placeholder="제목을 입력해주세요" autofocus>
            </div>

            <!-- text editor -->
            <div class="row mt-20">
                텍스트에디터
            </div>
            <!-- //text editor -->

            <div class="row mt-20 text-right">
                <button class="btn-white btn-m w-100px">삭제</button>
                <button class="btn-black btn-m w-100px">등록</button>
            </div>
        </div>
        <!-- //contesnts-inner -->
    </div>

@endsection
