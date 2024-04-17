<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('university_statistics', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('university_id');
            $table->year('year');
            $table->integer('number_of_students');
            $table->float('student_to_staff_ratio');
            $table->timestamps();

            $table->foreign('university_id')->references('id')->on('universities')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('university_statistics');
    }
};
