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
            $table->string('photo')->nullable();
            $table->unsignedBigInteger("patient_id")->nullable();
            $table->foreign("patient_id")->references("id")->on("patients")->onDelete('cascade');
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
