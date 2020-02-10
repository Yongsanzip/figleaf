<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddMaterialsToFabricsTable extends Migration
{
    /**
     * 원단 테이블과 재질 테이블의 관계 형성
     *
     * @return void
     */
    public function up()
    {
        Schema::table('fabrics', function (Blueprint $table) {
            $table->foreign('material_id')->references('id')->on('materials')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * 관계 삭제
     *
     * @return void
     */
    public function down()
    {
        Schema::table('fabrics', function (Blueprint $table) {
            $table->dropForeign('fabrics_material_id_foreign');
        });
    }
}
