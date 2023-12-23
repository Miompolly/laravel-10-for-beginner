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
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            $table->string('Names')->nullable(false);
            $table->integer('Amount')->nullable(false);
            $table->integer('Hours')->nullable(false)->default(0);
            $table->foreignId('Created_by')->constrained('users');
            $table->dateTime('StartingDate');
            $table->boolean('is_starting');
            $table->enum('is_finished',['yes','no']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tasks');
    }
};
