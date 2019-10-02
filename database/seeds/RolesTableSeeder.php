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
    public function run()
    {
        //데이터 세팅
        DB::statement("INSERT INTO roles SET role=1, role_name='일반사용자', created_at=NOW(), updated_at=NOW()");
        DB::statement("INSERT INTO roles SET role=5, role_name='프로젝트허가자', created_at=NOW(), updated_at=NOW()");
        DB::statement("INSERT INTO roles SET role=9, role_name='관리자', created_at=NOW(), updated_at=NOW()");
    }
}
