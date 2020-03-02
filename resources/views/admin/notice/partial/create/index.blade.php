<?php
// url: /admin_notice/create
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

            <form action="{{route('admin_notice.store')}}" method="POST">
                @csrf
                <div class="row">
                    <input type="text" name="title" class="text-field w-100" placeholder="제목을 입력해주세요" autofocus>
                    <label for="up_fix" class="checkbox-group">상단고정
                        <input type="checkbox" name="up_fix" id="up_fix">
                    </label>
                </div>

                <!-- text editor -->
                <div class="row mt-20">
                    @csrf
                    @trix(\App\Notice::class, 'content')
                </div>
                <!-- //text editor -->
                <div class="row mt-20 text-right">
                    <button class="btn-white btn-m w-100px">삭제</button>
                    <button type="submit" class="btn-black btn-m w-100px">등록</button>
                </div>
            </form>
        </div>
        <!-- //contesnts-inner -->
    </div>

@endsection
