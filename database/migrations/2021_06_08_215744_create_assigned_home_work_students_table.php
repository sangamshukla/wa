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
            $table->foreignId('assigned_home_work_id')->contrained('assigned_home_works')->nullable();
            $table->string('type_of_homework')->nullable();
            $table->integer('student_id')->nullable();
            $table->boolean('is_approved')->nullable();
            $table->string('teacher_remark')->nullable();
            $table->string('assigned_content')->nullable();
            $table->string('given_marks')->nullable();
            $table->string('star_rating')->nullable();
            $table->mediumText('comment_for_student')->nullable();
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
