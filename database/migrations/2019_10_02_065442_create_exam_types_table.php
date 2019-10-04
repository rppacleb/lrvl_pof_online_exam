<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExamTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_exam_type', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->integer('subject_id')->nullable();
            $table->string('num_item');
            $table->string('time_limit');
            $table->string('passing_rate');
            $table->enum('status', ['active', 'disable']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('exam_types');
    }
}
