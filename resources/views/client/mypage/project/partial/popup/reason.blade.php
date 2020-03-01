<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../scss/reset.css">
    <link rel="stylesheet" href="../scss/layout.css">
    <link rel="stylesheet" href="../scss/client.css">
    <script src="../js/common.js"></script>
    <title>Document</title>

</head>
<body>
<div class="wrap">
    <main class="popup">
        <h1 class="headline">{{ $data->title }}</h1>
        <div class="row">
            <h2 class="title">반려사유</h2>
            <p class="text">
                {{ $data->reason }}
            </p>
        </div>
    </main>
</div>
</body>
</html>
