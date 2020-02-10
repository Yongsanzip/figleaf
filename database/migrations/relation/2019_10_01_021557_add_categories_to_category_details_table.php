<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCategoriesToCategoryDetailsTable extends Migration
{
    /**
     * 1차 카테고리와 2차 카테고리 관계 형성.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('category_details', function (Blueprint $table) {
            $table->foreign('category_id')->references('id')->on('categories')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * 관계 삭제
     *
     * @return void
     */
    public function down()
    {
        Schema::table('category_details', function (Blueprint $table) {
            $table->dropForeign('category_details_category_id_foreign');
        });
    }
}
