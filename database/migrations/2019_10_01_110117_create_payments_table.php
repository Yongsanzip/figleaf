<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreatePaymentsTable extends Migration
{
    /**
     * 프로젝트 - 후원 - 결제 테이블 명세
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            //컬럼 명세
            $table->bigIncrements('id');
            $table->bigInteger('support_id')->unsigned()->comment('후원 id');
            $table->bigInteger('bank_id')->unsigned()->comment('은행 id');
            $table->bigInteger('payment_type_id')->unsigned()->comment('결제수단 id');
            $table->integer('savings')->unsigned()->comment('적립금');
            $table->string('payment_number', 50)->comment('결제번호');
            $table->integer('payment_price')->unsigned()->comment('결제금액');
            $table->string('refund_user_name', 30)->nullable()->comment('환불예금주명');
            $table->string('refund_account_number')->comment('환불계좌번호');
            $table->timestamps();
            $table->softDeletes();
        });
        //테이블 명세
        DB::statement('ALTER TABLE `payments` COMMENT = "결제 테이블"');
    }

    /**
     * 결제 테이블 삭제
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('payments');
    }
}
