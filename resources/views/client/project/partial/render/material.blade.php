<?php
?>
<div class="fabric-name">
    <select class="select" name="material[]" id="material">
        @foreach($datas as $data)
            <option value="{{ $data->id }}">{{ $data->name }}</option>
        @endforeach
    </select>
</div>
