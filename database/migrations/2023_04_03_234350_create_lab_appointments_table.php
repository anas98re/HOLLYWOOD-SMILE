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
        Schema::create('lab_appointments', function (Blueprint $table) {
            $table->id();
            $table->string('date');
            $table->string('time');
            $table->enum('day', ['Saturday', 'Sunday','Monday', 'Tuesday','Wednesday', 'Thursday']);
            $table->enum('is_end', ['yes', 'no'])->nullable();
            $table->unsignedBigInteger("lab_manager_id");
            $table->foreign("lab_manager_id")->references("id")->on("lab_managers")->onDelete('cascade');
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
        Schema::dropIfExists('lab_appointments');
    }
};
