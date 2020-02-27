<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateCommunitiesTable extends Migration
{
    /**
     * 프로젝트 - 커뮤니티 테이블 명세
     *
     * @return void
     */
    public function up()
    {
        Schema::create('communities', function (Blueprint $table) {
            //컬럼 명세
            $table->bigIncrements('id');
            $table->bigInteger('project_id')->unsigned()->comment('프로젝트 id');
            $table->bigInteger('user_id')->unsigned()->comment('유저 id');
            $table->text('contents')->comment('내용');
            $table->tinyInteger('hidden_yn')->unsigned()->default(0)->comment('히든여부(0: 보임 1:숨김)');
            $table->timestamps();
            $table->softDeletes();
        });
        //테이블 명세
        DB::statement('ALTER TABLE `communities` COMMENT = "커뮤니티 테이블"');
    }

    /**
     * 커뮤니티 테이블 삭제
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('communities');
    }
}
