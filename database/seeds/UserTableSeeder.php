<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        \App\User::firstOrCreate([
            'role_id' => 4,
            'email' => 'admin@figleaf.com',
            'password' => bcrypt('123123'),
            'name' => '관리자',
            'home_phone' => '01012345678',
            'cellphone' => '0103214568',
            'zip_code' => '11111',
            'address' => '서울특별시 용산구 문배동 3-3',
            'address_detail' => '105~108호',
            'gender' => 0,
            'grade' => 0,
            'email_yn' => 1,
            'sms_yn' => 1,
            'email_verified_at' => \Carbon\Carbon::today(),
            'thumbnail' => '1',
        ]);

        for($i=1;$i<5;$i++){
            DB::table('users')->insert([
                'role_id' => 1,
                'email' => 'test'.$i.'@test.com',
                'password' => bcrypt('123123'),
                'name' => '테스트'.$i,
                'home_phone' => '0212341234',
                'cellphone' => '01012341234',
                'zip_code' => '11111',
                'address' => '서울특별시 용산구 문배동 3-3',
                'address_detail' => '105~108호',
                'gender' => 0,
                'grade' => 0,
                'email_yn' => 1,
                'sms_yn' => 1,
                'email_verified_at' => date('Y-m-d H:i:s', time()),
                'thumbnail' => '1',
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time()),
            ]);
        }
    }
}
