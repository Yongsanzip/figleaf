<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateCategoryDetailsTable extends Migration
{
    /**
     * 2차 카테고리 명세
     *
     * @return void
     */
    public function up()
    {
        //컬럼 명세
        Schema::create('category_details', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('code')->unique()->nullable()->comment('카테고리코드');
            $table->bigInteger('category_id')->unsigned()->comment('1차 카테고리 id');
            $table->string('category_name', 50)->comment('2차 카테고리 이름');
            $table->timestamps();
        });
        //테이블 명세
        DB::statement('ALTER TABLE `category_details` COMMENT = "상단 메뉴 2차 카테고리 테이블"');
    }

    /**
     * 테이블 삭제
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('category_details');
    }
}
