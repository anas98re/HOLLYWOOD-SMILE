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
        Schema::create('student_tasks', function (Blueprint $table) {
            $table->id();
            $table->string('task_name');
            $table->string('description')->nullable();
            $table->string('number')->nullable();
            $table->string('starting_date')->nullable();
            $table->string('end_date');
            $table->boolean('task_status')->nullable();
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
        Schema::dropIfExists('student_tasks');
    }
};
