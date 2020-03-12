<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * 유저테이블 생성
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            //컬럼 명세
            $table->bigIncrements('id');
            $table->bigInteger('role_id')->unsigned()->default(1)->comment('유저 role');
            $table->string('user_code',255)->unique()->comment('유저코드');
            $table->string('email',60)->unique();
            $table->string('password')->comment('비밀번호');
            $table->string('name',30)->comment('이름');
            $table->string('home_phone',50)->comment('전화번호');
            $table->string('cellphone', 50)->comment('휴대폰번호');
            $table->string('zip_code', 30)->nullable()->comment('우편번호');
            $table->string('address')->comment('주소');
            $table->string('address_detail')->comment('상세주소');
            //gender는 radio button
            $table->tinyInteger('gender')->comment('성별(남:0, 여:1)');
            $table->tinyInteger('grade')->comment('등급(ex.골드회원, 실버회원)');
            $table->bigInteger('saving_point')->default(0)->comment('적립금');
            $table->boolean('email_yn')->comment('이메일 수신여부(미수신:0, 수신:1)');
            $table->boolean('sms_yn')->comment('SMS 수신여부(미수신:0, 수신:1)');
            $table->string('verified_token')->nullable()->comment('이메일인증토큰');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('thumbnail')->nullable()->comment('썸네일 (디자이너 이미지)');
            $table->bigInteger('bank_id')->nullable()->unsigned()->comment('은행ID');
            $table->string('bank_account_holder')->nullable()->comment('예금주명');
            $table->string('bank_account_number')->nullable()->comment('예금주명');
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();

            // $table->foreign('role_id')->references('id')->on('roles')->onUpdate('cascade')->onDelete('cascade');
        });
        //테이블 명세
        DB::statement('ALTER TABLE `users` COMMENT = "유저테이블"');

    }

    /**
     * 유저테이블 삭제
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
