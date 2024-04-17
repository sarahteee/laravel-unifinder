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
            $table->unsignedBigInteger('country_id')->nullable()->after('imageURL'); // Adding the country_id column
            $table->foreign('country_id')->references('id')->on('countries')->onDelete('set null'); // Foreign key constraint
        });
    }

    public function down()
    {
        Schema::table('universities', function (Blueprint $table) {
            $table->dropForeign(['country_id']); // Drop the foreign key constraint
            $table->dropColumn('country_id'); // Drop the column
        });
    }
};
