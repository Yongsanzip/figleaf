<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateBannersTable extends Migration
{
    /**
     * 배너 테이블 명세
     *
     * @return void
     */
    public function up()
    {
        Schema::create('banners', function (Blueprint $table) {
            //컬럼 명세
            $table->bigIncrements('id');
            $table->tinyInteger('position')->unsigned()->comment('배너 위치');
            $table->string('name', 100)->comment('배너명');
            $table->timestamps();
        });
        //테이블 명세
        DB::statement('ALTER TABLE `banners` COMMENT = "배너 테이블"');
    }

    /**
     * 배너 테이블 삭제
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('banners');
    }
}
