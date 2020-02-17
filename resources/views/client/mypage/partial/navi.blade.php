<!-- menu list -->
<ul class="menu-list">
    <li {{$tab == 'info' ? 'class=on' : ''}}>
        <a href="{{route('mypage_information.index')}}">회원정보</a>
    </li>
    <li {{$tab == 'support' ? 'class=on' : ''}}>
        <a href="{{route('mypage_support.index')}}">후원 현황</a>
    </li>
    <li {{$tab == 'project' ? 'class=on' : ''}}>
        <a href="{{route('mypage_project.index')}}">내가 만든 프로젝트</a>
    </li>
    <li {{$tab == 'community' ? 'class=on' : ''}}>
        <a href="{{route('mypage_community.index')}}">작성한 커뮤니티</a>
    </li>
    <li {{$tab == 'message' ? 'class=on' : ''}}>
        <a href="{{route('mypage_message.index')}}">메시지</a>
    </li>
    <li {{$tab == 'question' ? 'class=on' : ''}}>
        <a href="{{route('mypage_question.index')}}">1:1 문의</a>
    </li>
    <li {{$tab == 'portfolio' ? 'class=on' : ''}}>
        <a href="{{route('mypage_portfolio.index')}}">포트폴리오</a>
    </li>
</ul>
<!--// menu list -->
