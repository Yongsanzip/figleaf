<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            //필수 요소
            //은행 리스트 테이블 데이터 세팅
            BanksTableSeeder::class,
            //유저 권한 테이블 데이터 세팅
            RolesTableSeeder::class,
            //유저 테이블
            UserTableSeeder::class,
            //메인메뉴 상단 1차 카테고리 테이블 데이터 세팅
            CategoriesTableSeeder::class,
            //메인메뉴 상단 2차 카테고리 테이블 데이터 세팅(women's, men's)
            CategoryDetailsTableSeeder::class,
            //사이즈 카테고리 테이블 데이터 세팅
            SizeCategoriesTableSeeder::class,
            //결제 셀렉트 테이블 데이터 세팅
            PaymentSelectsTableSeeder::class,
            //카드리스트
            CardSeeder::class,
            //취급정보 탭 테이블 데이터 세팅
            InformationTabsTableSeeder::class,
            //취급정보 셀렉트 리스트 테이블 데이터 세팅
            InformationSelectListsTableSeeder::class,
            //재질 그룹 테이블 데이터 세팅
            GroupsTableSeeder::class,
            //재질 테이블 데이터 세팅
            MaterialsTableSeeder::class,
            //배너 테이블 데이터 세팅
            BannersTableSeeder::class,
            //어드민 페이지-콘텐츠 데이터 세팅
            ContentsSeeder::class,

            /******************** 테스트 데이터 ********************/
            //부가 요소
            // PortfolioSeeder::class,
            // ProjectSeeder::class,
            // SupportSeeder::class,
            // CommunitySeeder::class,
            // QuestionSeeder::class,
            // ContentDetailsSeeder::class
        ]);

    }
}
