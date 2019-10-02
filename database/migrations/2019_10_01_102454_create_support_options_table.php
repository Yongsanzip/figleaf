<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateSupportOptionsTable extends Migration
{
    /**
     * 프로젝트 - 후원 - 후원 옵션 테이블 명세
     *
     * @return void
     */
    public function up()
    {
        Schema::create('support_options', function (Blueprint $table) {
            //컬럼명세
            $table->bigIncrements('id');
            $table->bigInteger('support_id')->unsigned()->comment('후원 id');
            $table->bigInteger('option_id')->unsigned()->comment('옵션 id');
            $table->timestamps();
            $table->softDeletes();
        });
        //테이블 명세
        DB::statement('ALTER TABLE `support_options` COMMENT = "후원 옵션 테이블"');
    }

    /**
     * 후원 옵션 테이블 삭제
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('support_options');
    }
}
