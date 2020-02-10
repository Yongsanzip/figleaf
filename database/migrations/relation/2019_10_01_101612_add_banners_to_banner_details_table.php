<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddBannersToBannerDetailsTable extends Migration
{
    /**
     * 배너 상세 테이블과 배너 테이블과의 관계 형성
     *
     * @return void
     */
    public function up()
    {
        Schema::table('banner_details', function (Blueprint $table) {
            $table->foreign('banner_id')->references('id')->on('banners')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * 관계 삭제
     *
     * @return void
     */
    public function down()
    {
        Schema::table('banner_details', function (Blueprint $table) {
            $table->dropForeign('banner_details_banner_id_foreign');
        });
    }
}
