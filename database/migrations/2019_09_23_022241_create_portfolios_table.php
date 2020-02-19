<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePortfoliosTable extends Migration
{
    /**
     * 포트폴리오 테이블 생성
     * 포트폴리오는 중도 저장이 가능하기 때문에 모든 컬럼이 0 or nullable로 처리
     * 이후 최종 저장때는 주석참조
     *
     * @return void
     */
    public function up()
    {
        Schema::create('portfolios', function (Blueprint $table) {
            //컬럼 명세
            $table->bigIncrements('id');
            $table->bigInteger('user_id')->unsigned()->comment('users id');
            //프로필 설명(한) not null(최종저장)
            $table->text('content_ko')->nullable()->comment('프로필설명(한)');
            $table->text('content_cn')->nullable()->comment('프로필설명(중)');
            $table->text('content_en')->nullable()->comment('프로필설명(영)');
            $table->boolean('hidden_yn')->default(0)->comment('숨김여부(미숨김:0, 숨김:1)');
            $table->boolean('open_yn')->default(0)->comment('열람여부(미열람:0, 열람:1)');
            $table->string('email')->nullable()->comment('이메일');
            //전화번호, 페이스북, 인스타그램, 트위터, 홈페이지
            $table->string('home_phone', 50)->nullable()->comment('전화번호');
            $table->string('facebook', 50)->nullable()->comment('페이스북');
            $table->string('instagram', 50)->nullable()->comment('인스타그램');
            $table->string('twitter', 50)->nullable()->comment('트위터');
            $table->string('homepage', 50)->nullable()->comment('홈페이지');
            $table->boolean('email_hidden')->default(0)->comment('이메일 히든여부(히든x:0, 히든:1)');
            $table->boolean('phone_hidden')->default(0)->comment('전화번호 히든여부(히든x:0, 히든:1)');
            $table->boolean('facebook_hidden')->default(0)->comment('페이스북 히든여부(히든x:0, 히든:1)');
            $table->boolean('instagram_hidden')->default(0)->comment('인스타 히든여부(히든x:0, 히든:1)');
            $table->boolean('twitter_hidden')->default(0)->comment('트위터 히든여부(히든x:0, 히든:1)');
            $table->boolean('homepage_hidden')->default(0)->comment('홈페이지 히든여부(히든x:0, 히든:1)');
            $table->timestamps();
            $table->softDeletes();
        });
        //테이블 명세
        DB::statement('ALTER TABLE `portfolios` COMMENT = "포트폴리오 테이블"');
    }

    /**
     * 포트폴리오 테이블 삭제
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('portfolios');
    }
}
