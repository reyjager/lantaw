<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    // Example migration for the comments table
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->id(); // ID for the comment (optional, if you want a primary key)
            $table->bigInteger('post_id'); // Foreign key to the post table
            $table->bigInteger('user_id'); // Foreign key to the user table
            $table->text('content'); // Comment content
            $table->timestamps(); // Created at & Updated at timestamps

            // Foreign key constraints
            $table->foreign('post_id')->references('post_id')->on('posts')->onDelete('cascade');
            $table->foreign('user_id')->references('user_id')->on('users')->onDelete('cascade');
        });
    }





    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comments');
    }
};
