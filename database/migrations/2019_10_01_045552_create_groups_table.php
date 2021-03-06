<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateGroupsTable extends Migration
{
    /**
     * 프로젝트 - 원단 - 재질 - 그룹 테이블
     *
     * @return void
     */
    public function up()
    {
        Schema::create('groups', function (Blueprint $table) {
            //컬럼 명세
            $table->bigIncrements('id');
            $table->string('name_ko', 50)->comment('그룹명(한)');
            $table->string('name_cn', 50)->comment('그룹명(중)');
            $table->string('name_en', 50)->comment('그룹명(영)');
            $table->text('contents')->comment('설명');
            $table->timestamps();
        });
        //테이블 명세
        DB::statement('ALTER TABLE `groups` COMMENT = "재질 그룹 테이블"');
    }

    /**
     * 그룹 테이블 삭제
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('groups');
    }
}
