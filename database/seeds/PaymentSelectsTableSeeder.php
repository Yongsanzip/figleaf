<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PaymentSelectsTableSeeder extends Seeder
{
    /**
     * 결제수단 셀렉트 테이블 데이터 세팅
     *
     * @return void
     */
    public function run()
    {
        $types_ko = ["카드결제"];
        $types_cn = ["카드결제"];
        $types_en = ["카드결제"];
        for($i = 0; $i < count($types_ko); $i++) {
            DB::table('payment_selects')->insert([
                'select_name_ko' => $types_ko[$i],
                'select_name_cn' => $types_cn[$i],
                'select_name_en' => $types_en[$i],
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time()),
            ]);
        }
    }
}
