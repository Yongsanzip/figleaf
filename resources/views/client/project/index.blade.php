<?php
// url : project
?>
프로젝트 메인

{{--@include('client.project.partial.create.summary.index')
@include('client.project.partial.create.information.index')
@include('client.project.partial.create.story.index')
@include('client.project.partial.create.schedule.index')
@include('client.project.partial.create.introduce.index')
@include('client.project.partial.create.account.index')--}}

<script type="text/javascript" src="../se2/js/service/HuskyEZCreator.js" charset="utf-8"></script>

<textarea name="ir1" id="ir1" rows="10" cols="100">에디터에 기본으로 삽입할 글(수정 모드)이 없다면 이 value 값을 지정하지 않으시면 됩니다.</textarea>

<script type="text/javascript">
    var oEditors = [];
    nhn.husky.EZCreator.createInIFrame({
        oAppRef: oEditors,
        elPlaceHolder: "ir1",
        sSkinURI: "../se2/SmartEditor2Skin.html",
        fCreator: "createSEditor2",
        htParams: {
            fOnBeforeUnload: function () {
                bUseVerticalResizer : false
            }
        },
        fOnAppLoad: function () {
            $("iframe").css("width", "100%").css("height", "100%");
        }
    });
    function submitContents(elClickedObj) {
        // 에디터의 내용이 textarea에 적용된다.
        oEditors.getById["ir1"].exec("UPDATE_CONTENTS_FIELD", []);

        // 에디터의 내용에 대한 값 검증은 이곳에서
        // document.getElementById("ir1").value를 이용해서 처리한다.

    }
</script>

