<?php
?>
<nav class="lnb-wrap">
    <ul class="lnb" id="lnb">
        <li class="active">
            <a href="{{route('admin')}}" alt="">HOME</a>
        </li>
        <li>
            <a alt="">프로젝트</a>
            <ul class="lnb-child">
                <li class="active"><a href="{{route('admin_project.index',['status'=>1])}}">대기중</a></li>
                <li><a href="{{route('admin_project.index',['status'=>2])}}">진행중</a></li>
                <li><a href="{{route('admin_project.index',['status'=>3])}}">완료</a></li>
                <li><a href="{{route('admin_community.index')}}">커뮤니티</a></li>
            </ul>
        </li>
        <li>
            <a alt="">회원</a>
            <ul class="lnb-child">
                <li><a href="{{route('admin_information.index')}}">회원정보</a></li>
                <li><a href="{{route('admin_portfolio.index')}}">포트폴리오</a></li>
                {{--<li><a href="{{route('admin_message.index')}}">메세지</a></li>--}}
                <li><a href="{{route('admin_question.index')}}">1:1 문의</a></li>
            </ul>
        </li>
        <li>
            <a alt="">페이지</a>
            <ul class="lnb-child">
                {{--<li><a href="{{route('admin_banner.index')}}">배너</a></li>--}}
                <li><a href="{{route('admin_contents.index')}}">콘텐츠</a></li>
                {{--<li><a href="{{route('admin_news.index')}}">뉴스등록</a></li>--}}
            </ul>
        </li>
        <li>
            <a alt="">결제</a>
            <ul class="lnb-child">
                <li><a href="{{route('admin_support.index')}}">후원내역</a></li>
                {{--<li><a href="{{route('admin_delivery.index')}}">배송내역</a></li>--}}
            </ul>
        </li>
        {{--<li>
            <a href="{{route('admin_notice.index')}}" alt="">공지사항</a>
        </li>--}}

    </ul>
</nav>
