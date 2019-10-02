<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddInformationSelectListsToInformationsTable extends Migration
{
    /**
     * 취급정보 테이블과 취급정보 셀렉트 리스트 테이블과의 관계 형성
     *
     * @return void
     */
    public function up()
    {
        Schema::table('informations', function (Blueprint $table) {
            $table->foreign('detail_id')->references('id')->on('information_select_lists')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * 관계 삭제
     *
     * @return void
     */
    public function down()
    {
        Schema::table('informations', function (Blueprint $table) {
            $table->dropForeign('informations_detail_id_foreign');
        });
    }
}
