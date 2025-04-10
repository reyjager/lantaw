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
        Schema::create('myblog', function (Blueprint $table) {
            $table->unsignedBigInteger('myblog_id')->primary();
            $table->string('title');
            $table->string('slug')->unique();
            $table->longText('content');
            $table->string('image')->nullable();
            $table->unsignedBigInteger('author_id');
            $table->foreign('author_id')->references('user_id')->on('users')->onDelete('cascade');
            $table->unsignedBigInteger('category_id')->nullable();
            // Reference the correct column, category_id
            $table->foreign('category_id')->references('category_id')->on('categories')->onDelete('set null');
            $table->json('tags')->nullable();
            $table->enum('status', ['draft', 'published', 'archived'])->default('draft');
            $table->unsignedInteger('views_count')->default(0);
            $table->timestamp('published_at')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('myblog');
    }
};
