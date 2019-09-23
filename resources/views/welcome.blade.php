<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet"
              href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

                <div>
                    <ul class="depth language">
                        <li><a href="{{route('locale','ko')}}" data-value="ko">{{ __('test.lang_ko') }}</a></li>
                        <li><a href="{{route('locale','en')}}" data-value="en">{{ __('test.lang_en') }}</a></li>
                        <li><a href="{{route('locale','cn')}}" data-value="en">{{ __('test.lang_cn') }}</a></li>
                    </ul>
                </div>

                <input type="text" id="keyword">
            <div class="content">
                <div class="title m-b-md">
                    Laravel
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Docs</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://blog.laravel.com">Blog</a>
                    <a href="https://nova.laravel.com">Nova</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
        </div>

        <script>
            $(function() {	//화면 다 뜨면 시작
                var availableTags = [
                    "ActionScript",
                    "AppleScript",
                    "Asp",
                    "BASIC",
                    "C",
                    "C++",
                    "Clojure",
                    "COBOL",
                    "ColdFusion",
                    "Erlang",
                    "Fortran",
                    "Groovy",
                    "Haskell",
                    "Java",
                    "JavaScript",
                    "Lisp",
                    "Perl",
                    "PHP",
                    "Python",
                    "Ruby",
                    "Scala",
                    "Scheme",
                    "테스트",
                    "한글테스트",
                ];
                $('#keyword').autocomplete({
                    source: availableTags,
                    select: function (event, ui) {
                        //아이템 선택시 처리 코드
                    },
                    focus : function(event, ui) {	//포커스 가면
                        return false;//한글 에러 잡기용도로 사용됨
                    },
                    minLength: 1,// 최소 글자수
                    autoFocus: true, //첫번째 항목 자동 포커스 기본값 false
                    classes: {	//잘 모르겠음
                        "ui-autocomplete": "highlight"
                    },
                    delay: 500,	//검색창에 글자 써지고 나서 autocomplete 창 뜰 때 까지 딜레이 시간(ms)
//			disabled: true, //자동완성 기능 끄기
                    position: { my : "right top", at: "right bottom" },	//잘 모르겠음
                    close : function(event){	//자동완성창 닫아질때 호출
                        console.log(event);
                    }

                });
            });
        </script>
    </body>
</html>

