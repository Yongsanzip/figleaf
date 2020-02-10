<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddMessagesToMessageDetailsTable extends Migration
{
    /**
     * 메세지 테이블과 메세지 상세 테이블 관계 형성
     *
     * @return void
     */
    public function up()
    {
        Schema::table('message_details', function (Blueprint $table) {
            $table->foreign('message_id')->references('id')->on('messages')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * 관계 삭제
     *
     * @return void
     */
    public function down()
    {
        Schema::table('message_details', function (Blueprint $table) {
            $table->dropForeign('message_details_message_id_foreign');
        });
    }
}
