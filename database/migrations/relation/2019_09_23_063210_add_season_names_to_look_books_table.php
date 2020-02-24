<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddSeasonNamesToLookBooksTable extends Migration
{
    /**
     * 룩북 테이블과 시즌명 테이블과의 관계 형성
     *
     * @return void
     */
    public function up()
    {
        /*Schema::table('look_books', function (Blueprint $table) {
            $table->foreign('season_id')->references('id')->on('season_names')->onUpdate('cascade')->onDelete('cascade');
        });*/
    }

    /**
     * 관계 삭제
     *
     * @return void
     */
    public function down()
    {
        /*Schema::table('look_books', function (Blueprint $table) {
            $table->dropForeign('look_books_season_id_foreign');
        });*/
    }
}
