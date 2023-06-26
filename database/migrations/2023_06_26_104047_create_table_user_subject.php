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
        Schema::create('user_subject', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('subject_id');

            $table->primary(['user_id', 'subject_id']);

            $table->foreign('user_id')
            ->references('id')->on('users')
            ->onDelete('cascade');

            $table->foreign('subject_id')
            ->references('id')->on('subject')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('user_subject', function (Blueprint $table) {
            Schema::dropIfExists('user_subject');
        });
    }
};
