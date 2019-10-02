<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAssociationActivitiesTable extends Migration
{
    /**
     * 포트폴리오 -> 협회활동 테이블
     * 포트폴리오는 중도 저장이 가능하기 때문에 모든 컬럼이 0 or nullable로 처리
     *
     * @return void
     */
    public function up()
    {
        //컬럼 명세
        Schema::create('association_activities', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('portfolio_id')->unsigned()->comment('포트폴리오 id');
            $table->string('start_year', 5)->nullable()->comment('시작연도');
            $table->string('end_year', 5)->nullable()->comment('끝연도');
            $table->string('association_ko', 50)->nullable()->comment('협회명(한)');
            $table->string('association_cn', 50)->nullable()->comment('협회명(중)');
            $table->string('association_en', 50)->nullable()->comment('협회명(영)');
            $table->timestamps();
            $table->softDeletes();
        });
        //테이블 명세
        DB::statement('ALTER TABLE `association_activities` COMMENT = "협회활동 테이블"');
    }

    /**
     * 협회활동 테이블 삭제
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('association_activities');
    }
}
