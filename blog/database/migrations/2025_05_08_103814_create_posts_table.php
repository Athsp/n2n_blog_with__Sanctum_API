<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();  // Auto-incrementing ID
            $table->string('title');  // Post title
            $table->string('slug')->unique();  // Slug for the URL (must be unique)
            $table->text('content');  // Content of the post
            $table->enum('status', ['draft', 'published'])->default('draft');  // Post status
            $table->foreignId('user_id')->constrained()->onDelete('cascade');  // Foreign key linking to the users table (cascades on delete)
            $table->timestamps();  // Created at and updated at timestamps
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
