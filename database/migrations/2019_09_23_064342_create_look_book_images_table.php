<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLookBookImagesTable extends Migration
{
    /**
     * 포트폴리오 -> 룩북 -> 룩북 이미지 명세
     * 룩북 이미지는 많이 들어가기 때문에 포트폴리오 외에 따로 뺀다.
     *
     * @return void
     */
    public function up()
    {
        //컬럼 명세
        Schema::create('look_book_images', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('look_book_id')->unsigned()->comment('룩북 id');
            $table->string('image_type', 10)->comment('이미지 타입 ex)jpg, gif...');
            $table->string('image_path')->comment('이미지 경로');
            $table->string('origin_name')->comment('이미지 실 이름');
            $table->timestamps();
            $table->softDeletes();
        });
        //테이블 명세
        DB::statement('ALTER TABLE `look_book_images` COMMENT = "룩북 이미지 테이블"');
    }

    /**
     * 룩북 이미지 삭제
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('look_book_images');
    }
}
