<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContact extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contact', function (Blueprint $table) {
        $table->increments ('company_id');
        $table->string('company_name')->nullable();
        $table->string('taxes_no')->nullable();
        $table->string('address')->nullable();
        $table->string('telephone')->nullable();
        $table->string('web')->nullable();
        $table->string('email')->nullable();
        $table->string('fax')->nullable();
        $table->string('map_url')->nullable();
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
        Schema::drop('contact');
    }
}
