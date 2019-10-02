<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateSizeCategoriesTable extends Migration
{
    /**
     * 프로젝트 - 프로젝트 상품 사이즈 테이블 - 사이즈 카테고리 테이블
     *
     * @return void
     */
    public function up()
    {
        Schema::create('size_categories', function (Blueprint $table) {
            //컬럼 명세
            $table->bigIncrements('id');
            $table->string('category_name')->comment('카테고리 이름');
            $table->timestamps();
        });
        //테이블 명세
        DB::statement('ALTER TABLE `size_categories` COMMENT = "사이즈 카테고리 테이블"');
    }

    /**
     * 사이즈 카테고리 테이블
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('size_categories');
    }
}
