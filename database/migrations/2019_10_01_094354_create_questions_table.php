<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateQuestionsTable extends Migration
{
    /**
     * 1:1 문의 테이블 명세
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questions', function (Blueprint $table) {
            //컬럼 명세
            $table->bigIncrements('id');
            $table->bigInteger('user_id')->unsigned()->comment('유저 id');
            $table->bigInteger('answer_user_id')->unsigned()->comment('관리자(답변자) id');
            $table->string('title')->comment('제목');
            $table->text('content')->comment('내용');
            $table->text('answer')->nullable()->comment('답변');
            $table->tinyInteger('answer_yn')->default(0)->comment('답변여부');
            $table->timestamp('answer_at')->nullable()->comment('답변 등록일');
            $table->timestamps();
            $table->softDeletes();
        });
        //테이블 명세
        DB::statement('ALTER TABLE `questions` COMMENT = "1:1 문의 테이블"');
    }

    /**
     * 1:1 문의 테이블 삭제
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('questions');
    }
}
