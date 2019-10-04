<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BannersTableSeeder extends Seeder
{
    /**
     * 배너 테이블 데이터 세팅
     *
     * @return void
     */
    public function run()
    {
        $banners = [
            '최상단 띠배너', '중간 띠배너', '하단 띠배너',
            'HOME 슬라이드1', 'HOME 슬라이드2', 'HOME 슬라이드3', 'HOME 슬라이드4', 'HOME 슬라이드5',
            '프로젝트 슬라이드1', '프로젝트 슬라이드2', '프로젝트 슬라이드3', '프로젝트 슬라이드4', '프로젝트 슬라이드5',
            '디자이너 슬라이드1', '디자이너 슬라이드2', '디자이너 슬라이드3', '디자이너 슬라이드4', '디자이너 슬라이드5',
            '브랜드 슬라이드1', '브랜드 슬라이드2', '브랜드 슬라이드3', '브랜드 슬라이드4', '브랜드 슬라이드5',
            '뉴스 슬라이드1', '뉴스 슬라이드2', '뉴스 슬라이드3', '뉴스 슬라이드4', '뉴스 슬라이드5',
            'NEW 슬라이드1', 'NEW 슬라이드2', 'NEW 슬라이드3', 'NEW 슬라이드4', 'NEW 슬라이드5',
            'SPECIAL 슬라이드1', 'SPECIAL 슬라이드2', 'SPECIAL 슬라이드3', 'SPECIAL 슬라이드4', 'SPECIAL 슬라이드5',
            'COLLECTION 슬라이드1', 'COLLECTION 슬라이드2', 'COLLECTION 슬라이드3', 'COLLECTION 슬라이드4', 'COLLECTION 슬라이드5',
            'EVENT 슬라이드1', 'EVENT 슬라이드2', 'EVENT 슬라이드3', 'EVENT 슬라이드4', 'EVENT 슬라이드5',
        ];
        for($i = 0; $i < count($banners); $i++) {
            DB::table('banners')->insert([
                'position' => $i+1,
                'name' => $banners[$i],
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time()),
            ]);
        }
    }
}
