<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddUsersToUserGradesTable extends Migration
{
    /**
     * 유저등급 테이블의 유저 테이블과의 관계형성
     *
     * @return void
     */
    public function up()
    {
        Schema::table('user_grades', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * 관계 삭제
     *
     * @return void
     */
    public function down()
    {
        Schema::table('user_grades', function (Blueprint $table) {
            $table->dropForeign('user_grades_user_id_foreign');
        });
    }
}
