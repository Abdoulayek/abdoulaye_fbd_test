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
        Schema::create('data', function (Blueprint $table) {
            $table->string('Rank'); 
            $table->string('Name');
            $table->string('Platform');
            $table->integer('Year');
            $table->string('Genre'); 
            $table->string('Publisher');
            $table->string('NA_Sales');
            $table->string('EU_Sales');
            $table->string('JP_Sales'); 
            $table->string('Other_Sales');
            $table->string('Global_Sales');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data');
    }
};
