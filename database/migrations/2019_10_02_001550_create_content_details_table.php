<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateContentDetailsTable extends Migration
{
    /**
     * 컨텐츠 - 컨텐츠 상세 테이블 명세
     *
     * @return void
     */
    public function up()
    {
        Schema::create('content_details', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('content_id')->unsigned()->comment('컨텐츠 id');
            $table->bigInteger('model_id')->unsigned()->comment('프로젝트/포트폴리오 id');
            $table->tinyInteger('status')->unsigned()->comment('구분');
            $table->timestamps();
            $table->softDeletes();
        });
        //테이블 명세
        DB::statement('ALTER TABLE `content_details` COMMENT = "컨텐츠 상세 테이블"');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('content_details');
    }
}
