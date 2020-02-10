<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddPortfoliosToHistoryAwardsTable extends Migration
{
    /**
     * 수상내역 테이블과 포트폴리오 테이블의 관계형성
     *
     * @return void
     */
    public function up()
    {
        Schema::table('history_awards', function (Blueprint $table) {
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
        Schema::table('history_awards', function (Blueprint $table) {
            $table->dropForeign('history_awards_portfolio_id_foreign');
        });
    }
}
