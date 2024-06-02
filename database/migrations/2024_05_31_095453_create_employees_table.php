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
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('email')->nullable();
            $table->string('name');
            $table->string('surname');
            $table->string('patronymic')->nullable();
            $table->integer('age');
            $table->integer('experience')->nullable();
            $table->string('photo')->nullable();
            $table->integer('avarage_salary');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
