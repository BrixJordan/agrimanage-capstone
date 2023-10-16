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
            $table->string('captured_image')->nullable();
            $table->string('first_name');
            $table->string('middle_name')->nullable();
            $table->string('extension_name')->nullable();
            $table->enum('sex', ['Male', 'Female', 'Other'])->nullable();
            $table->string('email_add')->nullable();
            $table->string('house_number')->nullable();
            $table->string('street')->nullable();
            $table->string('barangay')->nullable();
            $table->string('municipality')->nullable();
            $table->string('province')->nullable();
            $table->string('region')->nullable();
            $table->string('religion')->nullable();
            $table->string('civil_status')->nullable();
            $table->enum('education', ['elementary', 'high_school', 'college', 'post_graduate'])->nullable();
            $table->enum('disability', ['yes', 'no'])->nullable();
            $table->enum('four_ps', ['yes', 'no'])->nullable();
            $table->string('government_id')->nullable();
            $table->string('id_number')->nullable();
            $table->enum('cooperative_member', ['yes', 'no'])->nullable();
            $table->string('coop_specify')->nullable();
            $table->string('maiden_name')->nullable();
            $table->enum('household_head', ['yes', 'no'])->nullable();
            $table->string('head_name')->nullable();
            $table->string('relationship')->nullable();
            $table->string('emergency_contact')->nullable();
            $table->string('emergency_contact_number')->nullable();
            $table->string('farmers')->nullable();
            $table->string('work')->nullable();
            $table->string('fishing')->nullable();
            $table->string('involvement')->nullable();
            $table->string('income')->nullable();
            $table->string('farm_location')->nullable();
            $table->decimal('total_farm_area', 10, 2)->nullable();
            $table->enum('within_ancestral_domain', ['yes', 'no'])->nullable();
            $table->enum('agrarian_reform_beneficiary', ['yes', 'no'])->nullable();
            $table->string('ownership_document_no')->nullable();
            $table->string('ownership_type')->nullable();
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
