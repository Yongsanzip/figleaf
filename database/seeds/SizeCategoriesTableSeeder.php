<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SizeCategoriesTableSeeder extends Seeder
{
    /**
     * 사이즈 카테고리 데이터 세팅
     *
     * @return void
     */
    public function run()
    {
        $categories_ko = ["상의(아우터, 티셔츠, 탑 등)", "원피스", "치마", "바지", "구두", "악세사리"];
        $categories_cn = ["상의(아우터, 티셔츠, 탑 등)", "원피스", "치마", "바지", "구두", "악세사리"];
        $categories_en = ["상의(아우터, 티셔츠, 탑 등)", "원피스", "치마", "바지", "구두", "악세사리"];
        for($i = 0; $i < count($categories_ko); $i++) {
            DB::table('size_categories')->insert([
                'category_name_ko' => $categories_ko[$i],
                'category_name_cn' => $categories_cn[$i],
                'category_name_en' => $categories_en[$i],
                'created_at'=> date('Y-m-d H:i:s', time()),
                'updated_at'=> date('Y-m-d H:i:s', time()),
            ]);
        }
    }
}
