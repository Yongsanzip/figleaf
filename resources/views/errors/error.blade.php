<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>{{ $title }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <style>
        * { line-height: 1.5; margin: 0; }
        html { color: #888; font-family: sans-serif; text-align: center; }
        body { left: 50%; top: 50%; width: 500px; margin: -100px 0 0 -250px; position: absolute; }
        h1 { color: #555; font-size: 2em; font-weight: 400; }
        p { line-height: 1.5; }
        @media only screen and (max-width: 400px) {
            body { margin: 10px auto; position: static; width: 95%; }
            h1 { font-size: 1.5em; }
        }
        .btn-black{
            background: #4a4a4a;
            color: #ffffff;
            border: none;
            font-size: 15px;
            text-align: center;
            font-weight: 500;
            padding: 0 12px;
            height: 40px;
            cursor: pointer;
            border-radius: 2px;
            transition: background 0.4s;
            letter-spacing: -0.4px;
            margin-top: 10px;
        }
    </style>
</head>
<body>
<h1>{{ $title }}</h1>
<p>{{ $description }}</p>
<p>
    <button class="btn-black" onclick="history.back();">뒤로가기</button>
</p>
</body>
</html>
