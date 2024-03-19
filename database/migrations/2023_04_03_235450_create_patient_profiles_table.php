<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patient_profiles', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('phone')->nullable();
            $table->string('Region')->nullable();
            $table->string('age');
            $table->enum('gender', ['Male', 'Female']);
            $table->string('description')->nullable();
            $table->string('photo')->nullable();
            $table->unsignedBigInteger("patient_id")->unique();
            $table->foreign("patient_id")->references("id")->on("patients")->onDelete('cascade');
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
        Schema::dropIfExists('patient_profiles');
    }
};
