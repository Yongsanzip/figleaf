<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBrandsTable extends Migration
{
    /**
     * 포트폴리오 -> 브랜드 테이블 명세
     *
     * @return void
     */
    public function up()
    {
        //컬럼 명세
        Schema::create('brands', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('portfolio_id')->unsigned()->comment('포트폴리오 id');
            $table->string('name_ko', 50)->nullable()->comment('브랜드명(한)');
            $table->string('name_cn', 50)->nullable()->comment('브랜드명(중)');
            $table->string('name_en', 50)->nullable()->comment('브랜드명(영)');
            $table->text('contents_ko')->nullable()->comment('브랜드설명(한)');
            $table->text('contents_cn')->nullable()->comment('브랜드설명(중)');
            $table->text('contents_en')->nullable()->comment('브랜드설명(영)');
            $table->timestamps();
            $table->softDeletes();
        });
        //테이블 명세
        DB::statement('ALTER TABLE `brands` COMMENT = "브랜드 테이블"');
    }

    /**
     * 브랜드 테이블 삭제
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('brands');
    }
}
