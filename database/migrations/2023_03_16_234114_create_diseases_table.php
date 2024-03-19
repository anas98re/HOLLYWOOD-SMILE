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
        Schema::create('diseases', function (Blueprint $table) {
            $table->id();
            $table->enum('type', ['Bachelor_Degree', 'Master_Degree'])->nullable();
            $table->enum('specialization', ['جراحة', 'طب أسنان الأطفال','طب الفم', 'تقويم','لثة', 'تعويضات متحركة','تعويضات ثابتة', 'تجميل','لبية'])->nullable();
            $table->enum('year', ['first', 'second','third','fourth', 'fifth'])->nullable();
            $table->enum('Semester', ['first', 'second'])->nullable();
            $table->string('Department')->nullable();
            $table->string('subject')->nullable();
            $table->string('clinical_condition')->nullable();
            $table->string('number')->nullable();
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
        Schema::dropIfExists('diseases');
    }
};
