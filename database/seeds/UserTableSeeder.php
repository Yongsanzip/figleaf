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
            'email' => 'admin@figleaf.com',
            'password' => bcrypt('123123'),
            'user_code' => encrypt(date('YmdHmi').\Illuminate\Support\Str::random(10)),
            'name' => '최고관리자',
            'home_phone' => '0234431255',
            'cellphone' => '01037915498',
            'zip_code' => '06024',
            'address' => '서울틀별시 강남구 논현로 168길 36',
            'address_detail' => '3-425호(신사동)',
            'gender' => 0,
            'grade' => 0,
            'email_yn' => 1,
            'sms_yn' => 1,
            'email_verified_at' => \Carbon\Carbon::today(),
            'thumbnail' => '1',
        ]);

        for($i=1;$i<5;$i++){
            $bank = \App\Bank::find(mt_rand(1,74));
            $name =$faker->name;
            DB::table('users')->insert([
                'role_id' => 2,
                'email' => 'design'.$i.'@figleaf.com',
                'password' => bcrypt('123123'),
                'user_code' => encrypt(date('YmdHmi').\Illuminate\Support\Str::random(10)),
                'name' => $name,
                'home_phone' => '0212341234',
                'cellphone' => '01012341234',
                'zip_code' => '11111',
                'address' => '서울특별시 용산구 문배동 3-3',
                'address_detail' => '105~108호',
                'gender' => 0,
                'grade' => 0,
                'email_yn' => 1,
                'sms_yn' => 1,
                'bank_id'=>$bank->id,
                'bank_account_holder'=>$name,
                'bank_account_number'=>mt_rand(10000000000,999999999999),
                'email_verified_at' => date('Y-m-d H:i:s', time()),
                'thumbnail' => '1',
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time()),
            ]);
        }
        for($i=1;$i<5;$i++){
            $bank = \App\Bank::find(mt_rand(1,74));
            $name =$faker->name;
            DB::table('users')->insert([
                'role_id' => 1,
                'email' => 'test'.$i.'@figleaf.com',
                'password' => bcrypt('123123'),
                'user_code' => encrypt(date('YmdHmi').\Illuminate\Support\Str::random(10)),
                'name' => $name,
                'home_phone' => '0212341234',
                'cellphone' => '01012341234',
                'zip_code' => '11111',
                'address' => '서울특별시 용산구 문배동 3-3',
                'address_detail' => '105~108호',
                'gender' => 0,
                'grade' => 0,
                'email_yn' => 1,
                'sms_yn' => 1,
                'bank_id'=>$bank->id,
                'bank_account_holder'=>$name,
                'bank_account_number'=>mt_rand(10000000000,999999999999),
                'email_verified_at' => date('Y-m-d H:i:s', time()),
                'thumbnail' => '1',
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time()),
            ]);
        }
        $bank1 = \App\Bank::find(mt_rand(1,74));
        $name1 =$faker->name;
        DB::table('users')->insert([
            'role_id' => 2,
            'email' => 'deyeo@yongsanzip.com',
            'password' => bcrypt('123123'),
            'user_code' => encrypt(date('YmdHmi').\Illuminate\Support\Str::random(10)),
            'name' => $name1,
            'home_phone' => '0278992475',
            'cellphone' => '01087521756',
            'zip_code' => '14451',
            'address' => '서울특별시 용산구 문배동 3-3',
            'address_detail' => '105~108호',
            'gender' => 0,
            'grade' => 0,
            'email_yn' => 1,
            'sms_yn' => 1,
            'bank_id'=>$bank1->id,
            'bank_account_holder'=>$name1,
            'bank_account_number'=>mt_rand(10000000000,999999999999),
            'email_verified_at' => date('Y-m-d H:i:s', time()),
            'thumbnail' => '1',
            'created_at' => date('Y-m-d H:i:s', time()),
            'updated_at' => date('Y-m-d H:i:s', time()),
        ]);
    }
}
