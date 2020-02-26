<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Figleaf Admin Page</title>
    <link rel="stylesheet" href="{{asset('html/admin/assets/css/reset.css')}}">
    <link rel="stylesheet" href="{{asset('html/admin/assets/css/style.css')}}">
    <script src="{{asset('html/admin/assets/js/style.js')}}"></script>
    <script src="{{ asset('/js/adminProject.js') }}"></script>
    <script src="{{ asset('/js/common.js') }}"></script>
</head>

<body>
<form action="{{ route('admin_note.store') }}" method="POST" id="adminNoteForm">
    @csrf
    <section id="popup" class="w-600px">
        <h2 class="popup-title">비고 작성하기</h2>
        <textarea class="textarea mh-250px required" name="contents" data-title="비고 내용" placeholder="내용을 입력해주세요"></textarea>
        <input type="hidden" name="project_id" id="project_id">
        <div class="row text-right mt-20">
            <button type="button" class="btn-m btn-black w-120px" onclick="note(this.parentElement.parentElement); return false;">비고 작성하기</button>
        </div>
    </section>
</form>
<script>
    document.getElementById('project_id').value = window.opener.document.getElementById("project_id").value;
</script>
</body>

</html>
