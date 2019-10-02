<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserGradesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_grades', function (Blueprint $table) {
            //컬럼 명세
            $table->bigIncrements('id');
            $table->bigInteger('user_id')->unsigned()->comment('users id');
            $table->tinyInteger('grade')->default(1)->comment('등급');
            $table->timestamps();
            //외래키 명세

       });
        //테이블 명세
        DB::statement('ALTER TABLE `user_grades` COMMENT = "유저 등급 히스토리"');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_grades');
    }
}
