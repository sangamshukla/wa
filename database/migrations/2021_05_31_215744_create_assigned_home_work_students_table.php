<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAssignedHomeWorkStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assigned_home_work_students', function (Blueprint $table) {
            $table->id();
            $table->integer('assigned_homework_id')->nullable();
            $table->string('pdf_details');
            $table->string('type_of_homework')->nullable();
            $table->integer('student_id')->nullable();
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
        Schema::dropIfExists('assigned_home_work_students');
    }
}
