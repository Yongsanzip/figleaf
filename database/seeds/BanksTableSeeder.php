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
        $banks = [
            "한국산업은행", "기업은행", "KB국민은행", "외환은행", "국민은행 구)주택", "수협중앙회", "NH농협은행", "단위농협", "축협중앙회", "우리은행", "구)조흥은행",
            "상업은행", "SC은행", "한일은행", "서울은행", "구)신한은행", "한국씨티은행", "대구은행", "부산은행", "광주은행", "제주은행", "전북은행",
            "강원은행", "경남은행", "비씨카드", "새마을금고", "신협", "상호저축은행", "씨티은행", "홍콩상하이은행", "도이치은행", "ABN암로", "JP모건",
            "미쓰비시도쿄은행", "BOA(Bank Of America)", "산림조합", "신안상호저축은행", "우체국", "KEB 하나은행", "평화은행", "신세계", "신한은행", "케이뱅크은행", "카카오뱅크",
            ];
        for($i = 0; $i < count($banks); $i++) {
            DB::table('banks')->insert([
                'bank_name' => $banks[$i],
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time()),
            ]);
        }
    }
}
