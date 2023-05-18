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
        Schema::create('pops', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users', 'id');
            $table->text('tweet')->nullable();
            $table->string('file')->nullable();
            $table->boolean('is_video')->nullable();
            $table->string('is_fav')->default('false');
            // $table->string('name');
            // $table->string('image');
            // $table->string('handle');
            // $table->string('comments');
            // $table->string('retweets');
            // $table->string('likes');
            // $table->string('analytics');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pops');
    }
};
