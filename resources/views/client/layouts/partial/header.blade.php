<?php
?>

<header class="header">
    <!-- pc -->
    <div class="pc">
        <div class="inner">
            <h1 class="logo"><a href="/">피그리프</a></h1>
            <div class="menu-service">
                <div class="language-box">
                    <select class="language">
                        <option value="ko">ko</option>
                        <option value="en">en</option>
                        <option value="ch">ch</option>
                    </select>
                </div>
                @auth
                    @if(auth()->user()->is_designer())
                        <a href="{{ route('project.create') }}" class="btn-project">프로젝트 만들기</a>
                    @endif
                @endauth
            </div>
            <ul class="menu-user">
                @auth
                    <li><a href="/mypage_information">마이페이지</a></li>
                    <li><a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">로그아웃</a></li>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">@csrf</form>
                @else
                    <li><a href="/agree">회원가입</a></li>
                    <li><a href="/login">로그인</a></li>
                @endauth
                <li><button class="btn-search" onclick="fnOpenSearch();">검색</button></li>
            </ul>
        </div>
        <nav class="category-list">
            <ul class="category">
                <li>
                    <a href="/designer">Designer</a>
                </li>
                <li>
                    <a href="/brand">Brand</a>
                </li>
                {{--<li>
                    <a href="/news">News</a>
                </li>--}}
                <li>
                    <a href="{{route('menu.index',['type'=>'women'])}}">Women's Apparel</a>
                </li>
                <li>
                    <a href="{{route('menu.index',['type'=>'men'])}}">Men's Apparel</a>
                </li>
                <li>
                    <a href="{{route('menu.index',['type'=>'special'])}}">Special</a>
                </li>
                <li>
                    <a href="{{route('menu.index',['type'=>'collection'])}}">Collection</a>
                </li>
                <li>
                    <a href="{{route('menu.index',['type'=>'event'])}}">Event</a>
                </li>
            </ul>

        </nav>
    </div>
    <!-- //pc -->

    <!-- search -->
    <div class="search" id="gnb_search">
        <div class="inner">
            <form action="{{ route('search.index') }}" method="GET">
                <div class="search-box">
                    <input type="text" name="keyword" class="search-field" placeholder="검색">
                    <button class="btn-search">검색</button>
                </div>
            </form>
            <button class="btn-close" onclick="fnCloseSearch();">검색창닫기</button>
        </div>
    </div>
    <!-- //search -->

    <!-- mobile -->
    <div class="mobile">
        <h1 class="logo"><a href="/">피그리프</a></h1>
        <button class="btn-search" onclick="fnOpenSearch();">검색</button>
        <div class="btn-hamburger" onclick="fnOpenNav();">
            <span>menu</span>
        </div>
    </div>
    <div class="navigation" id="gnb_navigation">
        <div class="user-box">
            @auth
                <div class="auth-link-row">
                    <a href="/mypage_information" class="auth-link">마이페이지</a>
                </div>
                <div class="auth-link-row">
                    <a class="auth-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form-m').submit();">로그아웃</a>
                    <form id="logout-form-m" action="{{ route('logout') }}" method="POST" style="display: none;">@csrf</form>
                </div>
            @else
            <!-- login -->
                <p class="guide">로그인 해주세요.</p>
                <div class="auth-link-row">
                    <a href="/login" class="auth-link">로그인</a>
                </div>
                <!-- //login -->
            @endauth

        </div>
        <div class="category-box">
            <div class="category-title">Category</div>
            <ul class="category">
                <li><a href="/designer">designer</a></li>
                <li><a href="/brand">brand</a></li>
                {{--<li><a href="/news">news</a></li>--}}
            </ul>
            <ul class="category">
                <li><a href="{{route('menu.index',['type'=>'women'])}}">women's apparel</a></li>
                <li><a href="{{route('menu.index',['type'=>'men'])}}">men's apparel</a></li>
            </ul>
            <ul class="category">
                <li><a href="{{route('menu.index',['type'=>'new'])}}">new</a></li>
                <li><a href="{{route('menu.index',['type'=>'special'])}}">special</a></li>
                <li><a href="{{route('menu.index',['type'=>'collection'])}}">collection</a></li>
                <li><a href="{{route('menu.index',['type'=>'event'])}}">event</a></li>
            </ul>
        </div>
        <div class="menu-box">
            <div>
                <p class="caption">Language</p>
                <div class="language-box">
                    <select class="language">
                        <option value="ko">ko</option>
                        <option value="en">en</option>
                        <option value="ch">ch</option>
                    </select>
                </div>
            </div>
            @auth
                @if(auth()->user()->is_designer())
                    <a href="{{ route('project.create') }}" class="btn-project">프로젝트 만들기</a>
                @endif
            @endauth
            <p class="copyright">Copyright ⓒ 2019 프론티어 All Right Reserved.</p>
        </div>
        <button class="nav-close" onclick="fnCloseNav();">모달닫기</button>
    </div>
    <div class="overlay" onclick="fnCloseOverlay(this);"></div>
    <!-- //mobile -->
</header>

