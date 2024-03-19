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
        Schema::create('prescriptions', function (Blueprint $table) {
            $table->id();
            $table->string('disease_name');
            $table->string('description');
            $table->string('starting_date')->nullable();
            $table->string('end_date')->nullable();
            $table->unsignedBigInteger("patient_id");
            $table->foreign("patient_id")->references("id")->on("patients")->onDelete('cascade');
            $table->unsignedBigInteger("student_id")->nullable();
            $table->foreign("student_id")->references("id")->on("students")->onDelete('set null');
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
        Schema::dropIfExists('prescriptions');
    }
};
