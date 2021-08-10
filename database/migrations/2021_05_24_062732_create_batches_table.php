<?php

use App\Models\ClassMaster;
use App\Models\ClassSettings;
use App\Models\Subject;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBatchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    // for class
    public function up()
    {
        Schema::create('batches', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('batch_price_per_session')->nullable();
            $table->string('teacher_available_status')->nullable();
            $table->string('no_of_seats')->nullable();
            $table->dateTime('batch_start_date');
            $table->dateTime('batch_end_date')->nullable();
            $table->foreignIdFor(ClassMaster::class);
            $table->foreignIdFor(Subject::class);
            $table->string('status')->nullable();
            $table->string('location')->nullable();
            $table->string('sell_each_session')->default('0');
<<<<<<< HEAD:database/migrations/2021_01_26_062732_create_batches_table.php
            $table->integer('created_by')->nullable();
            $table->integer('class_settings_id')->nullable();
            $table->integer('duration_per_session')->nullable();
=======
>>>>>>> 62b9ca228a5128571e8a656e2897ee654d780fd9:database/migrations/2021_05_24_062732_create_batches_table.php
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
        Schema::dropIfExists('batches');
    }
}
