<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStocksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stocks', function (Blueprint $table) {
            $table->id();
            $table->string('gate_pass_no');
            $table->date('date');
            $table->unsignedInteger('no');
            $table->string('quantity');
            $table->string('unit');
            $table->text('description');
            $table->enum('classification', ['hybrid', 'inbred'])->default('inbred');
            $table->string('allocation');
            $table->string('balance');
            $table->string('lot_number');
            $table->string('requesting_officer');
            $table->string('authorized_by');
            $table->string('received_by');
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
        Schema::dropIfExists('stocks');
    }
}
