<html>
<head></head>
<body>
<form action="{{route('verified_email',['verified_token'=>$user->verified_token,'email'=>$user->email])}}" method="get">
    <input type="hidden" name="verified_token" value={{$user->verified_token}}>
    <input type="hidden" name="email" value={{$user->email}}>
    <div style="width:100%;max-width:800px;margin: auto;text-align: center;">
        <div style="padding:80px 0;">
            <div style="width: 50%;min-width:150px;max-width: 240px;margin: auto;margin-bottom:50px;">
                <img src="https://figleaf.co.kr/images/common/logo-horizontal-black.png" alt="logo">
            </div>
            <h2 style="font-size:32px;font-weight: 300;color:#181818;margin-bottom:40px;">안녕하세요 피그리프입니다.</h2>
            <p style="font-size:14px;color:#181818;font-weight:400;margin-bottom:40px;">
                회원가입을 진행하기 위해<br/>
                메일 하단의 [인증하기]버튼을 눌러 이메일을 인증해주세요</p>
            <button style="display: inline-block;background: #181818;color:white;vertical-align:middle;
                     padding:8px 16px;border-radius: 3px;font-weight: 500;text-transform: uppercase;
                     border:none;text-align: center;font-size:14px;width:240px;height:40px;box-sizing: border-box;
                     text-decoration: none;line-height: 30px;">이메일 인증하기</button>
        </div>
        <div style="padding:12px 0;border-top:1px solid #e0e0e0;">
            <p style="font-size:14px;color:#181818">본 메일은 발신 전용입니다. 궁금하신점이나 불편사항은 피그리프 홈페이지의 [고객센터]를 이용해주시기 바랍니다.</p>
            <p style="font-size:12px;color:#a8a8a8;margin-top:8px;">COPYRIGHT ⓒ 2020 피그리프 ALL RIGHT RESERVED</p>
        </div>
    </div>
</form>
</body>
</html>
