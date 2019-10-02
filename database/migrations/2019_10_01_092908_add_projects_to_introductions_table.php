<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddProjectsToIntroductionsTable extends Migration
{
    /**
     * 디자이너 / 브랜드 소개 테이블과 프로젝트 테이블과의 관계 형성
     *
     * @return void
     */
    public function up()
    {
        Schema::table('introductions', function (Blueprint $table) {
            $table->foreign('project_id')->references('id')->on('projects')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * 관계 삭제
     *
     * @return void
     */
    public function down()
    {
        Schema::table('introductions', function (Blueprint $table) {
            $table->dropForeign('introductions_project_id_foreign');
        });
    }
}
