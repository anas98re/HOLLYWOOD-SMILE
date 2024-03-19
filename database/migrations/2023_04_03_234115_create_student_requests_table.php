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
        Schema::create('student_requests', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->boolean('is_done')->default(0)->nullable();
            $table->enum('priority',['hight','medium', 'low'])->nullable();
            $table->string('subject')->nullable();
            $table->string('number')->nullable();
            $table->unsignedBigInteger("disease_name_id");
            $table->foreign("disease_name_id")->references("id")->on("diseases")->onDelete('cascade');
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
        Schema::dropIfExists('student_requests');
    }
};
