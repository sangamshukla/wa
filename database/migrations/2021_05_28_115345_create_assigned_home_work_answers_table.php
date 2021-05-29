<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAssignedHomeWorkAnswersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assigned_home_work_answers', function (Blueprint $table) {
            $table->id();
            $table->foreignId(AssinHomeWork::class);
            $table->string('content_type');
            $table->string('answered_content')->nullable();
            $table->boolean('is_submitted')->default(true);
            $table->foreignId(User::class);
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
        Schema::dropIfExists('assigned_home_work_answers');
    }
}
