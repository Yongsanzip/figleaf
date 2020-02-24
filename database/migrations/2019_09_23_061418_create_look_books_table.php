<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLookBooksTable extends Migration
{
    /**
     * 포트폴리오 -> 룩북 테이블 명세
     * 뒤에 관계맺은 테이블이 있더라도 중도 저장이 있기 때문에 텍스트로 입력받는 연도는 nullable 처리함.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('look_books', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('portfolio_id')->unsigned()->comment('포트폴리오 id');
            $table->string('season',60)->nullable()->comment('시즌');
            $table->string('year', 10)->nullable()->comment('연도 ex.2019, 2018');
            $table->timestamps();
            $table->softDeletes();
        });
        //테이블 명세
        DB::statement('ALTER TABLE `look_books` COMMENT = "룩북 테이블"');
    }

    /**
     * 룩북 테이블 삭제
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('look_books');
    }
}
