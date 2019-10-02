<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddInformationTabsToInformationSelectListsTable extends Migration
{
    /**
     * 취급정보 셀렉트 리스트 테이블과 취급정보 탭 테이블과의 관계 형성
     *
     * @return void
     */
    public function up()
    {
        Schema::table('information_select_lists', function (Blueprint $table) {
            $table->foreign('tab_id')->references('id')->on('information_tabs')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * 관계 삭제
     *
     * @return void
     */
    public function down()
    {
        Schema::table('information_select_lists', function (Blueprint $table) {
            $table->dropForeign('information_select_lists_tab_id_foreign');
        });
    }
}
