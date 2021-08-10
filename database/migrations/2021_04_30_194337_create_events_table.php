<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->integer('batch_id');
            $table->string('title');
<<<<<<< HEAD
            $table->date('start');
            $table->date('end');
=======
            $table->datetime('start');
            $table->datetime('end');
>>>>>>> 62b9ca228a5128571e8a656e2897ee654d780fd9
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
        Schema::dropIfExists('events');
    }
}
