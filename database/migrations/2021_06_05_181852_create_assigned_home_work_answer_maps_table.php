<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAssignedHomeWorkAnswerMapsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assigned_home_work_answer_maps', function (Blueprint $table) {
            $table->id();
            $table->foreignId('_id')->constrained('assigned_home_work_students');
            $table->string('home_work_image_path');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('assigned_home_work_answer_maps');
    }
}
