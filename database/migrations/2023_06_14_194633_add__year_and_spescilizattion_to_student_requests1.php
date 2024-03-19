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
        Schema::table('student_requests', function (Blueprint $table) {
            $table->enum('specializations', ['جراحة', 'طب أسنان الأطفال','طب الفم', 'تقويم','لثة', 'تعويضات المتحركة','تعويضات الثابتة', 'تجميل','لبية'])->nullable();
            $table->enum('year', ['first', 'second','third','fourth', 'fifth'])->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('student_requests', function (Blueprint $table) {
            //
        });
    }
};
