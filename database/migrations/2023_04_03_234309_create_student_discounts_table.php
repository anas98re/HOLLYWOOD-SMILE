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
        Schema::create('student_discounts', function (Blueprint $table) {
            $table->id();
            $table->string('value');
            $table->string('starting_date')->nullable();
            $table->string('end_date')->nullable();
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
        Schema::dropIfExists('student_discounts');
    }
};
