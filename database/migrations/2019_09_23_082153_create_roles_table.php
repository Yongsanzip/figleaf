<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRolesTable extends Migration
{
    /**
     * 유저 권한 테이블 명세
     *
     * @return void
     */
    public function up()
    {
        //컬럼 명세
        Schema::create('roles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('role')->unsigned()->comment('일반사용자 : 1, 프로젝트 등록 허락 : 2, 관리자 : 99');
            $table->string('role_name', 10)->comment('일반사용자, 프로젝트 등록 허락, 관리자');
            $table->timestamps();
        });
        //테이블 명세
        DB::statement('ALTER TABLE `roles` COMMENT = "유저 권한 테이블"');
    }

    /**
     * 유저 권한 테이블 삭제
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('roles');
    }
}
