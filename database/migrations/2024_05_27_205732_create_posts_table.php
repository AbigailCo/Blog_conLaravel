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
            $table->id(); // Campo 'id' autoincremental
            $table->string('title'); // Campo 'title' de tipo string
            $table->string('poster'); // Campo 'poster' de tipo string
            $table->boolean('habilitated')->default(false); // Campo 'habilitated' de tipo booleano con valor por defecto false
            $table->text('content'); // Campo 'content' de tipo text
            $table->timestamps(); // Timestamps de Eloquent (created_at y updated_at)
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



