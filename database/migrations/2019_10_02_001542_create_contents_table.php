<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateContentsTable extends Migration
{
    /**
     * 컨텐츠 테이블 명세
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contents', function (Blueprint $table) {
            //컬럼 명세
            $table->bigIncrements('id');
            $table->tinyInteger('menu')->comment('컨텐츠 메뉴');
            $table->timestamps();
        });
        //테이블 명세
        DB::statement('ALTER TABLE `contents` COMMENT = "컨텐츠 테이블"');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contents');
    }
}
