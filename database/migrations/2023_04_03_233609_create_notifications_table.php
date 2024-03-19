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
        Schema::create('notifications', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("sender_id");
            $table->foreign("sender_id")->references("id")->on("users")->onDelete('cascade');
            $table->unsignedBigInteger("reciver_id");
            $table->foreign("reciver_id")->references("id")->on("users")->onDelete('cascade');
            $table->string('title')->nullable();
            $table->string('text');
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
        Schema::dropIfExists('notifications');
    }
};
