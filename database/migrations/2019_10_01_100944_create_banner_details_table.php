<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateBannerDetailsTable extends Migration
{
    /**
     * 배너 상세 테이블 명세
     *
     * @return void
     */
    public function up()
    {
        Schema::create('banner_details', function (Blueprint $table) {
            //컬럼 명세
            $table->bigIncrements('id');
            $table->bigInteger('banner_id')->unsigned()->comment('배너 id');
            $table->tinyInteger('check')->unsigned()->comment('사용여부');
            $table->string('link')->comment('링크 url');
            $table->timestamps();
            $table->softDeletes();
        });
        //테이블 명세
        DB::statement('ALTER TABLE `banner_details` COMMENT = "배너 상세 테이블"');
    }

    /**
     * 배너 상세 테이블 삭제
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('banner_details');
    }
}
