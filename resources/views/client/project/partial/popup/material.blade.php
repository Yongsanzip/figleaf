<?php
?>
<script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
<script src="{{asset('/js/projectAction.js')}}"></script>
<script src="{{ asset('/js/common.js') }}"></script>
<div class="drop-box">
    <div class="drop-header">재질</div>

    <div class="drop-item">
        <div class="fabric-list-wrap">
            <div class="fabric-list">
                <div class="fabric-title">
                    <div>1차 카테고리</div>
                </div>
                <div class="fabric-item" id="test">
                    <div class="fabric-name">
                        <select class="select" name="groups" onchange="material(this)">
                            @foreach($groups as $group)
                            <option value="{{ $group->id }}">{{ $group->name_ko }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="fabric-title">
                        <div>2차 카테고리</div>
                    </div>
                    <div class="fabric-name" id="material_category">
                        <select class="select" id="material">
                            @foreach($materials as $material)
                            <option value="{{ $material->id }}">{{ $material->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <!-- script add item -->
            </div>
            <button class="btn-black" type="button" onclick="popup_material_close()">완료</button>
        </div>

    </div>
</div>

