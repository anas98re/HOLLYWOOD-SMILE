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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->boolean('available')->default(1)->nullable();
            $table->unsignedBigInteger("user_id")->unique();
            $table->foreign("user_id")->references("id")->on("users")->onDelete('cascade');
            $table->enum('type', ['Bachelor_Degree', 'Master_Degree']);
            $table->enum('year', ['first', 'second','third','fourth', 'fifth'])->nullable();
            $table->enum('Semester', ['first', 'second'])->nullable();
            $table->enum('specializations', ['جراحة', 'طب أسنان الأطفال','أمراض الفم', 'تقويم','لثة', 'تعويضات المتحركة','تعويضات الثابتة', 'تجميل','لبية'])->nullable();
            $table->string('university_card')->nullable();
            $table->string('numberOfConsultations')->nullable();
            $table->string('description')->nullable();
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
        Schema::dropIfExists('students');
    }
};
