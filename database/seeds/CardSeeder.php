<?php

use Illuminate\Database\Seeder;

class CardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cards = [
            ["use_yn"=>"1","code"=>"11","name"=>"비씨카드"],
            ["use_yn"=>"1","code"=>"14","name"=>"신한카드(구.LG카드포함)"],
            ["use_yn"=>"1","code"=>"22","name"=>"글로벌 MASTER"],
            ["use_yn"=>"1","code"=>"26","name"=>"중국은련카드"],
            ["use_yn"=>"1","code"=>"33","name"=>"전북카드"],
            ["use_yn"=>"1","code"=>"35","name"=>"산업카드"],
            ["use_yn"=>"1","code"=>"43","name"=>"씨티카드"],
            ["use_yn"=>"1","code"=>"48","name"=>"신협체크카드"],
            ["use_yn"=>"1","code"=>"52","name"=>"제주카드"],
            ["use_yn"=>"1","code"=>"55","name"=>"케이뱅크카드"],
            ["use_yn"=>"1","code"=>"71","name"=>"우체국체크"],
            ["use_yn"=>"1","code"=>"01","name"=>"외환카드"],
            ["use_yn"=>"1","code"=>"04","name"=>"현대카드"],
            ["use_yn"=>"1","code"=>"12","name"=>"삼성카드"],
            ["use_yn"=>"1","code"=>"21","name"=>"글로벌 VISA"],
            ["use_yn"=>"1","code"=>"23","name"=>"글로벌 JCB"],
            ["use_yn"=>"1","code"=>"32","name"=>"광주카드"],
            ["use_yn"=>"1","code"=>"34","name"=>"하나카드"],
            ["use_yn"=>"1","code"=>"41","name"=>"NH카드"],
            ["use_yn"=>"1","code"=>"44","name"=>"우리카드"],
            ["use_yn"=>"1","code"=>"51","name"=>"수협카드"],
            ["use_yn"=>"1","code"=>"54","name"=>"MG새마을금고체크"],
            ["use_yn"=>"1","code"=>"56","name"=>"카카오뱅크"],
            ["use_yn"=>"1","code"=>"95","name"=>"저축은행체크"],
            ["use_yn"=>"1","code"=>"03","name"=>"롯데카드"],
            ["use_yn"=>"1","code"=>"06","name"=>"국민카드"],
        ];
        for($i = 0; $i < count($cards); $i++) {
            DB::table('cards')->insert([
                'code'          =>$cards[$i]['code'],
                'card_name'     => $cards[$i]['name'],
                'use_yn'        => $cards[$i]['use_yn'],
                'created_at'    => date('Y-m-d H:i:s', time()),
                'updated_at'    => date('Y-m-d H:i:s', time()),
            ]);
        }
    }
}
