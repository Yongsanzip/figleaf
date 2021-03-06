<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateIntroductionsTable extends Migration
{
    /**
     * 프로젝트 - 디지아너 / 브랜드 소개 테이블 명세
     *
     * @return void
     */
    public function up()
    {
        Schema::create('introductions', function (Blueprint $table) {
            //컬럼 명세
            $table->bigIncrements('id');
            $table->bigInteger('project_id')->unsigned()->comment('프로젝트 id');
            $table->string('brand_name', 100)->nullable()->comment('브랜드명');
            $table->string('designer_name', 100)->nullable()->comment('디자이너명');
            $table->string('email', 100)->nullable()->comment('이메일');
            $table->string('phone', 100)->nullable()->comment('전화번호');
            $table->string('facebook', 100)->nullable()->comment('페이스북');
            $table->string('instagram', 100)->nullable()->comment('인스타그램');
            $table->string('twitter', 100)->nullable()->comment('트위터');
            $table->string('homepage', 100)->nullable()->comment('홈페이지');
            $table->tinyInteger('email_hidden')->default(0)->comment('이메일 히든(0:보임 1:숨김)');
            $table->tinyInteger('phone_hidden')->default(0)->comment('전화번호 히든(0:보임 1:숨김)');
            $table->tinyInteger('facebook_hidden')->default(0)->comment('페이스북 히든(0:보임 1:숨김)');
            $table->tinyInteger('instagram_hidden')->default(0)->comment('인스타그램 히든(0:보임 1:숨김)');
            $table->tinyInteger('twitter_hidden')->default(0)->comment('트위터 히든(0:보임 1:숨김)');
            $table->tinyInteger('homepage_hidden')->default(0)->comment('홈페이지 히든(0:보임 1:숨김)');
            $table->timestamps();
            $table->softDeletes();
        });
        //테이블 명세
        DB::statement('ALTER TABLE `introductions` COMMENT = "디자이너 / 브랜드 소개 테이블"');
    }

    /**
     * 디자이너 / 브랜드 소개 테이블 삭제
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('introductions');
    }
}
