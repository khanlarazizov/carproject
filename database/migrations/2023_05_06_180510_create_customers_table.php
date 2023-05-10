<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->bigIncrements('id')->nullable();
            $table->string('name')->nullable();
            $table->string('surname')->nullable();
            $table->date('birthdate')->nullable();
            $table->string('gender')->nullable();
            $table->unsignedBigInteger('carbrand');
            $table->foreign('carbrand')->references('id')->on('cars');
//            $table->foreignId('carbrand')->constrained('cars')->onUpdate('cascade')->onDelete('cascade')->nullable();
            $table->year('releaseyear')->nullable();
            $table->string('color')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};
