<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHistoryAwardsTable extends Migration
{
    /**
     * 포트폴리오 -> 수상내역 테이블
     * 포트폴리오는 중도 저장이 가능하기 때문에 모든 컬럼이 0 or nullable로 처리
     *
     * @return void
     */
    public function up()
    {
        //컬럼 명세
        Schema::create('history_awards', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('portfolio_id')->unsigned()->comment('포트폴리오 id');
            $table->string('year', 5)->nullable()->comment('연도');
            $table->tinyInteger('type')->unsigned()->comment('타입(히스토리 0, 수상내역 1)');
            $table->text('history_ko')->nullable()->comment('수상내역(한)');
            $table->text('history_cn')->nullable()->comment('수상내역(중)');
            $table->text('history_en')->nullable()->comment('수상내역(영)');
            $table->timestamps();
            $table->softDeletes();
        });
        //테이블 명세
        DB::statement('ALTER TABLE `history_awards` COMMENT = "수상내역 테이블"');
    }

    /**
     * 수상내역 테이블 삭제
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('history_awards');
    }
}
