<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateInformationTabsTable extends Migration
{
    /**
     * 프로젝트 - 프로젝트 select list - 프로젝트 탭 테이블 명세
     *
     * @return void
     */
    public function up()
    {
        Schema::create('information_tabs', function (Blueprint $table) {
            //컬럼 명세
            $table->bigIncrements('id');
            $table->string('name_ko', 20)->comment('탭 이름(한)');
            $table->string('name_cn', 20)->comment('탭 이름(중)');
            $table->string('name_en', 20)->comment('탭 이름(영)');
            $table->timestamps();
        });
        //테이블 명세
        DB::statement('ALTER TABLE `information_tabs` COMMENT = "취급정보 탭 테이블"');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('information_tabs');
    }
}
