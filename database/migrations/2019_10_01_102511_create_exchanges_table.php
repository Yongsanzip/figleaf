<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateExchangesTable extends Migration
{
    /**
     * 프로젝트 - 후원 - 교환 테이블 명세
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exchanges', function (Blueprint $table) {
            //컬럼명세
            $table->bigIncrements('id');
            $table->bigInteger('support_id')->unsigned()->comment('후원 id');
            $table->tinyInteger('request_yn')->unsigned()->comment('교환요청여부');
            $table->tinyInteger('status_yn')->unsigned()->default(0)->comment('교황여부(상태)');
            $table->string('reason')->comment('교환 사유');
            $table->timestamps();
            $table->softDeletes();
        });
        //테이블 명세
        DB::statement('ALTER TABLE `exchanges` COMMENT = "교환 테이블"');
    }

    /**
     * 교환 테이블 삭제
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('exchanges');
    }
}
