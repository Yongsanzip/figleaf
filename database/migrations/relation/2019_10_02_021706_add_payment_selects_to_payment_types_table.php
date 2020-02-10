<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddPaymentSelectsToPaymentTypesTable extends Migration
{
    /**
     * 결제수단 테이블과 결제 셀렉트 테이블과의 관계 형성
     *
     * @return void
     */
    public function up()
    {
        Schema::table('payment_types', function (Blueprint $table) {
            $table->foreign('select_id')->references('id')->on('payment_selects')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * 관계 삭제
     *
     * @return void
     */
    public function down()
    {
        Schema::table('payment_types', function (Blueprint $table) {
            $table->dropForeign('payment_types_select_id_foreign');
        });
    }
}
