<?php

use Illuminate\Database\Seeder;

class PortfolioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=1;$i<5;$i++) {
            $portfolio = \App\Portfolio::create([
                'user_id'       => $i,
                'content_ko'    => '테스트',
                'content_cn'    => '테스트',
                'content_en'    => '테스트',
                'email'         => 'test'.$i.'@test.com',
                'home_phone'    => '01012341234',
                'facebook'      => 'test'.$i.'@test.com',
                'instagram'     => 'test'.$i.'@test.com',
                'twitter'       => 'test'.$i.'@test.com',
                'homepage'      => 'test'.$i.'@test.com',
                'created_at'    => date('Y-m-d H:i:s', time()),
                'updated_at'    => date('Y-m-d H:i:s', time()),
            ]);

            \App\Brand::create([
                'portfolio_id'  => $portfolio->id,
                'name_ko'       => '테스트'.$i,
                'name_en'       => '테스트'.$i,
                'name_cn'       => '테스트'.$i,
                'contents_ko'   => '브랜드 테스트입니다.'.$i,
                'contents_en'   => '브랜드 테스트입니다.'.$i,
                'contents_cn'   => '브랜드 테스트입니다.'.$i,
                'created_at'    => date('Y-m-d H:i:s', time()),
                'updated_at'    => date('Y-m-d H:i:s', time()),
            ]);
        }
    }
}
