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
        Schema::create('calendars', function (Blueprint $table) {
            $table->id();
            $table->string('date')->nullable();
            $table->string('time')->nullable();
            $table->string('disease_name')->nullable();
            $table->enum('type', ['consultation', 'request'])->nullable();
            $table->enum('day', ['Saturday', 'Sunday','Monday', 'Tuesday','Wednesday', 'Thursday']);
            $table->enum('is_end', ['yes', 'no'])->nullable();
            $table->unsignedBigInteger("patient_id");
            $table->foreign("patient_id")->references("id")->on("patients")->onDelete('cascade');
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
        Schema::dropIfExists('calendars');
    }
};
