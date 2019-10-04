<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExamtransTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_examtrans', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('usertrans_id')->nullable();
            $table->integer('question_id')->nullable();
            $table->integer('user_answer');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('examtrans');
    }
}
