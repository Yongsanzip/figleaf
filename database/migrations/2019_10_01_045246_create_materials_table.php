<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateMaterialsTable extends Migration
{
    /**
     * 프로젝트 - 원단 - 재질 테이블 명세
     *
     * @return void
     */
    public function up()
    {
        Schema::create('materials', function (Blueprint $table) {
            //컬럼 명세
            $table->bigIncrements('id');
            $table->bigInteger('group_id')->unsigned()->comment('그룹 id');
            $table->string('name', 50)->comment('재질명(한)');
            $table->timestamps();
        });
        //테이블 명세
        DB::statement('ALTER TABLE `materials` COMMENT = "재질 테이블"');
    }

    /**
     * 재질 테이블 삭제
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('materials');
    }
}
