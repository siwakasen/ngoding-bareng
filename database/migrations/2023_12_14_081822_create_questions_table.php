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
        Schema::create('questions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_user')->constrained('users')->references('id')->on('users')->onDelete('cascade');
            $table->foreignId('id_content')->constrained('content_courses')->references('id')->on('content_courses')->onDelete('cascade');
            $table->unsignedBigInteger('id_parent')->nullable(); // New column for self-referencing
            $table->foreign('id_parent')->references('id')->on('questions')->onDelete('cascade');
            $table->string('detail_question');
            $table->date('date');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('questions');
    }
};
