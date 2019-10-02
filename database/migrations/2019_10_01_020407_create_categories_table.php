<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateCategoriesTable extends Migration
{
    /**
     * 상단 메뉴(navbar) 카테고리 테이블 명세
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            //컬럼명세
            $table->bigIncrements('id');
            $table->string('category_name', 50)->comment('카테고리 이름');
            $table->timestamps();
        });
        //테이블 명세
        DB::statement('ALTER TABLE `categories` COMMENT = "상단 메뉴 카테고리 테이블"');
    }

    /**
     * 테이블 삭제
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categories');
    }
}
