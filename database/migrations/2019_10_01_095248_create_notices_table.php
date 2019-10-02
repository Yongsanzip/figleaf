<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateNoticesTable extends Migration
{
    /**
     * 공지사항 테이블 명세
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notices', function (Blueprint $table) {
            //컬럼 명세
            $table->bigIncrements('id');
            $table->bigInteger('user_id')->unsigned()->comment('유저 id');
            $table->string('title')->comment('제목');
            $table->text('content')->comment('내용');
            $table->integer('hit')->unsigned()->default(0)->comment('조회수');
            $table->tinyInteger('up_fix')->unsigned()->comment('상단고정여부(0미고정 1고정)');
            $table->timestamps();
            $table->softDeletes();
        });
        //테이블 명세
        DB::statement('ALTER TABLE `notices` COMMENT = "공지사항 테이블"');
    }

    /**
     * 공지사항 테이블 삭제
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('notices');
    }
}
