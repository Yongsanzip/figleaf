<?php
// url : /email_find
// 이메일 찾기 버튼 누르면 success 페이지로 이동
?>
<form method="POST" action="{{ route('email_find.store') }}">
    @csrf
    <button>이메일 찾기</button>
</form>
