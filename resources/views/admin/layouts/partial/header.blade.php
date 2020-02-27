<?php
?>
@auth
<header class="header">
    <a href="" class="logo">
{{--        <img src="{{asset('images/common/logo-horizontal-black.png')}}" alt="">--}}
    </a>
    <h1 class="gnb-title">Figleaf Admin Page</h1>
    <div class="menu-login">
        <p>안녕하세요, {{auth()->user()->name}}님!</p>
        <a href="{{route('logout')}}" class="btn-white btn-s"  onclick="event.preventDefault(); document.getElementById('logout-form').submit();">로그아웃</a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">@csrf</form>
    </div>
</header>
@endauth
