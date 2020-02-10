<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddContentsToContentsDetails extends Migration
{
    /**
     * 컨텐츠 상세 테이블과 컨텐츠 테이블과의 관계 형성
     *
     * @return void
     */
    public function up()
    {
        Schema::table('content_details', function (Blueprint $table) {
            $table->foreign('content_id')->references('id')->on('contents')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * 관계 삭제
     *
     * @return void
     */
    public function down()
    {
        Schema::table('content_details', function (Blueprint $table) {
            $table->dropForeign('content_details_content_id_foreign');
        });
    }
}
