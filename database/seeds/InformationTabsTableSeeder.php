<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InformationTabsTableSeeder extends Seeder
{
    /**
     * 취급정보 탭 테이블 데이터 세팅
     *
     * @return void
     */
    public function run()
    {
        $tabs_ko = ["물세탁", "표백", "다림질", "드라이클리닝", "건조"];
        $tabs_cn = ["물세탁", "표백", "다림질", "드라이클리닝", "건조"];
        $tabs_en = ["물세탁", "표백", "다림질", "드라이클리닝", "건조"];
        for($i = 0; $i < count($tabs_ko); $i++) {
            DB::table('information_tabs')->insert([
                'name_ko' => $tabs_ko[$i],
                'name_cn' => $tabs_cn[$i],
                'name_en' => $tabs_en[$i],
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time()),
            ]);
        }
    }
}
