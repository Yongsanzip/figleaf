<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddLookBooksToLookBookImagesTable extends Migration
{
    /**
     * 룩북 이미지 테이블과 룩북 테이블의 관계 형성
     *
     * @return void
     */
    public function up()
    {
        Schema::table('look_book_images', function (Blueprint $table) {
            $table->foreign('look_book_id')->references('id')->on('look_books')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * 관계 삭제
     *
     * @return void
     */
    public function down()
    {
        Schema::table('look_book_images', function (Blueprint $table) {
            $table->dropForeign('look_book_images_look_book_id_foreign');
        });
    }
}
