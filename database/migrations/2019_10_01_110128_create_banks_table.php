<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateBanksTable extends Migration
{
    /**
     * 프로젝트 - 후원 - 결제 - 은행 테이블 명세
     *
     * @return void
     */
    public function up()
    {
        Schema::create('banks', function (Blueprint $table) {
            //컬럼 명세
            $table->bigIncrements('id');
            $table->string('bank_name', 30)->comment('은행명');
            $table->timestamps();
        });
        //테이블 명세
        DB::statement('ALTER TABLE `banks` COMMENT = "은행 테이블"');
    }

    /**
     * 은행 테이블 삭제
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('banks');
    }
}
