<?php
// url: /admin_notice/create
?>
@extends('admin.layouts.app')
@section('content')
    <!-- include libraries(jQuery, bootstrap) -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js"></script>
    <!-- include summernote css/js-->
    <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.8/summernote.css" rel="stylesheet">
    <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.8/summernote.js"></script>
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
                    <textarea name="contents" id="summernote" cols="30" rows="10"></textarea>
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
    <script>
        $(document).ready(function() {
            $('#summernote').summernote({
                height: 300,                 // set editor height
                minHeight: null,             // set minimum height of editor
                maxHeight: null,             // set maximum height of editor
                focus: true                  // set focus to editable area after initializing summernote
            });
        });
    </script>
@endsection
