<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePages extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('pages', function (Blueprint $table) {
            $table->increments('page_id');
             $table->string('title');
            $table->string('content');
              $table->string('videoFile');
              $table->string('imageFile');
            $table->string('meta_keywords');
            $table->string('meta_desc');
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
       Schema::drop('pages');
    }
}
