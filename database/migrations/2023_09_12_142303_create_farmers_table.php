<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFarmersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('farmers', function (Blueprint $table) {
            $table->id();
            $table->string('farmer_surname');
            $table->string('farmer_firstname');
            $table->string('farmer_middlename')->nullable();
            $table->string('farmer_extension')->nullable();
            $table->enum('farmer_sex', ['Male', 'Female'])->nullable();
            $table->text('address');
            $table->string('religion')->nullable();
            $table->string('status')->nullable();
            $table->string('education')->nullable(); // Change to string
            $table->enum('disability', ['Yes', 'No'])->nullable();
            $table->enum('fourps', ['Yes', 'No'])->nullable();
            $table->enum('gov_id', ['Yes', 'No'])->nullable();
            $table->string('id_type')->nullable();
            $table->string('id_number')->nullable();
            $table->enum('farmer_association', ['Yes', 'No'])->nullable();
            $table->string('association_details')->nullable();
            $table->string('emergency_contact')->nullable();
            $table->string('farm_profile')->nullable(); // Change to string
            $table->string('farming_activity')->nullable(); // Change to string
            $table->string('work_kind')->nullable(); // Change to string
            $table->string('fishing_activity')->nullable(); // Change to string
            $table->string('youth_involvement')->nullable(); // Change to string
            $table->string('gross_income_farming')->nullable();
            $table->string('gross_income_non_farming')->nullable();
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
        Schema::dropIfExists('farmers');
    }
}
