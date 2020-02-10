<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddPortfolioToPortfolioImagesTable extends Migration
{
    /**
     * 포트폴리오 이미지 테이블과 포트폴리오 테이블 관계형성
     *
     * @return void
     */
    public function up()
    {
        Schema::table('portfolio_images', function (Blueprint $table) {
            $table->foreign('portfolio_id')->references('id')->on('portfolios')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * 관계 삭제
     *
     * @return void
     */
    public function down()
    {
        Schema::table('portfolio_images', function (Blueprint $table) {
            $table->dropForeign('portfolio_images_portfolio_id_foreign');
        });
    }
}
