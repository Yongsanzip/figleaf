<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateInformationsTable extends Migration
{
    /**
     * 프로젝트 - 취급정보 테이블
     *
     * @return void
     */
    public function up()
    {
        Schema::create('informations', function (Blueprint $table) {
            //컬럼명세
            $table->bigIncrements('id');
            $table->bigInteger('project_id')->unsigned()->comment('프로젝트 id');
            $table->bigInteger('detail_id')->unsigned()->comment('취급상세 id');
            $table->timestamps();
            $table->softDeletes();
        });
        //테이블 명세
        DB::statement('ALTER TABLE `informations` COMMENT = "취급정보 테이블"');
    }

    /**
     * 취급 정보 테이블 삭제
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('informations');
    }
}
