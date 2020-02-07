<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{
    /**
     * 메인메뉴 상단 1차 카테고리 테이블 데이터 세팅
     *
     * @return void
     */
    public function run()
    {
        $category_name = ["Designer", "Brand", "NEWS", "Women's apparel", "Men's apparel", "New", "Special", "Collection", "Event"];
        for($i = 0; $i < count($category_name); $i++) {
            DB::table('categories')->insert([
                'category_name' => $category_name[$i],
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time()),
            ]);
        }
    }
}