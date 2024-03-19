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
        Schema::table('lab_appointments', function (Blueprint $table) {
            $table->string('duration')->nullable();
            $table->string('daysAvailable')->nullable();
            $table->string('patientName')->nullable();
            $table->time('start_time');
            $table->time('end_time');
            $table->boolean('is_available')->default(true);
            $table->unsignedBigInteger("student_id")->nullable();
            $table->foreign("student_id")->references("id")->on("students")->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('lab_appointments', function (Blueprint $table) {
            //
        });
    }
};
