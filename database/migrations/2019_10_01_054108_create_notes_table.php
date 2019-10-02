<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateNotesTable extends Migration
{
    /**
     * 프로젝트 - 비고 테이블 명세
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('project_id')->unsigned()->comment('프로젝트 id');
            $table->bigInteger('user_id')->unsigned()->comment('유저 id(관리자)');
            $table->text('contents')->comment('내용');
            $table->timestamps();
            $table->softDeletes();
        });
        //테이블 명세
        DB::statement('ALTER TABLE `notes` COMMENT = "비고 테이블"');
    }

    /**
     * 비고 테이블 삭제
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('notes');
    }
}
