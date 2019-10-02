<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewsTable extends Migration
{
    /**
     * 뉴스 테이블 명세
     *
     *
     * @return void
     */
    public function up()
    {
        //컬럼 명세
        Schema::create('news', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('user_id')->unsigned()->comment('유저 id');
            $table->tinyInteger('type')->unsigned()->comment('포트폴리오 : 0, admin : 1');
            $table->string('url')->comment('뉴스 url');
            $table->string('title', 150)->comment('제목');
            $table->string('source')->comment('출처');
            $table->string('image_type', 10)->comment('이미지 타입');
            $table->string('image_path')->comment('이미지 경로');
            $table->string('origin_name')->comment('이미지 실 이름');
            $table->timestamp('date')->comment('뉴스/블로그 등록일');
            $table->timestamps();
            $table->softDeletes();
        });
        //테이블 명세
        DB::statement('ALTER TABLE `news` COMMENT = "뉴스 테이블"');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('news');
    }
}
