<?php

use App\AssociationActivity;
use App\HistoryAward;
use App\LookBook;
use App\LookBookImage;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class PortfolioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();
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
            \App\PortfolioImage::create([                                                                                // 포트폴리오 이미지 등록
                'portfolio_id'      => $portfolio->id,
                'image_division'    => 1,
                'image_type'        =>'jpg',
                'image_path'        =>'images/portfolio/profile'.$i.'.jpg',
                'origin_name'       =>'dummy'.$i,
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
            \App\PortfolioImage::create([                                                                                // 포트폴리오 이미지 등록
                'portfolio_id'      => $portfolio->id,
                'image_division'    => 2,
                'image_type'        =>'jpg',
                'image_path'        =>'images/portfolio/logo.jpg',
                'origin_name'       =>'dummy'.$i,
            ]);
            \App\PortfolioImage::create([                                                                                // 포트폴리오 이미지 등록
                'portfolio_id'      => $portfolio->id,
                'image_division'    => 2,
                'image_type'        =>'jpg',
                'image_path'        =>'images/portfolio/a'.$i.'.jpg',
                'origin_name'       =>'dummy'.$i,
            ]);

            HistoryAward::create([
               'portfolio_id'=>$portfolio->id,
               'type'=>1,
               'year' =>'2020',
               'history_ko'=>$faker->text(100)
            ]);
            HistoryAward::create([
                'portfolio_id'=>$portfolio->id,
                'type'=>2,
                'year' =>'2018',
                'history_ko'=>$faker->text(100)
            ]);
            AssociationActivity::create([
                'portfolio_id'=>$portfolio->id,
                'start_year'=>'2019',
                'end_year'=>'2020',
                'association_ko'=>$faker->text(20)
            ]);
            for($t = 1 ; $t<3; $t++){
                $look_book = LookBook::firstOrCreate([
                    'portfolio_id' =>$portfolio->id,
                    'season'=>'F/W',
                    'year'=>'2020'
                ]);
                for($j =0; $j<4; $j++){
                    $rand = rand(1,3);
                    LookBookImage::updateOrCreate([                                                                                // 포트폴리오 이미지 등록
                        'look_book_id'      =>$look_book->id,
                        'image_type'        =>'jpg',
                        'image_path'        =>'images/portfolio/'.$rand.'jpg',
                        'origin_name'       =>$rand,
                    ]);
                }
            }
        }
    }
}
