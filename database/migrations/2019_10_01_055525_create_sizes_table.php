<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateSizesTable extends Migration
{
    /**
     * 프로젝트 - 프로젝트 상품 사이즈 테이블 명세
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sizes', function (Blueprint $table) {
            //컬럼 명세
            $table->bigIncrements('id');
            $table->bigInteger('project_id')->unsigned()->comment('프로젝트 id');
            $table->bigInteger('category_id')->unsigned()->comment('사이즈 카테고리 id');
            $table->double('size')->unsigned()->nullable()->comment('사이즈');
            $table->double('total_length')->unsigned()->nullable()->comment('총기장');
            $table->double('shoulder')->unsigned()->nullable()->comment('어깨');
            $table->double('chest')->unsigned()->nullable()->comment('가슴');
            $table->double('arms_length')->unsigned()->nullable()->comment('팔길이');
            $table->double('sleeve')->unsigned()->nullable()->comment('소매단면');
            $table->double('armhole')->unsigned()->nullable()->comment('암홀');
            $table->double('waist')->unsigned()->nullable()->comment('허리');
            $table->double('hem')->unsigned()->nullable()->comment('밑단');
            $table->double('crotch')->unsigned()->nullable()->comment('밑위');
            $table->double('hip')->unsigned()->nullable()->comment('허벅지단면');
            $table->double('thigh')->unsigned()->nullable()->comment('엉덩이단면');
            $table->double('string_length')->unsigned()->nullable()->comment('끈길이');
            $table->double('horizontal')->unsigned()->nullable()->comment('가로');
            $table->double('vertical')->unsigned()->nullable()->comment('세로');
            $table->double('forefoot')->unsigned()->nullable()->comment('앞굽');
            $table->double('heels')->unsigned()->nullable()->comment('뒷굽');
            $table->timestamps();
            $table->softDeletes();
        });
        //테이블 명세
        DB::statement('ALTER TABLE `sizes` COMMENT = "프로젝트 상품 사이즈 테이블"');
    }

    /**
     * 프로젝트 상품 사이즈 테이블 삭제
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sizes');
    }
}
