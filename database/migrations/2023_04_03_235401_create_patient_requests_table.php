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
        Schema::create('patient_requests', function (Blueprint $table) {
            $table->id();
            $table->enum('type', ['consultation', 'request']);
            $table->boolean('is_done')->default(0)->nullable();
            $table->unsignedBigInteger("disease_name_id")->nullable();
            $table->foreign("disease_name_id")->references("id")->on("diseases")->onDelete('cascade');
            $table->string('description')->nullable();
            $table->string('title');
            $table->string('phoneNumber')->nullable();
            $table->unsignedBigInteger("patient_id");
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
        Schema::dropIfExists('patient_requests');
    }
};
