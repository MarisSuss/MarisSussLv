<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('title_en')->unique();
            $table->string('title_lv')->unique();
            $table->string('description_en');
            $table->string('description_lv');
            $table->text('content_en');
            $table->text('content_lv');
            $table->string('image_path')->nullable(); // Optional image path
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('posts');
    }
}