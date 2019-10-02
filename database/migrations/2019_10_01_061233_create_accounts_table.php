<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateAccountsTable extends Migration
{
    /**
     * 프로젝트 - 정산 정보 테이블 명세
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accounts', function (Blueprint $table) {
            //컬럼 명세
            $table->bigIncrements('id');
            $table->bigInteger('project_id')->unsigned()->comment('프로젝트 id');
            $table->tinyInteger('condition')->unsigned()->comment('개인0/사업자1구분');
            $table->string('company_number', 100)->nullable()->comment('사업자등록번호');
            $table->string('email', 100)->nullable()->comment('이메일');
            $table->string('phone', 100)->nullable()->comment('전화번호');
            $table->timestamps();
            $table->softDeletes();
        });
        //테이블 명세
        DB::statement('ALTER TABLE `accounts` COMMENT = "정산 정보 테이블"');
    }

    /**
     * 정산 정보 테이블 삭제
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('accounts');
    }
}
