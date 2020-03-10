<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BanksTableSeeder extends Seeder
{
    /**
     * 은행 리스트 테이블 데이터 세팅
     *
     * @return void
     */
    public function run()
    {
        /*$banks = [
            "한국산업은행", "기업은행", "KB국민은행", "외환은행", "국민은행 구)주택", "수협중앙회", "NH농협은행", "단위농협", "축협중앙회", "우리은행", "구)조흥은행",
            "상업은행", "SC은행", "한일은행", "서울은행", "구)신한은행", "한국씨티은행", "대구은행", "부산은행", "광주은행", "제주은행", "전북은행",
            "강원은행", "경남은행", "비씨카드", "새마을금고", "신협", "상호저축은행", "씨티은행", "홍콩상하이은행", "도이치은행", "ABN암로", "JP모건",
            "미쓰비시도쿄은행", "BOA(Bank Of America)", "산림조합", "신안상호저축은행", "우체국", "KEB 하나은행", "평화은행", "신세계", "신한은행", "케이뱅크은행", "카카오뱅크",
            ];*/
        $banks=[["use_yn"=>"1","code"=>"11","name"=>"농협중앙회",],
                ["use_yn"=>"1","code"=>"16","name"=>"축협중앙회",],
                ["use_yn"=>"1","code"=>"21","name"=>"구)조흥은행",],
                ["use_yn"=>"1","code"=>"23","name"=>"SC제일은행",],
                ["use_yn"=>"1","code"=>"25","name"=>"서울은행",],
                ["use_yn"=>"1","code"=>"27","name"=>"한국씨티은행(구한미)",],
                ["use_yn"=>"1","code"=>"32","name"=>"부산은행",],
                ["use_yn"=>"1","code"=>"35","name"=>"제주은행",],
                ["use_yn"=>"1","code"=>"38","name"=>"강원은행",],
                ["use_yn"=>"1","code"=>"41","name"=>"비씨카드",],
                ["use_yn"=>"0","code"=>"48","name"=>"신용협동조합중앙회",],
                ["use_yn"=>"1","code"=>"53","name"=>"한국씨티은행",],
                ["use_yn"=>"0","code"=>"55","name"=>"도이치은행",],
                ["use_yn"=>"0","code"=>"57","name"=>"JP모건",],
                ["use_yn"=>"0","code"=>"60","name"=>"BOA (BankofAmerica)",],
                ["use_yn"=>"0","code"=>"70","name"=>"신안상호저축은행",],
                ["use_yn"=>"1","code"=>"81","name"=>"하나은행",],
                ["use_yn"=>"0","code"=>"87","name"=>"신세계",],
                ["use_yn"=>"0","code"=>"89","name"=>"케이뱅크",],
                ["use_yn"=>"0","code"=>"93","name"=>"토스머니",],
                ["use_yn"=>"0","code"=>"97","name"=>"카카오머니",],
                ["use_yn"=>"1","code"=>"02","name"=>"한국산업은행",],
                ["use_yn"=>"1","code"=>"04","name"=>"국민은행",],
                ["use_yn"=>"1","code"=>"06","name"=>"국민은행 (구 주택)",],
                ["use_yn"=>"0","code"=>"D1","name"=>"유안타증권(구 동양증권)",],
                ["use_yn"=>"0","code"=>"D3","name"=>"미래에셋증권",],
                ["use_yn"=>"0","code"=>"D5","name"=>"우리투자증권",],
                ["use_yn"=>"0","code"=>"D7","name"=>"HMC투자증권",],
                ["use_yn"=>"0","code"=>"D9","name"=>"대신증권",],
                ["use_yn"=>"0","code"=>"DB","name"=>"굿모닝신한증권",],
                ["use_yn"=>"0","code"=>"DD","name"=>"유진투자증권",],
                ["use_yn"=>"0","code"=>"DF","name"=>"신영증권",],
                ["use_yn"=>"0","code"=>"DH","name"=>"삼성증권",],
                ["use_yn"=>"0","code"=>"DJ","name"=>"키움증권",],
                ["use_yn"=>"0","code"=>"DL","name"=>"솔로몬증권",],
                ["use_yn"=>"0","code"=>"DN","name"=>"NH증권",],
                ["use_yn"=>"0","code"=>"DP","name"=>"LIG증권",],
                ["use_yn"=>"1","code"=>"12","name"=>"단위농협",],
                ["use_yn"=>"1","code"=>"20","name"=>"우리은행",],
                ["use_yn"=>"1","code"=>"22","name"=>"상업은행",],
                ["use_yn"=>"1","code"=>"24","name"=>"한일은행",],
                ["use_yn"=>"1","code"=>"26","name"=>"구)신한은행",],
                ["use_yn"=>"1","code"=>"31","name"=>"대구은행",],
                ["use_yn"=>"1","code"=>"34","name"=>"광주은행",],
                ["use_yn"=>"1","code"=>"37","name"=>"전북은행",],
                ["use_yn"=>"1","code"=>"39","name"=>"경남은행",],
                ["use_yn"=>"1","code"=>"45","name"=>"새마을금고",],
                ["use_yn"=>"0","code"=>"50","name"=>"상호저축은행",],
                ["use_yn"=>"0","code"=>"54","name"=>"홍콩상하이은행",],
                ["use_yn"=>"0","code"=>"56","name"=>"ABN암로",],
                ["use_yn"=>"0","code"=>"59","name"=>"미쓰비시도쿄은행",],
                ["use_yn"=>"0","code"=>"64","name"=>"산림조합",],
                ["use_yn"=>"0","code"=>"71","name"=>"우체국",],
                ["use_yn"=>"0","code"=>"83","name"=>"평화은행",],
                ["use_yn"=>"0","code"=>"88","name"=>"신한(통합)은행",],
                ["use_yn"=>"0","code"=>"90","name"=>"카카오뱅크",],
                ["use_yn"=>"0","code"=>"94","name"=>"SSG머니",],
                ["use_yn"=>"0","code"=>"98","name"=>"페이코",],
                ["use_yn"=>"0","code"=>"03","name"=>"기업은행",],
                ["use_yn"=>"0","code"=>"05","name"=>"하나은행(구외환)",],
                ["use_yn"=>"0","code"=>"07","name"=>"수협중앙회",],
                ["use_yn"=>"0","code"=>"D2","name"=>"현대증권",],
                ["use_yn"=>"0","code"=>"D4","name"=>"한국투자증권",],
                ["use_yn"=>"0","code"=>"D6","name"=>"하이투자증권",],
                ["use_yn"=>"0","code"=>"D8","name"=>"SK증권",],
                ["use_yn"=>"0","code"=>"DA","name"=>"하나대투증권",],
                ["use_yn"=>"0","code"=>"DC","name"=>"동부증권",],
                ["use_yn"=>"0","code"=>"DE","name"=>"메리츠증권",],
                ["use_yn"=>"0","code"=>"DG","name"=>"대우증권",],
                ["use_yn"=>"0","code"=>"DI","name"=>"교보증권",],
                ["use_yn"=>"0","code"=>"DK","name"=>"이트레이드",],
                ["use_yn"=>"0","code"=>"DM","name"=>"한화증권",],
                ["use_yn"=>"0","code"=>"DO","name"=>"부국증권",],
                ["use_yn"=>"0","code"=>"BW","name"=>"뱅크월렛",],
                ];
        for($i = 0; $i < count($banks); $i++) {
            DB::table('banks')->insert([
                'code'          =>$banks[$i]['code'],
                'bank_name'     => $banks[$i]['name'],
                'use_yn'        => $banks[$i]['use_yn'],
                'created_at'    => date('Y-m-d H:i:s', time()),
                'updated_at'    => date('Y-m-d H:i:s', time()),
            ]);
        }
    }
}
