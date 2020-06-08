<?php
?>
<script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
<script src="{{asset('/js/projectAction.js')}}"></script>
<script src="{{ asset('/js/common.js') }}"></script>
<style>
    .text-field {
        padding: 8px 14px;
        background: #ecedef;
        border: none;
        border-radius: 4px;
        color: #181818;
        font-size: 14px;
        box-sizing: border-box;
    }

    .btn-white {
        background: white;
        border: 1px solid #474747;
        color: #181818;
        outline: none;
        text-align: center;
        text-transform: uppercase;
        cursor: pointer;
        transition: background-color 0.3s;
        margin-top: 14px;
        width: 70px;
        height: 35px;
    }

    .drop-header {
        border-bottom: 1px solid #cccccc;
        font-size: 20px;
        font-weight: 300;
        padding-bottom: 4px;
        padding-left: 10px;
    }
    .fabric-title {
        width: 120px;
        height: 40px;
        line-height: 40px;
        font-size: 16px;
        font-weight: 700;
        text-align: center;
    }

</style>
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
                        <select class="select text-field" name="groups" onchange="material(this)">
                            @foreach($groups as $group)
                            <option value="{{ $group->id }}">{{ $group->name_ko }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="fabric-title">
                        <div>2차 카테고리</div>
                    </div>
                    <div class="fabric-name" id="material_category">
                        <select class="select text-field" id="material">
                            @foreach($materials as $material)
                            <option value="{{ $material->id }}">{{ $material->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <!-- script add item -->
            </div>
            <button class="btn-white" type="button" onclick="popup_material_close()">완료</button>
        </div>
    </div>
</div>

