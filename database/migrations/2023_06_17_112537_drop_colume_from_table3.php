<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
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
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        Schema::table('lab_appointments', function (Blueprint $table) {
            $table->dropColumn('time');
            $table->dropColumn('day');
            $table->dropForeign('lab_appointments_lab_manager_id_foreign');
            $table->dropColumn('lab_manager_id');
            $table->dropForeign('lab_appointments_student_id_foreign');
            $table->dropColumn('student_id');
        });
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('table', function (Blueprint $table) {
            //
        });
    }
};
