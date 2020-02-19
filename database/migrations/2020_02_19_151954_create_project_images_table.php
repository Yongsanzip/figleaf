<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('project_images', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('project_id')->unsigned()->comment('프로젝트 id');
            $table->tinyInteger('image_division')->unsigned()->comment('이미지 구분(1: 대표이미지 2: 사업자 등록증 3: 통장사본)');
            $table->string('image_type', 10)->comment('이미지타입 ex.jpg, gif...');
            $table->string('image_path')->comment('이미지 경로');
            $table->string('origin_name')->comment('이미지 실 이름');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('project_images');
    }
}
