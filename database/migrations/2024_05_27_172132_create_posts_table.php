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
            $table->id(); // id autoincremental
            $table->string('title'); // title de tipo String
            $table->string('poster')->nullable(); // poster de tipo String
            $table->boolean('habilited')->default(false); // habilited de tipo boolean, por defecto false
            $table->text('content'); // content de tipo text
            $table->timestamps(); // created_at y updated_at de tipo timestamp
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

