<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreatePaymentSelectsTable extends Migration
{
    /**
     * 프로젝트 - 후원 - 결제 - 결제 수단 - 결제 셀렉트 리스트 테이블 명세
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payment_selects', function (Blueprint $table) {
            //컬럼 명세
            $table->bigIncrements('id');
            $table->string('select_name_ko', 20)->comment('셀렉트 이름(한)');
            $table->string('select_name_cn', 20)->comment('셀렉트 이름(중)');
            $table->string('select_name_en', 20)->comment('셀렉트 이름(영)');
            $table->timestamps();
        });
        //테이블 명세
        DB::statement('ALTER TABLE `payment_selects` COMMENT = "결제 셀렉트 리스트 테이블"');
    }

    /**
     * 결제 셀렉트 리스트 테이블 삭제
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('payment_selects');
    }
}
