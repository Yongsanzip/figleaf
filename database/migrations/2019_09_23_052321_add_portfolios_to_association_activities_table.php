<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddPortfoliosToAssociationActivitiesTable extends Migration
{
    /**
     * 협회활동 테이블과 포트폴리오 테이블과의 관계 형성
     *
     * @return void
     */
    public function up()
    {
        Schema::table('association_activities', function (Blueprint $table) {
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
        Schema::table('association_activities', function (Blueprint $table) {
            $table->dropForeign('association_activities_portfolio_id_foreign');
        });
    }
}
