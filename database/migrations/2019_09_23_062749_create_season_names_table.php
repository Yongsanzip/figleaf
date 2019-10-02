<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSeasonNamesTable extends Migration
{
    /**
     * 포트폴리오 -> 룩북 -> 시즌명 테이블 명세
     *
     * @return void
     */
    public function up()
    {
        //컬럼 명세
        Schema::create('season_names', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('year')->unsigned()->comment('년도');
            $table->string('season', 10)->comment('시즌명 ex.S/S, F/W');
            $table->timestamps();
        });
        //테이블 명세
        DB::statement('ALTER TABLE `season_names` COMMENT = "시즌명 테이블"');
    }

    /**
     * 시즌명 테이블 삭제
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('season_names');
    }
}
