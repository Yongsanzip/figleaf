<?php
// url : /register
// 가입하기 버튼 누르면 가입완료로 넘어감
?>
<form class="surface-wrap" id="registerForm" method="POST" action="{{ route('register') }}" aria-label="가입하기">
@csrf
    <button>가입하기</button>
</form>
