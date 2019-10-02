<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePortfolioImagesTable extends Migration
{
    /**
     * 포트폴리오 이미지 테이블 명세
     * 포트폴리오에 등록되는 이미지는 많기 때문에 따로 테이블을 분기하여 관리
     *
     * @return void
     */
    public function up()
    {
        Schema::create('portfolio_images', function (Blueprint $table) {
            //컬럼 명세
            $table->bigIncrements('id');
            $table->bigInteger('portfolio_id')->unsigned()->comment('포트폴리오 id');
            //대표이미지 1, 브랜드로고 2, 뉴스 3
            //룩북은 룩북 이미지 테이블로 대체
            $table->tinyInteger('image_division')->unsigned()->comment('이미지 구분(마이그레이션 참조)');
            $table->string('image_type', 10)->comment('이미지타입 ex.jpg, gif...');
            $table->string('image_path')->comment('이미지 경로');
            $table->string('origin_name')->comment('이미지 실 이름');
            $table->timestamps();
            $table->softDeletes();
        });
        //테이블 명세
        DB::statement('ALTER TABLE `portfolio_images` COMMENT = "포트폴리오 이미지 테이블"');
    }

    /**
     * 포트폴리오 이미지 테이블 삭제
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('portfolio_images');
    }
}
