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
            $table->string('gate_pass_no')->nullable();
            $table->date('date')->nullable();
            $table->unsignedInteger('no')->nullable();
            $table->decimal('quantity', 8, 2)->nullable();
            $table->string('unit')->nullable();
            $table->string('description')->nullable();
            $table->enum('classification', ['hybrid', 'inbred'])->nullable();
            $table->string('allocation')->nullable();
            $table->string('balance')->nullable();
            $table->string('lot_number')->nullable();
            $table->string('requesting_officer')->nullable();
            $table->string('authorized_by')->nullable();
            $table->string('received_by')->nullable();
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