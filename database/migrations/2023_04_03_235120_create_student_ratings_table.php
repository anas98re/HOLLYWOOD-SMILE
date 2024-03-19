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
        Schema::create('student_ratings', function (Blueprint $table) {
            $table->id();
            $table->string('value');
            $table->unsignedBigInteger("patient_id")->nullable();
            $table->foreign("patient_id")->references("id")->on("patients")->onDelete('set null');
            $table->unsignedBigInteger("student_id");
            $table->foreign("student_id")->references("id")->on("students")->onDelete('cascade');
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
        Schema::dropIfExists('student_ratings');
    }
};
