<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnMessageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::table('messages', function (Blueprint $table) {
            $table->bigInteger('user_id')->unsigned()->comment('발신자 ID');
            $table->bigInteger('project_user_id')->unsigned()->comment('수신자ID');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::table('messages', function (Blueprint $table) {
            $table->dropColumn(['user_id','project_user_id']);
        });
    }
}
