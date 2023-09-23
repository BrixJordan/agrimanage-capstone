<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGanapsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ganaps', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable(); // Event title (you can store the image path here)
            $table->string('event_name'); // Event name
            $table->text('event_description'); // Event description
            $table->dateTime('event_datetime'); // Event date and time
            $table->string('event_location');
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
        Schema::dropIfExists('ganaps');
    }
}
