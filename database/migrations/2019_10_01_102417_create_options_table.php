<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateOptionsTable extends Migration
{
    /**
     *  프로젝트 - 옵션 테이블 명세
     *
     * @return void
     */
    public function up()
    {
        Schema::create('options', function (Blueprint $table) {
            //컬럼 명세
            $table->bigIncrements('id');
            $table->bigInteger('project_id')->unsigned()->comment('프로젝트 id');
            $table->string('option_name', 50)->comment('옵션명');
            $table->integer('price')->unsigned()->comment('가격');
            $table->timestamps();
            $table->softDeletes();
        });
        //테이블 명세
        DB::statement('ALTER TABLE `options` COMMENT = "옵션 테이블"');
    }

    /**
     * 옵션 테이블 삭제
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('options');
    }
}
