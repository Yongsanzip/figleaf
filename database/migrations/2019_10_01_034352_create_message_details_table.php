<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateMessageDetailsTable extends Migration
{
    /**
     * 프로젝트 - 메세지 - 메세지 상세 테이블
     * 읽음 여부는 1:1대화만 존재하기 때문에 자신 외에 다른사람이 열람 했을 시 열람 여부 0값을 바꿔서 처리.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('message_details', function (Blueprint $table) {
            //컬럼 명세
            $table->bigIncrements('id');
            $table->bigInteger('message_id')->unsigned()->comment('메세지 id');
            $table->bigInteger('user_id')->unsigned()->comment('유저 id');
            $table->text('content')->comment('컨텐츠');
            $table->tinyInteger('write_yn')->default(0)->comment('읽음 여부');
            $table->timestamps();
            $table->softDeletes();
        });
        //테이블 명세
        DB::statement('ALTER TABLE `message_details` COMMENT = "메세지 상세 테이블"');
    }

    /**
     * 메세지 상세 테이블 삭제
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('message_details');
    }
}
