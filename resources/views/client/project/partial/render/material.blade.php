<?php
?>
<div class="fabric-name" id="material_category">
    <select class="select text-field" id="material">
        @foreach($datas as $data)
            <option value="{{ $data->id }}">{{ $data->name }}</option>
        @endforeach
    </select>
</div>
