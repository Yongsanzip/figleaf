<?php

use Illuminate\Database\Seeder;

class SupportSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\PaymentType::create([
            'select_id'         => 1,
            'created_at'        => date('Y-m-d H:i:s', time()),
            'updated_at'        => date('Y-m-d H:i:s', time()),
        ]);
        for ($i = 1; $i < 300; $i++) {
            $support = \App\Support::create([
                'user_id'           => mt_rand(1,5),
                'project_id'        => mt_rand(1,99),
                'supporter'         => '테스트후원자'.$i,
                'phone'             => '01012341234',
                'email'             => 'test@test.com',
                'receiver'          => '테스트'.$i,
                'receiver_phone'    => '01012341234',
                'zipcode'           => '04315',
                'address'           => '서울특별시 용산구 문배동 3-3',
                'address_detail'    => '105~108',
                'requirement'       => '요청사항',
                'created_at'        => date('Y-m-d H:i:s', time()),
                'updated_at'        => date('Y-m-d H:i:s', time()),
            ]);

            $option = \App\Option::where('project_id', $support->project_id)->first();

            \App\SupportOption::create([
                'support_id'        => $support->id,
                'option_id'         => $option->id,
                'created_at'        => date('Y-m-d H:i:s', time()),
                'updated_at'        => date('Y-m-d H:i:s', time()),
            ]);

            \App\Payment::create([
                'support_id'                => $support->id,
                'bank_id'                   => mt_rand(1,44),
                'payment_type_id'           => 1,
                'savings'                   => mt_rand(10,500),
                'payment_number'            => '123412341234',
                'payment_price'             => '5000',
                'refund_user_name'          => '테스트',
                'refund_account_number'     => '1234123',
                'created_at'                => date('Y-m-d H:i:s', time()),
                'updated_at'                => date('Y-m-d H:i:s', time()),
            ]);
        }
    }
}
