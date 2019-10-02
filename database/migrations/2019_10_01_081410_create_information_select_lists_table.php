<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateInformationSelectListsTable extends Migration
{
    /**
     * 프로젝트 - 취급정보 - 취급정보 셀렉트 리스트 테이블 명세
     *
     * @return void
     */
    public function up()
    {
        Schema::create('information_select_lists', function (Blueprint $table) {
            //컬럼 명세
            $table->bigIncrements('id');
            $table->bigInteger('tab_id')->unsigned()->comment('탭 id');
            $table->string('img_path', 100)->comment('이미지 경로');
            $table->string('description_ko')->comment('설명(한)');
            $table->string('description_cn')->comment('설명(중)');
            $table->string('description_en')->comment('설명(영)');
            $table->timestamps();
        });
        //테이블 명세
        DB::statement('ALTER TABLE `information_select_lists` COMMENT = "취급정보 셀렉트 리스트 테이블"');
    }

    /**
     * 취급정보 셀렉트 리스트 테이블 삭제
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('information_select_lists');
    }
}
