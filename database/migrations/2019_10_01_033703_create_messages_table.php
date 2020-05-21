<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateMessagesTable extends Migration
{
    /**
     * 프로젝트 - 메세지 테이블 명세
     *
     * @return void
     */
    public function up()
    {
        Schema::create('messages', function (Blueprint $table) {
            //컬럼 명세
            $table->bigIncrements('id');
            $table->bigInteger('project_id')->unsigned()->comment('프로젝트 id');
            $table->bigInteger('user_id')->unsigned()->comment('유저 id');
            $table->timestamps();
            $table->softDeletes();
        });
        //테이블 명세
        DB::statement('ALTER TABLE `messages` COMMENT = "메세지 테이블"');
    }

    /**
     * 메세지 테이블 삭제
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('messages');
    }
}
