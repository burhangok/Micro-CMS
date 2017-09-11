<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReference extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('references', function (Blueprint $table) {
        $table->increments ('reference_id');
        $table->string('title')->nullable();
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
        Schema::drop('references');
    }
}
