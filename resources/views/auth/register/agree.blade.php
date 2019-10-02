<?php
?>
agree
<input type="checkbox" id="check">체크
<button id="btn">Next</button>

<script>
    document.getElementById('btn').addEventListener('click', test);
    function test() {
        var check = document.getElementById('check').checked;
        window.location.href='/register'+'?check='+check;
    }
</script>
