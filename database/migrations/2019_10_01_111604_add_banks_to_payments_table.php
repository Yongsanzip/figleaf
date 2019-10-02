<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddBanksToPaymentsTable extends Migration
{
    /**
     * 결제 테이블과 은행 테이블과의 관계 형성
     *
     * @return void
     */
    public function up()
    {
        Schema::table('payments', function (Blueprint $table) {
            $table->foreign('bank_id')->references('id')->on('banks')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * 관계 삭제
     *
     * @return void
     */
    public function down()
    {
        Schema::table('payments', function (Blueprint $table) {
            $table->dropForeign('payments_bank_id_foreign');
        });
    }
}
