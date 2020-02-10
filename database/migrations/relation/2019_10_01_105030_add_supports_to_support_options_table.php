<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddSupportsToSupportOptionsTable extends Migration
{
    /**
     * 후원 옵션 테이블과 후원 테이블과의 관계gudtjd
     *
     * @return void
     */
    public function up()
    {
        Schema::table('support_options', function (Blueprint $table) {
            $table->foreign('support_id')->references('id')->on('supports')->onUpdate('cascade')->onDelete('cascade');
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
            $table->dropForeign('support_options_support_id_foreign');
        });
    }
}
