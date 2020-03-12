<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateSupportsTable extends Migration
{
    /**
     * 프로젝트 - 후원 테이블 명세
     *
     * @return void
     */
    public function up()
    {
        Schema::create('supports', function (Blueprint $table) {
            //컬럼명세
            $table->bigIncrements('id');
            $table->bigInteger('user_id')->unsigned()->comment('유저 id');
            $table->bigInteger('project_id')->unsigned()->comment('프로젝트 id');
            $table->integer('total_amount')->comment('주문총액');
            $table->string('support_code')->unique()->nullable()->comment('후원코드');
            $table->string('supporter', 50)->comment('후원자명');
            $table->string('phone', 100)->comment('전화번호');
            $table->string('email', 100)->comment('이메일');
            $table->string('receiver', 50)->nullable()->comment('배송_받는분');
            $table->string('receiver_phone', 100)->nullable()->comment('배송_전화번호');
            $table->string('zipcode', 50)->nullable()->comment('배송_우편번호');
            $table->string('address')->nullable()->comment('배송_1차주소');
            $table->string('address_detail')->nullable()->comment('배송_상세주소');
            $table->text('requirement')->nullable()->comment('배송시 요구사항');
            $table->string('invoice_number')->nullable()->comment('송장번호');
            $table->tinyInteger('delivery_yn')->default(0)->comment('배송여부(0미배송/1배송완료)');
            $table->tinyInteger('condition')->default(0)->comment('후원상태(0: 대기, 1:후원요청 , 2:후원결제완료 10:환불대기 11:부분환불 , 12:전체환불 , 98:결제실패 99: 결제취소)');
            $table->timestamps();
            $table->softDeletes();
        });
        //테이블 명세
        DB::statement('ALTER TABLE `supports` COMMENT = "후원 테이블"');
    }

    /**
     * 후원 테이블 삭제
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('supports');
    }
}
