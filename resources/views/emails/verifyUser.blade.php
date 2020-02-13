<!DOCTYPE html>
<html>
<meta charset="utf-8">
<head>
    <title>Welcome Email</title>
</head>
<body>
<table style="width:100%;border-top:2px solid #00bfa5;border-bottom:1px solid #000;border-spacing:0">
    <tr>
        <td height="50"></td>
    </tr>
    <tr>
        <td width="50"></td>
        <td>
            <table style="width:100%;text-align:center;font-size:16px;border-spacing:0">
                <tr>
                    <td height="20"></td>
                </tr>
                <tr>
                    <td>
                        <img src="{{asset('../images/common/logo-horizontal-black.png')}}" alt="logo">
                    </td>
                </tr>
                <tr>
                    <td height="20"></td>
                </tr>
                <tr>
                    <td>
                        <p style="font-size:24px;">感谢您注册<strong style="color: #00bfa5">STARPOLL</strong></p>
                        <p style="color:#000;">您要验证的ID为 : {{$user->email}}</p>
                        <p style="color:#000;">认证编号 : <strong style="font-size: 20px;">{{$user->verify_token}}</strong></p>
                        <p style="color:#000;">按下面的按钮激活。</p>
                    </td>
                </tr>
                <tr>
                    <td height="20"></td>
                </tr>

                <tr>
                    <td height="50"></td>
                </tr>
            </table>
        </td>
        <td width="50"></td>
    </tr>
</table>

</body>

</html>
