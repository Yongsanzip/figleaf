<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoryDetailsTableSeeder extends Seeder
{
    /**
     * 메인메뉴 상단 2차 카테고리 테이블 데이터 세팅(women's, men's)
     *
     * @return void
     */
    public function run()
    {
        //Women's apparel 2차 카테고리 세팅
        $womens_apparels = ["New","View All", "Outer", "Top", "T-shirt/Handie", "Pants", "Sports", "Dress", "Skirts", "Shoes", "Acc"];
        $category = DB::table('categories')->where('category_name', "Women's apparel")->first();
        for($i = 0; $i < count($womens_apparels); $i++) {
            DB::table('category_details')->insert([
                'category_id' => $category->id,
                'category_name' =>$womens_apparels[$i],
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time())
            ]);
        }
        //Men's apparel 2차 카테고리 세팅
        $mens_apparels = ["New","View All", "Outer", "Pants", "Sports", "T-shirts/Handie", "Top", "Shoes", "Acc"];
        $category = DB::table('categories')->where('category_name', "Men's apparel")->first();
        for($i = 0; $i < count($mens_apparels); $i++) {
            DB::table('category_details')->insert([
                'category_id' => $category->id,
                'category_name' =>$mens_apparels[$i],
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time()),
            ]);
        }
    }
}
