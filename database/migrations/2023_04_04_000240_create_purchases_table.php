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
        Schema::create('purchases', function (Blueprint $table) {
            $table->id();
            $table->string('Quantity');
            $table->string('price');
            $table->string('time')->nullable();
            $table->unsignedBigInteger("student_id");
            $table->foreign("student_id")->references("id")->on("students")->onDelete('cascade');
            $table->unsignedBigInteger("product_id");
            $table->foreign("product_id")->references("id")->on("products")->onDelete('cascade');
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
        Schema::dropIfExists('purchases');
    }
};
