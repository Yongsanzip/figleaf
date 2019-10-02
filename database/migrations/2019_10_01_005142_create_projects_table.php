<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateProjectsTable extends Migration
{
    /**
     * 프로젝트 테이블 명세
     * 1. 중도 저장 가능
     * 2. 최종 저장은 erd 참조
     * 3. 판매수량까지는 최종저장까지 미입력해도 되는 부분, 최종 저장에서 여부상태 1로 변경
     *
     * @return void
     */
    public function up()
    {
        //컬럼 명세
        Schema::create('projects', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('user_id')->unsigned()->comment('유저ID');
            $table->bigInteger('category_id')->unsigned()->comment('1차 카테고리');
            $table->bigInteger('category2_id')->unsigned()->comment('2차 카테고리');
            $table->integer('total_cost')->default(0)->comment('모인금액');
            $table->integer('supporter')->default(0)->comment('후원자수');
            $table->integer('count')->default(0)->comment('판매수량');

            $table->tinyInteger('condition')->unsigned()->default(0)->comment('여부상태(0입력중1진행2실패3성공)');

            $table->string('title', 100)->nullable()->comment('제목');
            $table->string('summary')->nullable()->comment('개요');
            $table->integer('success_count')->unsigned()->nullable()->comment('성공개수');
            $table->text('comment')->nullable()->comment('디자이너 코멘트');
//            $table->integer('information')->unsigned()->nullable()->comment('취급정보');
            $table->date('deadline')->nullable()->comment('마감일');
            $table->date('account_date')->nullable()->comment('정산일');
            $table->date('delivery_date')->nullable()->comment('배송일');
            $table->date('delay_date')->nullable()->comment('지연일자');
            $table->text('storytelling')->nullable()->comment('스토리텔링');
            $table->timestamps();
            $table->softDeletes();
        });
        //테이블 명세
        DB::statement('ALTER TABLE `projects` COMMENT = "프로젝트 테이블"');
    }

    /**
     * 프로젝트 테이블 삭제
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('projects');
    }
}
