<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('universities', function (Blueprint $table) {
            $table->year('year')->nullable();
            $table->integer('number_of_students')->nullable();
            $table->float('student_to_staff_ratio', 8, 2)->nullable();  // Adjust precision as needed
        });
    }

    public function down()
    {
        Schema::table('universities', function (Blueprint $table) {
            $table->dropColumn(['year', 'number_of_students', 'student_to_staff_ratio']);
        });
    }
};
