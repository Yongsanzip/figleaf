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
            \Illuminate\Support\Facades\DB::table('portfolios')->insert([
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
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time()),
            ]);
        }
    }
}
