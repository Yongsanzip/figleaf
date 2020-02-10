<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddSizeCategoriesToSizesTable extends Migration
{
    /**
     * 프로젝트 상품 사이즈 테이블과 사이즈 카테고리 테이블과의 관계 형성
     *
     * @return void
     */
    public function up()
    {
        Schema::table('sizes', function (Blueprint $table) {
            $table->foreign('category_id')->references('id')->on('size_categories')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * 관계 삭제
     *
     * @return void
     */
    public function down()
    {
        Schema::table('sizes', function (Blueprint $table) {
            $table->dropForeign('sizes_category_id_foreign');
        });
    }
}
