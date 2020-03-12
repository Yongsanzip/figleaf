<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSupportLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('support_logs', function (Blueprint $table) {
            $table->bigIncrements('id')->comment('후원로그ID');
            $table->bigInteger('support_id')->nullable()->unsigned()->comment('후원ID');
            $table->bigInteger('support_option_id')->nullable()->unsigned()->comment('후원옵션ID');
            $table->integer('amount')->nullable()->comment('갯수');
            $table->integer('price')->nullable()->comment('후원금액');
            $table->tinyInteger('condition')->default(0)->comment('후원상태(0: 대기, 1:후원 , 10:환불대기 11:부분환불 , 12:전체환불)');
            $table->text('description')->nullable()->comment('사유');
            $table->timestamps();
        });

        DB::statement('ALTER TABLE `support_logs` COMMENT = "후원 로그 테이블"');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('support_logs');
    }
}
