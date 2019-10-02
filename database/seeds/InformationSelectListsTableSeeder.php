<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InformationSelectListsTableSeeder extends Seeder
{
    /**
     * 취급정보 셀렉트 리스트 테이블 데이터 세팅
     *
     * @return void
     */
    public function run()
    {
        //이미지 경로
        $img_path = "images/cleaning/";
        //물세탁
        $selects_part1_ko = [
            "물온도 95℃로 세탁<br>세탁기/손세탁 가능<br>세제종류 제한 없음<br>삶을 수 있음",
            "물온도 60℃로 세탁<br>세탁기/손세탁 가능<br>세제종류 제한 없음",
            "물온도 40℃로 세탁<br>세탁기/손세탁 가능<br>세제종류 제한 없음",
            "물온도 40℃로 세탁<br>세탁기로 약하게 세탁<br>약하게 손세탁 가능<br>세제종류 제한 없음",
            "물온도 30℃로 세탁<br>세탁기로 약하게 세탁<br>약하게 손세탁 가능<br>중성세제 사용",
            "물온도 30℃로 세탁<br>세탁기 사용 불가<br>약하게 손세탁 가능<br>중성세제 사용",
            "물세탁 안됨"
        ];
        $selects_part1_cn = [
            "물온도 95℃로 세탁<br>세탁기/손세탁 가능<br>세제종류 제한 없음<br>삶을 수 있음",
            "물온도 60℃로 세탁<br>세탁기/손세탁 가능<br>세제종류 제한 없음",
            "물온도 40℃로 세탁<br>세탁기/손세탁 가능<br>세제종류 제한 없음",
            "물온도 40℃로 세탁<br>세탁기로 약하게 세탁<br>약하게 손세탁 가능<br>세제종류 제한 없음",
            "물온도 30℃로 세탁<br>세탁기로 약하게 세탁<br>약하게 손세탁 가능<br>중성세제 사용",
            "물온도 30℃로 세탁<br>세탁기 사용 불가<br>약하게 손세탁 가능<br>중성세제 사용",
            "물세탁 안됨"
        ];
        $selects_part1_en = [
            "물온도 95℃로 세탁<br>세탁기/손세탁 가능<br>세제종류 제한 없음<br>삶을 수 있음",
            "물온도 60℃로 세탁<br>세탁기/손세탁 가능<br>세제종류 제한 없음",
            "물온도 40℃로 세탁<br>세탁기/손세탁 가능<br>세제종류 제한 없음",
            "물온도 40℃로 세탁<br>세탁기로 약하게 세탁<br>약하게 손세탁 가능<br>세제종류 제한 없음",
            "물온도 30℃로 세탁<br>세탁기로 약하게 세탁<br>약하게 손세탁 가능<br>중성세제 사용",
            "물온도 30℃로 세탁<br>세탁기 사용 불가<br>약하게 손세탁 가능<br>중성세제 사용",
            "물세탁 안됨",
        ];
        $img_1 = ["water-01.png", "water-02.png", "water-03.png", "water-04.png", "water-05.png", "water-06.png", "water-07.png"];
        $tab = DB::table('information_tabs')->where('name_ko', "물세탁")->first();
        for($i = 0; $i < count($selects_part1_ko); $i++) {
            DB::table('information_select_lists')->insert([
                'tab_id' => $tab->id,
                'img_path' => $img_path.$img_1[$i],
                'description_ko' => $selects_part1_ko[$i],
                'description_cn' => $selects_part1_cn[$i],
                'description_en' => $selects_part1_en[$i],
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time()),
            ]);
        }

        //표백
        $selects_part2_ko = [
            "염소계표백제로 표백",
            "염소계표백제로<br>표백 불가",
            "산소계표백제로 표백",
            "산소계표백제로<br>표백 불가",
            "염소, 혹은 산소계<br>표백제로 표백",
            "염소, 혹은 산소계<br>표백제로 표백 불가",
        ];
        $selects_part2_cn = [
            "염소계표백제로 표백",
            "염소계표백제로<br>표백 불가",
            "산소계표백제로 표백",
            "산소계표백제로<br>표백 불가",
            "염소, 혹은 산소계<br>표백제로 표백",
            "염소, 혹은 산소계<br>표백제로 표백 불가",
        ];
        $selects_part2_en = [
            "염소계표백제로 표백",
            "염소계표백제로<br>표백 불가",
            "산소계표백제로 표백",
            "산소계표백제로<br>표백 불가",
            "염소, 혹은 산소계<br>표백제로 표백",
            "염소, 혹은 산소계<br>표백제로 표백 불가",
        ];
        $img_2 = ["bleach-01.png", "bleach-02.png", "bleach-03.png", "bleach-04.png", "bleach-05.png", "bleach-06.png"];
        $tab = DB::table('information_tabs')->where('name_ko', "표백")->first();
        for($i = 0; $i < count($selects_part2_ko); $i++) {
            DB::table('information_select_lists')->insert([
                'tab_id' => $tab->id,
                'img_path' => $img_path.$img_2[$i],
                'description_ko' => $selects_part2_ko[$i],
                'description_cn' => $selects_part2_cn[$i],
                'description_en' => $selects_part2_en[$i],
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time()),
            ]);
        }

        //다림질
        $selects_part3_ko = [
            "180~210℃로 다림질",
            "원단 위에 천을 얹고<br>180~210℃로 다림질",
            "140~160℃로 다림질",
            "원단 위에 천을 얹고<br>140~160℃로 다림질",
            "80~120℃로 다림질",
            "원단 위에 천을 얹고<br>80~120℃로 다림질",
            "다림질 안됨",
        ];
        $selects_part3_cn = [
            "180~210℃로 다림질",
            "원단 위에 천을 얹고<br>180~210℃로 다림질",
            "140~160℃로 다림질",
            "원단 위에 천을 얹고<br>140~160℃로 다림질",
            "80~120℃로 다림질",
            "원단 위에 천을 얹고<br>80~120℃로 다림질",
            "다림질 안됨",
        ];
        $selects_part3_en = [
            "180~210℃로 다림질",
            "원단 위에 천을 얹고<br>180~210℃로 다림질",
            "140~160℃로 다림질",
            "원단 위에 천을 얹고<br>140~160℃로 다림질",
            "80~120℃로 다림질",
            "원단 위에 천을 얹고<br>80~120℃로 다림질",
            "다림질 안됨",
        ];
        $img_3 = ["iron_01.png", "iron_02.png", "iron_03.png", "iron_04.png", "iron_05.png", "iron_06.png", "iron_07.png"];
        $tab = DB::table('information_tabs')->where('name_ko', "다림질")->first();
        for($i = 0; $i < count($selects_part3_ko); $i++) {
            DB::table('information_select_lists')->insert([
                'tab_id' => $tab->id,
                'img_path' => $img_path.$img_3[$i],
                'description_ko' => $selects_part3_ko[$i],
                'description_cn' => $selects_part3_cn[$i],
                'description_en' => $selects_part3_en[$i],
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time()),
            ]);
        }

        //드라이클리닝
        $selects_part4_ko = [
            "드라이클리닝 가능<br>클로로에틸렌,<br>혹은 석유계 사용",
            "드라이클리닝 가능<br>석유계 사용",
            "드라이클리닝 가능하나<br>전문점에서만 가능",
            "드라이클리닝 안됨",
        ];
        $selects_part4_cn = [
            "드라이클리닝 가능<br>클로로에틸렌,<br>혹은 석유계 사용",
            "드라이클리닝 가능<br>석유계 사용",
            "드라이클리닝 가능하나<br>전문점에서만 가능",
            "드라이클리닝 안됨",
        ];
        $selects_part4_en = [
            "드라이클리닝 가능<br>클로로에틸렌,<br>혹은 석유계 사용",
            "드라이클리닝 가능<br>석유계 사용",
            "드라이클리닝 가능하나<br>전문점에서만 가능",
            "드라이클리닝 안됨",
        ];
        $img_4 = ["drycleaning-01.png", "drycleaning-02.png", "drycleaning-03.png", "drycleaning-04.png"];
        $tab = DB::table('information_tabs')->where('name_ko', "드라이클리닝")->first();
        for($i = 0; $i < count($selects_part4_ko); $i++) {
            DB::table('information_select_lists')->insert([
                'tab_id' => $tab->id,
                'img_path' => $img_path.$img_4[$i],
                'description_ko' => $selects_part4_ko[$i],
                'description_cn' => $selects_part4_cn[$i],
                'description_en' => $selects_part4_en[$i],
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time()),
            ]);
        }

        //건조
        $selects_part5_ko = [
            "햇빛에 건조<br>옷걸이에 걸어 건조",
            "그늘에 건조<br>옷걸이에 걸어 건조",
            "햇빛에 건조<br>바닥에 뉘어 건조",
            "그늘에 건조<br>바닥에 뉘어 건조",
            "세탁 후 기계건조 가능",
            "세탁 후 기계건조 불가",
            "손으로 약하게 짬",
            "손으로 짜면 안됨",
        ];
        $selects_part5_cn = [
            "햇빛에 건조<br>옷걸이에 걸어 건조",
            "그늘에 건조<br>옷걸이에 걸어 건조",
            "햇빛에 건조<br>바닥에 뉘어 건조",
            "그늘에 건조<br>바닥에 뉘어 건조",
            "세탁 후 기계건조 가능",
            "세탁 후 기계건조 불가",
            "손으로 약하게 짬",
            "손으로 짜면 안됨",
        ];
        $selects_part5_en = [
            "햇빛에 건조<br>옷걸이에 걸어 건조",
            "그늘에 건조<br>옷걸이에 걸어 건조",
            "햇빛에 건조<br>바닥에 뉘어 건조",
            "그늘에 건조<br>바닥에 뉘어 건조",
            "세탁 후 기계건조 가능",
            "세탁 후 기계건조 불가",
            "손으로 약하게 짬",
            "손으로 짜면 안됨",
        ];
        //이미지 : dry
        $img_5 = ["dry-01.png", "dry-02.png", "dry-03.png", "dry-04.png", "dry-05.png", "dry-06.png", "dry-07.png", "dry-08.png"];
        $tab = DB::table('information_tabs')->where('name_ko', "건조")->first();
        for($i = 0; $i < count($selects_part5_ko); $i++) {
            DB::table('information_select_lists')->insert([
                'tab_id' => $tab->id,
                'img_path' => $img_path.$img_5[$i],
                'description_ko' => $selects_part5_ko[$i],
                'description_cn' => $selects_part5_cn[$i],
                'description_en' => $selects_part5_en[$i],
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time()),
            ]);
        }
    }
}
