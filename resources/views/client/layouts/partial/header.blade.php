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
                <a href="{{ route('project.create') }}" class="btn-project">프로젝트 만들기</a>
            </div>
            <ul class="menu-user">
                <li><a href="/mypage_information">마이페이지</a></li>
                <li><a href="/agree">회원가입</a></li>
                <li><a href="/login">로그인</a></li>
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
                <li>
                    <a href="/news">News</a>
                </li>
                <li>
                    <a href="/women">Women's Apparel</a>
                    <ul class="category-sub">
                        <li><a href="">View All</a></li>
                        <li><a href="">Outer</a></li>
                        <li><a href="">Top</a></li>
                        <li><a href="">T-Shirt/Handie</a></li>
                        <li><a href="">Pants</a></li>
                        <li><a href="">Sports</a></li>
                        <li><a href="">Dress</a></li>
                        <li><a href="">Skirt</a></li>
                        <li><a href="">Shoes</a></li>
                        <li><a href="">Acc</a></li>
                    </ul>
                </li>
                <li>
                    <a href="/men">Men's Apparel</a>
                    <ul class="category-sub">
                        <li><a href="">View All</a></li>
                        <li><a href="">Outer</a></li>
                        <li><a href="">Top</a></li>
                        <li><a href="">T-Shirt/Handie</a></li>
                        <li><a href="">Pants</a></li>
                        <li><a href="">Sports</a></li>
                        <li><a href="">Shoes</a></li>
                        <li><a href="">Acc</a></li>
                    </ul>
                </li>
                <li>
                    <a href="/new">New</a>
                </li>
                <li>
                    <a href="/special">Special</a>
                </li>
                <li>
                    <a href="/collection">Collection</a>
                </li>
                <li>
                    <a href="/event">Event</a>
                </li>
            </ul>

        </nav>
    </div>
    <!-- //pc -->

    <!-- search -->
    <div class="search" id="gnb_search">
        <div class="inner">
            <form action="/search">
                <div class="search-box">
                    <input type="text" class="search-field" placeholder="검색">
                    <button class="btn-search">검색</button>
                </div>
            </form>
            <button class="btn-close" onclick="fnCloseSearch();">검색창닫기</button>
        </div>
    </div>
    <!-- //search -->

    <!-- mobile -->
    <div class="mobile">
        <h1 class="logo"><a href="#">피그리프</a></h1>
        <button class="btn-search" onclick="fnOpenSearch();">검색</button>
        <div class="btn-hamburger" onclick="fnOpenNav();">
            <span>menu</span>
        </div>
    </div>
    <div class="navigation" id="gnb_navigation">
        <div class="user-box">
            <!-- login -->
            <p class="guide">로그인 해주세요.</p>
            <a href="" class="login-link">로그인</a>
            <!-- //login -->
        </div>
        <div class="category-box">
            <div class="category-title">Category</div>
            <ul class="category">
                <li><a href="">designer</a></li>
                <li><a href="">brand</a></li>
                <li><a href="">designer</a></li>
            </ul>
            <ul class="category">
                <li><a href="">women's apparel</a></li>
                <li><a href="">men's apparel</a></li>
            </ul>
            <ul class="category">
                <li><a href="">new</a></li>
                <li><a href="">special</a></li>
                <li><a href="">collection</a></li>
                <li><a href="">event</a></li>
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
            <a href="" class="btn-project">프로젝트 만들기</a>
            <p class="copyright">Copyright ⓒ 2019 프론티어 All Right Reserved.</p>
        </div>
        <button class="nav-close" onclick="fnCloseNav();">모달닫기</button>
    </div>
    <div class="overlay" onclick="fnCloseOverlay(this);"></div>
    <!-- //mobile -->
</header>

