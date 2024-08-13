<?php

// Migration file: 2024_08_11_163153_create_blogs_table.php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogsTable extends Migration
{
    public function up()
    {
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug');
            $table->text('content');
            $table->string('image')->nullable();
            $table->unsignedBigInteger('author_id');
            $table->timestamp('published_at')->nullable();
            $table->unsignedBigInteger('category_id');
            $table->timestamps();

            $table->foreign('author_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('category_id')->references('id')->on('blog_categories')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('blogs');
    }
}

