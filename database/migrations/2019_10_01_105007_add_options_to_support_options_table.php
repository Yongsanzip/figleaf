<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddOptionsToSupportOptionsTable extends Migration
{
    /**
     * 후원 옵션 테이블과 옵션 테이블과의 관계 형성
     *
     * @return void
     */
    public function up()
    {
        Schema::table('support_options', function (Blueprint $table) {
            $table->foreign('option_id')->references('id')->on('options')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * 관계 삭제
     *
     * @return void
     */
    public function down()
    {
        Schema::table('support_options', function (Blueprint $table) {
            $table->dropForeign('support_options_option_id_foreign');
        });
    }
}
