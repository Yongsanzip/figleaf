<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateFabricsTable extends Migration
{
    /**
     * 프로젝트 - 원단 테이블 명세
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fabrics', function (Blueprint $table) {
            //컬럼 명세
            $table->bigIncrements('id');
            $table->bigInteger('project_id')->unsigned()->comment('프로젝트 id');
            $table->bigInteger('material_id')->unsigned()->comment('재질 id');
            $table->integer('rate')->unsigned()->comment('비율');
            $table->timestamps();
            $table->softDeletes();
        });
        //테이블 명세
        DB::statement('ALTER TABLE `fabrics` COMMENT = "원단 테이블"');
    }

    /**
     * 원단 테이블 삭제
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fabrics');
    }
}
