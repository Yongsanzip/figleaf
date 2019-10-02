<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreatePaymentTypesTable extends Migration
{
    /**
     * 프로젝트 - 후원 - 결제 - 결제 수단 테이블 명세
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payment_types', function (Blueprint $table) {
            //컬럼 명세
            $table->bigIncrements('id');
            $table->tinyInteger('payments_type')->default(0)->comment('결제수단');
            $table->timestamps();
        });
        //테이블 명세
        DB::statement('ALTER TABLE `payment_types` COMMENT = "결제 수단 테이블"');
    }

    /**
     * 결제 수단 테이블 삭제
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('payment_types');
    }
}
