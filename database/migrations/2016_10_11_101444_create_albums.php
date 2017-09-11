<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlbums extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('albums', function (Blueprint $table) {
        $table->increments ('album_id');
        $table->string('name')->nullable();
        $table->string('content')->nullable();
        $table->string('meta_desc')->nullable();
        $table->string('meta_keywords')->nullable();
        $table->string('thumbnail')->nullable();
        $table->string('published_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('albums');
    }
}
