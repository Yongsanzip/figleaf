<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesTableSeeder extends Seeder
{
    /**
     * 유저 권한 테이블 데이터 세팅
     *
     *
     * @return void
     */
    public function run() {
        //데이터 세팅
        \App\Role::firstOrcreate(['role'=>1,'role_name'=>'일반사용자']);
        \App\Role::firstOrcreate(['role'=>3,'role_name'=>'디자이너']);
        \App\Role::firstOrcreate(['role'=>5,'role_name'=>'프로젝트허가자']);
        \App\Role::firstOrcreate(['role'=>9,'role_name'=>'최고관리자']);
    }
}
