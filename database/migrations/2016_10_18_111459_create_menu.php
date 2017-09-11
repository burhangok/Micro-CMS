<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMenu extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('menu', function (Blueprint $table) {
        $table->increments ('item_id');
        $table->string('name')->nullable();
        $table->string('url')->nullable();
        $table->boolean('isHeader')->nullable();
        $table->boolean('isFooter')->nullable();
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
       Schema::drop('menu');
    }
}
