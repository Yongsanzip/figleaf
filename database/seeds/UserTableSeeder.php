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
        $faker = \Faker\Factory::create();

        \App\User::firstOrCreate([
            'role_id' => 4,
            'email' => 'admin@figleaf.co.kr',
            'password' => bcrypt('123123'),
            'user_code' => encrypt(date('YmdHmi').\Illuminate\Support\Str::random(10)),
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
    }
}
